import{G as Z,cf as X,aQ as Y,aH as _,aE as ee,cB as g,aI as i,aZ as te,cE as ne,aK as H,b1 as U,b0 as ae,aO as j,cF as ie,cG as oe,cH as K,cI as x,cJ as se,cK as le,cL as ce,cM as re,bh as de,ba as ue,b2 as O,be as fe,cd as he,cD as me,H as ge,_ as r}from"./app-DcDr58Fb.js";import{g as _e,l as we}from"./oauth-B0ynjVYl.js";function ye(e){switch(e){case"google":return"Sign In - Google Accounts";default:return`Sign In - ${e.slice(0,1).toUpperCase()}${e.slice(1)}`}}function pe(e){switch(e){case"facebook":return{width:715,height:555};default:return{width:350,height:500}}}function xe(e,t,n){switch(e){case"apple":case"facebook":case"google":case"farcaster":case"telegram":case"discord":return _e({authOption:e,client:t,ecosystem:n});default:return""}}function be({authOption:e,themeObj:t,client:n,ecosystem:l}){const{height:w,width:c}=pe(e),b=(window.innerHeight-w)/2,E=(window.innerWidth-c)/2,s=window.open(xe(e,n,l),void 0,`width=${c}, height=${w}, top=${b}, left=${E}`);if(s){const u=ye(e);s.document.title=u,s.document.body.innerHTML=Ee,s.document.body.style.background=t.colors.modalBg,s.document.body.style.color=t.colors.accentText}return s&&window.addEventListener("beforeunload",()=>{s==null||s.close()}),s}const Ee=`
<svg class="loader" viewBox="0 0 50 50">
  <circle
    cx="25"
    cy="25"
    r="20"
    fill="none"
    stroke="currentColor"
    stroke-width="4"
  />
</svg>

<style>
  body,
  html {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .loader {
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
  }

  .loader circle {
    animation: loading 1.5s linear infinite;
  }

  @keyframes loading {
    0% {
      stroke-dasharray: 1, 150;
      stroke-dashoffset: 0;
    }
    50% {
      stroke-dasharray: 90, 150;
      stroke-dashoffset: -35;
    }
    100% {
      stroke-dasharray: 90, 150;
      stroke-dashoffset: -124;
    }
  }

  @keyframes spin {
    100% {
      transform: rotate(360deg);
        }
  }
</style>
`;async function Le(e){const n=await(await fetch(`${Z("inAppWallet")}/api/2024-05-05/ecosystem-wallet`,{headers:{"x-ecosystem-id":e}})).json();if(!n||n.code==="UNAUTHORIZED")throw new Error(n.message||`Could not find ecosystem wallet with id ${e}, please check your ecosystem wallet configuration.`);return n.authOptions??void 0}function Ie(e){return/^\S+@\S+\.\S+$/.test(e.replace(/\+/g,""))}const z=["email","phone","google","apple","facebook","passkey"],je=e=>{var $,D,M;const t=e.locale,{wallet:n}=e,l=X(),w=Y(),c=_.useMemo(()=>{var a,o;return e.wallet.id==="inApp"?(o=(a=e.wallet.getConfig())==null?void 0:a.metadata)==null?void 0:o.image:void 0},[e.wallet]),b={google:t.signInWithGoogle,facebook:t.signInWithFacebook,apple:t.signInWithApple,discord:t.signInWithDiscord,farcaster:"Farcaster",telegram:"Telegram"},{data:E,isLoading:s}=ee({queryKey:["auth-options",n.id],queryFn:async()=>g(n)?Le(n.id):null,enabled:g(n),retry:!1}),u=g(n)?E??z:((D=($=n.getConfig())==null?void 0:$.auth)==null?void 0:D.options)??z,L=u.indexOf("email"),m=L!==-1,I=u.indexOf("phone"),f=I!==-1,[k,W]=_.useState(null),h=_.useMemo(()=>k||(m&&f?L<I?"email":"phone":m?"email":f?"phone":"none"),[m,f,L,I,k]);if(g(n)&&s)return i.jsx(te,{});const G=u.includes("passkey"),A=h==="email"?t.emailPlaceholder:t.phonePlaceholder,T=h==="email"?t.emailRequired:t.phoneRequired;let y="text";h==="email"?y="email":h==="phone"&&(y="tel");const d=u.filter(a=>ne.includes(a)),C=d.length>0,R=g(n)?{id:n.id,partnerId:(M=n.getConfig())==null?void 0:M.partnerId}:void 0,q=async a=>{var F,V;const o=n.getConfig(),S=((F=o==null?void 0:o.auth)==null?void 0:F.mode)??"popup";if(o&&"auth"in o&&S!=="popup"&&!e.isLinking)return we({authOption:a,client:e.client,ecosystem:R,redirectUrl:(V=o==null?void 0:o.auth)==null?void 0:V.redirectUrl,mode:S});try{const p=be({authOption:a,themeObj:w,client:e.client,ecosystem:R});if(!p)throw new Error("Failed to open login window");const B={chain:e.chain,client:e.client,strategy:a,openedWindow:p,closeOpenedWindow:P=>{P.close()}},Q=(()=>{if(e.isLinking){if(n.id!=="inApp")throw new Error("Only in-app wallets support multi-auth");return he(n,B)}else{const P=n.connect(B);return me(a,ge),P}})();l({socialLogin:{type:a,connectionPromise:Q}}),e.select()}catch(p){console.error(`Error signing in with ${a}`,p)}};function J(){l({passkeyLogin:!0}),e.select()}function N(){l({walletLogin:!0}),e.select()}const v=d.length>2;return i.jsxs(H,{flex:"column",gap:"md",style:{position:"relative"},children:[c&&i.jsxs(i.Fragment,{children:[i.jsx(U,{client:e.client,src:c.src,alt:c.alt,width:`${c.width}`,height:`${c.height}`,style:{margin:"auto"}}),i.jsx(ae,{y:"xxs"})]}),C&&i.jsx(H,{flex:"row",center:"x",gap:d.length>4?"xs":"sm",style:{justifyContent:"space-between",display:"grid",gridTemplateColumns:`repeat(${d.length}, 1fr)`},children:d.map(a=>{const o=v?d.length>4?j.md:j.lg:j.md;return i.jsxs(ke,{"aria-label":`Login with ${a}`,"data-variant":v?"icon":"full",variant:"outline",disabled:e.disabled,onClick:()=>{q(a)},children:[i.jsx(U,{src:ie[a],width:o,height:o,client:e.client}),!v&&`${d.length===1?"Continue with ":""}${b[a]}`]},a)})}),e.size==="wide"&&C&&(m||f)&&i.jsx(oe,{text:t.or}),m&&i.jsx(i.Fragment,{children:h==="email"?i.jsx(K,{type:y,onSelect:a=>{l({emailLogin:a}),e.select()},placeholder:A,name:"email",errorMessage:a=>{if(!Ie(a.toLowerCase()))return t.invalidEmail},disabled:e.disabled,emptyErrorMessage:T,submitButtonText:t.submitEmail}):i.jsx(x,{client:e.client,icon:se,onClick:()=>{W("email")},title:t.emailPlaceholder,disabled:e.disabled})}),f&&i.jsx(i.Fragment,{children:h==="phone"?i.jsx(K,{format:"phone",type:y,onSelect:a=>{l({phoneLogin:a.replace(/[-\(\) ]/g,"")}),e.select()},placeholder:A,name:"phone",errorMessage:a=>{const o=a.replace(/[-\(\) ]/g,"");if(!/^[0-9]+$/.test(o)&&f)return t.invalidPhone},disabled:e.disabled,emptyErrorMessage:T,submitButtonText:t.submitEmail}):i.jsx(x,{client:e.client,icon:le,onClick:()=>{W("phone")},title:t.phonePlaceholder,disabled:e.disabled})}),G&&i.jsx(i.Fragment,{children:i.jsx(x,{client:e.client,icon:ce,onClick:()=>{J()},title:t.passkey,disabled:e.disabled})}),e.isLinking&&i.jsx(i.Fragment,{children:i.jsx(x,{client:e.client,icon:re(""),onClick:()=>{N()},title:t.linkWallet})})]})},ke=de(ue)({flexGrow:1,"&[data-variant='full']":{display:"flex",justifyContent:"flex-start",padding:O.md,gap:O.sm,fontSize:fe.md,fontWeight:500,transition:"background-color 0.2s ease","&:active":{boxShadow:"none"}},"&[data-variant='icon']":{padding:O.sm}});async function ve(e){switch(e){case"es_ES":return(await r(async()=>{const{default:t}=await import("./es-KRP1eUth.js");return{default:t}},[])).default;case"ja_JP":return(await r(async()=>{const{default:t}=await import("./ja-CvlQDx_E.js");return{default:t}},[])).default;case"tl_PH":return(await r(async()=>{const{default:t}=await import("./tl-DYNbjJIy.js");return{default:t}},[])).default;case"vi_VN":return(await r(async()=>{const{default:t}=await import("./vi-DNa2Is64.js");return{default:t}},[])).default;case"de_DE":return(await r(async()=>{const{default:t}=await import("./de-B4p3brce.js");return{default:t}},[])).default;case"ko_KR":return(await r(async()=>{const{default:t}=await import("./kr-l36CKqHK.js");return{default:t}},[])).default;case"fr_FR":return(await r(async()=>{const{default:t}=await import("./fr-DIyoT90O.js");return{default:t}},[])).default;default:return(await r(async()=>{const{default:t}=await import("./en-ihCLWX_K.js");return{default:t}},[])).default}}function Oe(e){const[t,n]=_.useState(void 0);return _.useEffect(()=>{ve(e).then(l=>{n(l)})},[e]),t}export{je as C,be as o,Oe as u};
