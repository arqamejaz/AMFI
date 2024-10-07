import{dO as e,dP as a,dQ as i,a6 as o}from"./app-DcDr58Fb.js";const c=`Ethereum Signed Message:
`;function u(t,n){const r=typeof t=="string"?e(t):t.raw instanceof Uint8Array?t.raw:a(t.raw),s=e(`${c}${r.length}`);return i(o([s,r]),n)}export{u as hashMessage};
