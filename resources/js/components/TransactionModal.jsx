import { useState } from "react";
import { createPortal } from "react-dom"
import { ethers } from "ethers";
import { useNavigate } from "react-router-dom";
// import global from "global";
// import WalletConnectProvider from "@walletconnect/web3-provider";


export const TransactionModal = ({ address, tAmount, currency }) => {
    const [transactionHash, setTransactionHash] = useState(null);
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [amount, setAmount] = useState(tAmount);
    const [token, setToken] = useState(0);
    const [currentBalance, setCurrentBalance] = useState(0);
    const [errorMessage, setErrorMessage] = useState(0);

    const sendTransaction = async (event) => {
        event.preventDefault(); // Prevent form submission behavior
        if (!address) {
            alert("Please connect your wallet first.");
            return;
        }
        if (!name || !email) {
            alert("Please enter all required fields.");
            return;
        }
        // console.log(window.ethereum.request())

        // let provider;

        // // Set up provider depending on whether MetaMask or WalletConnect is available
        // if (typeof window.ethereum !== "undefined") {
        //   // Web3 provider exists (MetaMask or other browser extensions)
        //   provider = new ethers.providers.Web3Provider(window.ethereum);
        // } else {
        //   // Fallback to WalletConnect
        //   const wcProvider = new WalletConnectProvider({
        //     infuraId: "223131ba87834950b982135c0e236c26", // Replace with your Infura project ID
        //   });

        //   try {
        //     // Enable WalletConnect provider
        //     await wcProvider.enable();
        //     provider = new ethers.providers.Web3Provider(wcProvider);
        //   } catch (error) {
        //     console.error("Failed to connect to WalletConnect", error);
        //     return;
        //   }
        // }


        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const signer = provider.getSigner();
        const formattedAmount = Number(tAmount).toFixed(18);
        let transaction;
        const recipient = "0x143c5eC14522d150F4F5E1ddCA7E90BA42dbD438"; // Replace with actual recipient address
        if (currency === "ETH" || currency === "BNB") {
        // For Ethereum (ETH) and Binance (BNB) transaction
            transaction = {
                to: recipient,
                value: ethers.utils.parseEther(formattedAmount.toString()), // Amount in ETH
            };
        } else {
        // For USDT or USDC on BSC, you will need to use the ERC20 transfer method
        const tokenAddress = currency === "USDT"
            ? "0x55d398326f99059ff775485246999027b3197955"
            : "0x8ac76a51cc950d9822d68b83fe1ad97b32cd580d"; // Replace with actual token contract addresses
            // console.log(currency);
        const tokenABI = [
            "function transfer(address to, uint amount) returns (bool)"
        ];

        const tokenContract = new ethers.Contract(tokenAddress, tokenABI, signer);
        transaction = await tokenContract.transfer(recipient, ethers.utils.parseUnits(formattedAmount.toString(), 18));
        }

        try {
            // Example transaction (Sending 0.01 ETH)
            const tx = await signer.sendTransaction(transaction);

            console.log("Transaction Hash:", tx.hash);
            setTransactionHash(tx.hash);
            setAmount(formattedAmount)
            setToken(10000);
            if (tx.hash) {
                alert("Transaction Successfull");
                sendToBackend(tx.hash);
            }
        } catch (error) {
            const balance = await signer.getBalance();
            setCurrentBalance(balance);


            let errorMessage = `Transaction failed. Current balance: ${currentBalance} ${currency}\n`;

            if (error?.data?.message) {
                errorMessage += `Error message: ${error.data.message}`;
            } else if (error?.message) {
                errorMessage += `Error message: ${error.message}`;
            } else {
                errorMessage += "Unknown error occurred.";
            }

            setErrorMessage(errorMessage); // Store the error message
            showModal(); // Programmatically show the modal
        }
    };

    const sendToBackend = async (txHash) => {
        // Send the data to the backend API
        const jsonData = {
            wallet_address: address,
            name: name,
            email: email,
            currency: currency,
            tx_hash: txHash,
            amount: amount,
            allocated_tokens: token,
        };
        console.log(jsonData);
        try {
            const response = await fetch("/api/transactions", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(jsonData),
            });

            const result = await response.json();
            if (result.success) {
                alert("Transaction saved successfully on the backend!");
                sessionStorage.setItem('walletAddress',address);
                try {
                    const response = await fetch('/auth/verify-wallet', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({ address }),
                    });
                    const data = await response.json();
                    if (data.success) {
                        // Handle dashboard access, perhaps redirect to the dashboard or set a session
                        // window.location.href = "/dashboard";
                        console.log(data);
                    } else {
                        console.log('Wallet not found in the database');
                    }
                } catch (error) {
                    console.error('Error verifying wallet address:', error);
                }
            } else {
                alert("Failed to save transaction on backend.");
            }
        } catch (error) {
            console.error("Error sending data to backend:", error);
        }
    };
    const showModal = () => {
        const modalElement = new window.bootstrap.Modal(document.getElementById("errorModal"));
        modalElement.show();
      };

    return createPortal(
            <div className="modal fade" id="seedRoundModal" tabIndex="-1" aria-labelledby="seedRoundModalLabel" aria-hidden="true">
                <div className="modal-dialog modal-lg">
                    <div className="modal-content">

                        <div className="modal-body">
                            <form>
                                <p>Thank you for your interest in AMFI Project! Please fill out the form below to apply for our seed round whitelist. By participating in seedround you are expressing your intent to purchase AMFI token at an early stage, subject to approval.</p>
                                <div className="form-group">
                                    <label>Name: </label>
                                    <input className="form-control" type="text" onChange={(e) => setName(e.target.value)} placeholder="Enter your name" required />
                                </div>
                                <div className="form-group">
                                    <label>Email: </label>
                                    <input className="form-control" type="email" onChange={(e) => setEmail(e.target.value)} placeholder="info@amfi.com" required />
                                </div>
                                <div className="form-group">
                                    <label>Are you an accredited investor? </label>
                                    <select className="form-control" name="question" id="question" required>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div className="form-check">
                                    <input className="form-check-input" type="checkbox" value="" id="term&cond" required />
                                    <label className="form-check-label" htmlFor="term&cond">
                                        Do you agree that token purchase in the seed round will be claimed after presale ends?
                                    </label>
                                </div>
                                <br />
                                {address && (
                                    <div>

                                        <p>Wallet Address: {address}</p>
                                        <p>curr: {tAmount}</p>
                                        <button className="btn btn-primary" onClick={sendTransaction}>Submit & Pay</button>

                                        <div className="modal fade" id="errorModal" tabIndex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
                                        <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                            <h5 className="modal-title" id="errorModalLabel">Transaction Error</h5>
                                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div className="modal-body">
                                            {/* Display the error message */}
                                            <p>{errorMessage}</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                )}
                            </form>
                        </div>
                    </div>
                </div>
            </div>, document.body)
}

