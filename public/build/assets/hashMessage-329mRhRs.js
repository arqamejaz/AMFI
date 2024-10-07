import{dM as e,dN as a,dO as i,a4 as o}from"./app-CRZ4B0MW.js";const c=`Ethereum Signed Message:
`;function u(t,n){const r=typeof t=="string"?e(t):t.raw instanceof Uint8Array?t.raw:a(t.raw),s=e(`${c}${r.length}`);return i(o([s,r]),n)}export{u as hashMessage};
