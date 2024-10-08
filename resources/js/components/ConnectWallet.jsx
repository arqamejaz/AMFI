import React, { useState } from "react";
import { createThirdwebClient, defineChain } from "thirdweb";
import { ThirdwebProvider, ConnectButton, ConnectEmbed , darkTheme, useNetworkSwitcherModal } from "thirdweb/react";
// import { sepolia, lineaSepolia  } from "thirdweb/chains"
// import { polygon } from "thirdweb/chains"
import { ethereum, bsc, polygon } from "thirdweb/chains"
import { createWallet, injectedProvider } from "thirdweb/wallets";
import { TransactionModal } from './TransactionModal'
import { useNavigate } from "react-router-dom";
import { ethers } from "ethers";
import { SassColor } from "sass";
import { currencyApprovedForListingEvent } from "thirdweb/extensions/marketplace";

// Initialize Thirdweb Client with your client ID
const client = createThirdwebClient({
    clientId: "6e3341558f26a47c34200697879915fb", // Replace with your actual Thirdweb client ID
    secretKey: "X1lWKLzLGVgciMKAOeFlg4A6YVmMVIadiyQmNPMR-dfpBQ1L5C4DzT1pRfYNSK-NOMGDR4wmAbpWnggPBY0T5g",
});

// List of wallets you want to support
const wallets = [
    inAppWallet(),
    createWallet("io.metamask"), // MetaMask
    createWallet("com.trustwallet.app"),
    createWallet("me.rainbow"), // Rainbow Wallet
    createWallet("com.coinbase.wallet"), // Coinbase Wallet
    createWallet("io.zerion.wallet"), // Zerion Wallet
];

//Get live rates of currencies
const getLiveRates = async (currency) => {
    try {
        const response = await fetch(`/api/crypto-price/${currency}`);
        const data = await response.json();
        console.log(data.data[currency].quote.USD.price);
        return data.data[currency].quote.USD.price; // Extract price from the response
    } catch (error) {
        console.error("Error fetching live rates:", error);
        return null;
    }
};

const defaultChain = defineChain({
    // id: 11155111
    id: 56
})


const allChanis ={
    ETH: 1,
    BNB: 56,
    USDT: 56,
    USDC: 56,
}

