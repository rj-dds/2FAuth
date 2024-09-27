import{b as f,$ as h,d as _,a1 as w,e as r,f as F,k as b,p as y,h as B,m as i,i as s,C as V}from"./app-CeOdx_TG.js";import{F as v}from"./Form-BSfNB4q6.js";/*! 2FAuth version 5.3.0 - Copyright (c) 2024 Bubka - https://github.com/Bubka/2FAuth */const C={__name:"RequestReset",setup(R){const o=f(),n=h().name=="webauthn.lost",t=_(new v({email:""}));function l(a){o.clear(),t.post(n?"/webauthn/lost":"/user/password/lost",{returnError:!0}).then(e=>{o.success({text:e.data.message,duration:-1})}).catch(e=>{e.response.data.requestFailed?o.alert({text:e.response.data.requestFailed,duration:-1}):e.response.status!==422&&o.error(e)})}return w(()=>{o.clear()}),(a,e)=>{const m=r("FormField"),c=r("FormButtons"),d=r("VueFooter"),p=r("FormWrapper");return F(),b(p,{title:a.$t(n?"auth.webauthn.account_recovery":"auth.forms.reset_password"),punchline:a.$t(n?"auth.webauthn.recovery_punchline":"auth.forms.reset_punchline")},{default:y(()=>[B("form",{onSubmit:V(l,["prevent"]),onKeydown:e[1]||(e[1]=u=>s(t).onKeydown(u))},[i(m,{modelValue:s(t).email,"onUpdate:modelValue":e[0]||(e[0]=u=>s(t).email=u),fieldName:"email",fieldError:s(t).errors.get("email"),label:"auth.forms.email",autofocus:""},null,8,["modelValue","fieldError"]),i(c,{submitId:"btnSendResetPwd",isBusy:s(t).isBusy,caption:a.$t(n?"auth.webauthn.send_recovery_link":"auth.forms.send_password_reset_link"),showCancelButton:!0,cancelLandingView:"login"},null,8,["isBusy","caption"])],32),i(d)]),_:1},8,["title","punchline"])}}};export{C as default};
//# sourceMappingURL=RequestReset-63WcW87C.js.map
