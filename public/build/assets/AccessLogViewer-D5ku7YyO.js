import{_ as O}from"./SearchBox-DXIAZhpY.js";import{b as E,R as j,r as f,x as z,o as U,I as P,e as R,f as r,g as l,k as J,i as n,D as q,l as C,h as o,n as c,t as i,m as a,F as x,E as G,p as A,j as w,a8 as K,U as Q}from"./app-CeOdx_TG.js";import{S as W}from"./Spinner-BwxI0ALn.js";/*! 2FAuth version 5.3.0 - Copyright (c) 2024 Bubka - https://github.com/Bubka/2FAuth */const X={key:1,class:"level is-mobile mb-2"},Z={class:"level-item has-text-centered"},ee={class:"buttons"},se=["title"],te=["title"],oe=["title"],ne=["title"],re=["title"],ie=["title"],le={key:2},ae=["innerHTML"],de=["innerHTML"],ce=["innerHTML"],ue=["innerHTML"],he={class:"light-or-darker"},me={class:"light-or-darker"},_e={class:"light-or-darker"},ge={key:3,class:"mt-4"},fe={key:4,class:"mt-5 pl-3"},be={__name:"AccessLogViewer",props:{userId:[Number,String],lastOnly:Boolean,showSearch:Boolean,period:{type:[Number,String],default:12}},emits:["has-more-entries"],setup(T,{emit:N}){const H=E(),I=j("2fauth"),h=T,d={aMonth:1,threeMonths:3,halfYear:6,aYear:12},u=f([]),v=f(!1),p=f(""),m=f(h.period),g=f(!0),B=N,$=z(()=>u.value.filter(e=>JSON.stringify(e).toString().toLowerCase().includes(p.value)));U(()=>{L()});function y(e){m.value=e,L()}function F(){g.value=!1,S()}function S(){u.value.sort((e,t)=>e.id>t.id?1:-1)}function V(){g.value=!0,M()}function M(){u.value.sort((e,t)=>e.id<t.id?1:-1)}function L(){v.value=!0;let e=h.lastOnly?4:!1;P.getauthentications(h.userId,m.value,e,{returnError:!0}).then(t=>{u.value=t.data,u.value.length>3&&h.lastOnly&&(B("has-more-entries"),u.value.pop()),g.value==!0?M():S()}).catch(t=>{H.error(t)}).finally(()=>{v.value=!1})}const Y=e=>{switch(e){case"phone":return"mobile-screen";case"tablet":return"tablet-screen-button";default:return"display"}},D=e=>!e.login_at&&e.logout_at,b=e=>!e.login_successful&&!e.logout_at;return(e,t)=>{const _=R("FontAwesomeIcon");return r(),l(x,null,[h.showSearch?(r(),J(O,{key:0,keyword:n(p),"onUpdate:keyword":t[0]||(t[0]=s=>q(p)?p.value=s:null),hasNoBackground:!0},null,8,["keyword"])):C("",!0),h.showSearch?(r(),l("nav",X,[o("div",Z,[o("div",ee,[o("button",{id:"btnShowOneMonth",title:e.$t("admin.show_last_month_log"),onClick:t[1]||(t[1]=s=>y(d.aMonth)),class:c([{"has-text-grey":n(m)!==d.aMonth},"button is-ghost p-1"])},i(e.$t("commons.one_month")),11,se),o("button",{id:"btnShowThreeMonths",title:e.$t("admin.show_three_months_log"),onClick:t[2]||(t[2]=s=>y(d.threeMonths)),class:c([{"has-text-grey":n(m)!==d.threeMonths},"button is-ghost p-1"])},i(e.$t("commons.x_month",{x:"3"})),11,te),o("button",{id:"btnShowSixMonths",title:e.$t("admin.show_six_months_log"),onClick:t[3]||(t[3]=s=>y(d.halfYear)),class:c([{"has-text-grey":n(m)!==d.halfYear},"button is-ghost p-1"])},i(e.$t("commons.x_month",{x:"6"})),11,oe),o("button",{id:"btnShowOneYear",title:e.$t("admin.show_one_year_log"),onClick:t[4]||(t[4]=s=>y(d.aYear)),class:c([{"has-text-grey":n(m)!==d.aYear},"button is-ghost p-1 mr-5"])},i(e.$t("commons.one_year")),11,ne),o("button",{id:"btnSortLogDesc",onClick:V,title:e.$t("admin.sort_by_date_desc"),class:c([{"has-text-grey":!n(g)},"button p-1 is-ghost"])},[a(_,{icon:["fas","arrow-up-long"],flip:"vertical"}),a(_,{icon:["far","calendar"]})],10,re),o("button",{id:"btnSortLogAsc",onClick:F,title:e.$t("admin.sort_by_date_asc"),class:c([{"has-text-grey":n(g)},"button p-1 is-ghost"])},[a(_,{icon:["fas","arrow-up-long"]}),a(_,{icon:["far","calendar"]})],10,ie)])])])):C("",!0),n($).length>0?(r(),l("div",le,[(r(!0),l(x,null,G(n($),s=>(r(),l("div",{key:s.id,class:"list-item is-size-6 is-size-7-mobile has-text-grey is-flex is-justify-content-space-between"},[a(n(Q),null,{default:A(({mode:k})=>[o("div",null,[o("div",null,[b(s)?(r(),l("span",{key:0,innerHTML:e.$t("admin.failed_login_on",{login_at:s.login_at})},null,8,ae)):D(s)?(r(),l("span",{key:1,innerHTML:e.$t("admin.successful_logout_on",{login_at:s.logout_at})},null,8,de)):n(I).config.proxyAuth?(r(),l("span",{key:2,innerHTML:e.$t("admin.viewed_on",{login_at:s.login_at})},null,8,ce)):(r(),l("span",{key:3,innerHTML:e.$t("admin.successful_login_on",{login_at:s.login_at})},null,8,ue))]),o("div",null,[w(i(e.$t("commons.IP"))+": ",1),o("span",he,i(s.ip_address),1),w(" - "+i(e.$t("commons.browser"))+": ",1),o("span",me,i(s.browser),1),w(" - "+i(e.$t("commons.operating_system_short"))+": ",1),o("span",_e,i(s.platform),1)])]),o("div",{class:c([k=="dark"?"has-text-grey-darker":"has-text-grey-lighter","is-align-self-center"])},[a(n(K),{class:"fa-2x width-1-5x"},{default:A(()=>[a(_,{icon:["fas",Y(s.device)],transform:"grow-6","fixed-width":""},null,8,["icon"]),a(_,{icon:["fas",b(s)?"times":"check"],transform:"shrink-7"+(s.device=="desktop"?" up-2":""),class:c(b(s)?"has-text-danger"+(k=="dark"?"-dark":""):"has-text-success"+(k=="dark"?"-dark":"")),"fixed-width":""},null,8,["icon","transform","class"])]),_:2},1024)],2)]),_:2},1024)]))),128))])):n(u).length==0?(r(),l("div",ge,i(e.$t("commons.no_entry_yet")),1)):(r(),l("div",fe,i(e.$t("commons.no_result")),1)),a(W,{isVisible:n(v)},null,8,["isVisible"])],64)}}};export{be as _};
//# sourceMappingURL=AccessLogViewer-D5ku7YyO.js.map
