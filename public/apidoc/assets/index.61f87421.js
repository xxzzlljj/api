var e=Object.defineProperty,a=Object.defineProperties,r=Object.getOwnPropertyDescriptors,t=Object.getOwnPropertySymbols,o=Object.prototype.hasOwnProperty,s=Object.prototype.propertyIsEnumerable,n=(a,r,t)=>r in a?e(a,r,{enumerable:!0,configurable:!0,writable:!0,value:t}):a[r]=t;import{k as l,d as i,aL as d,l as p,n as c,q as m,s as y,H as g,v as u,aM as f,c as b,aR as v,y as O,aJ as j,aN as k,aP as h}from"./index.770d04a4.js";import{M as w,a as P,S as D}from"./Skeleton.833ef14c.js";const I={class:j(["md-detail"])},K={key:2,class:"md-content-wraper"},M={key:3,class:"md-anchor-wraper"},S=i((x=((e,a)=>{for(var r in a||(a={}))o.call(a,r)&&n(e,r,a[r]);if(t)for(var r of t(a))s.call(a,r)&&n(e,r,a[r]);return e})({},{name:"MdDetail"}),a(x,r({setup(e){const a=d(),r=p(),t=c({detail:"",title:"",loading:!1,error:{config:{},isAxiosError:!1,toJSON:()=>({}),name:"",message:""}});return(()=>{const e=a.query;t.loading=!0,k.getDocDetail({appKey:e.appKey?e.appKey:r.appKey,path:e.key,lang:e.lang?e.lang:r.lang}).then((a=>{t.title=decodeURIComponent(e.title),t.detail=a.data.content,t.loading=!1})).catch((e=>{t.loading=!1,h(e).then((a=>{!1===a&&(t.error=e)}))}))})(),(e,a)=>(m(),y("div",I,[t.loading?(m(),g(D,{key:0})):!t.loading&&(t.error.response&&200!=t.error.response.status||!t.error.response&&t.error.message)?(m(),g(u(f),{key:1,error:t.error},null,8,["error"])):(m(),y("div",K,[b(u(w),{md:t.detail},null,8,["md"])])),u(r).device==u(v).MOBILE||t.loading?O("",!0):(m(),y("div",M,[b(u(P),{md:t.detail},null,8,["md"])]))]))}}))));var x,E=l(S,[["__scopeId","data-v-8aa3270a"]]);export{E as default};
