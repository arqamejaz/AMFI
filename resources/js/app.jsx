// resources/js/app.js

import React from "react";
import ReactDOM from "react-dom";
import { createRoot } from 'react-dom/client';
import {WalletConnection} from "./components/ConnectWallet";
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';




if (document.getElementById("wallet-connect")) {
    const root = createRoot(document.getElementById("wallet-connect"));
    root.render(<WalletConnection />);
}