export function WalletConnection() {
    const [currency, setCurrency] = useState(1)
    const [chainObject, setChainObject] = useState(defaultChain)
    const [address, setAddress] = useState(null); // For storing the connected wallet address
    const [loading, setLoading] = useState(false);
    const [transactionAmount, setTransactionAmount] = useState(null); // Example amount (can be dynamic)
    const [networkChain, setNetworkChain] = useState("ethereum"); // Default network is Ethereum
    const [walAddress, setWalAddress] = useState(null);


    // Handle Wallet Connect
    const handleConnect = (walletAddress) => {
        setAddress(walletAddress?.getAccount()?.address);
        sessionStorage.setItem('walletAddress', walletAddress?.getAccount()?.address);
        // sendToBackend(walletAddress?.getAccount()?.address);
        verifyWalletAddress(walletAddress?.getAccount()?.address);
        console.log("Connected with address:", walletAddress?.getAccount()?.address);
    };

     // Handle Wallet Disconnect
  const handleDisconnect = () => {
    setWalAddress(null); // Clear the address when disconnected
    sessionStorage.removeItem("walletAddress"); // Optionally clear session storage
    console.log("Disconnected wallet");
  };

  const handleSwitch = (walletAddress) => {
    setAddress(walletAddress?.getAccount()?.address);
    sessionStorage.setItem('walletAddress', walletAddress?.getAccount()?.address);
    // sendToBackend(walletAddress?.getAccount()?.address);
    verifyWalletAddress(walletAddress?.getAccount()?.address);
    console.log("Connected with address:", walletAddress?.getAccount()?.address);
  };


    const handleCurrencyChange = async (event) => {
        const selectedCurrency = event.target.value;
        setCurrency(selectedCurrency);
        let amount = null;
        if (selectedCurrency === "USDT" || selectedCurrency === "USDC"){
            setLoading(true);
            amount = (0.001); // Multiply by 250 (your fixed amount)
            setTransactionAmount(amount);
            setLoading(false);
        }
        else{
            setLoading(true);
            const liveRate = await getLiveRates(selectedCurrency); // Fetch live rate for the selected currency
            amount = (0.5/liveRate); // Multiply by 250 (your fixed amount)
            // amount = (0.00001)
            setTransactionAmount(amount);
            setLoading(false);
        }
        // const amount = (250 / liveRate); // Multiply by 250 (your fixed amount)
        // const amount = 0.0001;
        if (selectedCurrency === "ETH") {
            setNetworkChain("ethereum");
        }
        else {
            setNetworkChain("bsc");
        }
        // const selectedCurrency = event.target.value;
        const networkChainId = allChanis[selectedCurrency]
        const currentSelectedChain = defineChain({
            id: networkChainId
        })
        console.log("networkchain id:", networkChainId);
        setChainObject(currentSelectedChain)
        // setCurrency(selectedCurrency)
        // setLoading(true);
        // // // const rate = await getLiveRates(selectedCurrency); // Fetch live rate for the selected currency
        // // // const totalCostInUSD = (5 / rate); // Multiply by 250 (your fixed amount)
        // const totalCostInUSD = (0.0001); // testing amount
        // setcurrencyCost(totalCostInUSD); // Update the input with the calculated USD cost
        // setLoading(false);
    };

    // Handle network selection manually (if needed)
    const handleNetworkChange = (event) => {
        setNetworkChain(event.target.value);
        // setChainObject(networkChain)
        const currentSelectedChain = defineChain({
            id: networkChain
        })
        console.log("network chain",networkChain);
        setChainObject(currentSelectedChain)
    };

    // const sendToBackend = async (address) => {
    //     // Send the data to the backend API
    //     const data = {
    //         wallet_address: address,
    //     };
    //     try {
    //         const response = await fetch("/api/login", {
    //             method: "POST",
    //             headers: {
    //                 "Content-Type": "application/json",
    //             },
    //             body: JSON.stringify(data),
    //         });

    //         const result = await response.json();
    //         if (result.success) {
    //             alert("Wallet Address sent on backend");
    //         } else {
    //             alert("Failed to save transaction on backend.");
    //         }
    //     } catch (error) {
    //         console.error("Error sending data to backend:", error);
    //     }
    // };

    const verifyWalletAddress = async (walletAddress) => {
        try {
            const response = await fetch('/auth/verify-wallet', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ walletAddress }),
            });
            const data = await response.json();
            if (data.success) {
                // Handle dashboard access, perhaps redirect to the dashboard or set a session
                // window.location.href = "/dashboard";
                setWalAddress(walletAddress);
                console.log(data);
            } else {
                console.log('Wallet not found in the database');
            }
        } catch (error) {
            console.error('Error verifying wallet address:', error);
        }
    };

    return (
        <ThirdwebProvider>
            <link rel="stylesheet" href="/frontend/css/style.css" />
            <div className="counter-down">
                <div className="content">
                    <div className="counterdown-content">
                        <div className="amfi-price">
                            <div className="live-status">
                                <span className="live-text">Seed Round is live</span>
                                <span className="blinking-dot"></span>
                            </div>
                            <div className="">Target: <strong>$582,750</strong></div>
                            <h1>1 AMFI = $0.025</h1>
                            {/* <div className="amfi-allocation">
                                <div className="listing-text">Total Seeds:</div>
                                <div className="pl-2">2,331</div>
                            </div> */}
                        </div>
                        <div className="progress" style={{ height: '15px', backgroundColor: '#e9ecef', marginTop: '10px' }}>
                            <div
                                className="pro-bar"
                                role="progressbar"
                                style={{ width: '10%' }}
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="2331"
                            >
                            </div>
                        </div>
                        <div className="listing">
                            <div className="listing-text">Total Seeds:</div>
                            <div>2,331</div>
                            <div className="listing-text">Sold:</div>
                            <div>0</div>
                        </div>
                        <div className="listing">
                            <div className="listing-text">Seed Amount:</div>
                            <div>$250</div>
                            <div className="listing-text">Allocation:</div>
                            <div>10,000 AMFI </div>
                        </div>
                        <div className="payment-cost">
                            <div className="payment-dropdown">
                                <label>Payment</label>
                                <select id="payment-method" className="dropdown-select" value={currency} onChange={handleCurrencyChange}>
                                    <option>Select</option>
                                    <option value="ETH">ETH</option>
                                    <option value="BNB">BNB</option>
                                    <option value="USDT">USDT</option>
                                    <option value="USDC">USDC</option>
                                </select>
                            </div>
                            <div className="payment-dropdown">
                                <label>Network</label>
                                <select id="payment-method" className="dropdown-select" value={networkChain} onChange={handleNetworkChange} disabled>
                                    <option>Select</option>
                                    <option value="bsc">BSC</option>
                                    <option value="ethereum">ETH</option>
                                </select>
                            </div>
                            <div className="usd-cost">
                                <label>Total </label>
                                <input type="text" defaultValue={loading ? 'Calculating...' : transactionAmount !== null ? transactionAmount : ''}  disabled/>
                            </div>

                        </div>
                        <div className="ICO-buttons mt-30" >

                            <div className=" wow fadeInUp">
                                <a href="#" className="dream-btn" data-bs-toggle="modal"
                                    data-bs-target="#seedRoundModal">Join Whitelist</a>
                            </div>
                            <div className="text-right" >
                                <div>
                                    <ConnectButton
                                        client={client}
                                        chain={chainObject}
                                        wallets={wallets}
                                        switchButton={{
                                            label: "Switch Network",
                                            className: "dream-btn",
                                        }}
                                        connectButton={{
                                            label: "Connect Wallet",
                                            style: {fontSize:"12px"},
                                            className: "dream-btn",
                                         }}
                                         detailsButton={{
                                            className: "detail-btn",
                                          }}
                                        connectModal={{
                                            size: "compact",
                                            title: "Select Wallet to Connect",
                                            showThirdwebBranding: false,
                                        }}
                                        onConnect={(walletData) => handleConnect(walletData)}
                                        onDisconnect={handleDisconnect}
                                        onSwitch={(walletData) => handleSwitch(walletData)}
                                    />
                                    {/* <ConnectEmbed client={client} wallets={wallets} /> */}
                                </div>
                            </div>
                        </div>
                        {/* <button className="btn btn-primary" onClick={loginUser}>Go to dashboard</button> */}
                    </div>
                </div>
            </div>
            { walAddress && (
            <div className="mt-2" style={{ textAlign: 'center',  }}>
                <a href="/dashboard" style={{ fontWeight: 'bold', fontStyle: 'italic', textDecoration: 'underline' }}>Go to Dashboard</a>
            </div>
            )}
            <TransactionModal address={address} tAmount={transactionAmount} currency={currency}/>

        </ThirdwebProvider>
    );
}
