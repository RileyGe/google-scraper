function query2Json(B){if(!B)return null;var _=B.split("&"),$={},A;for(var D=0,C=_.length;D<C;D++){A=_[D].match(/([^=]+)=(.*)/);$[A[1]]=A[2]}return $}var UserMonitor=(function(){var H={"1":M,"2":A,"3":D,"4":G,"5":E,"6":I},J=parent.extraInfo?parent.extraInfo:window.extraInfo,K={"1":J,"2":J,"3":J,"4":J,"5":J,"6":J};if(!J)J={};function B(A){if(!A)return;var _="log__"+(new Date()).getTime(),$=window[_]=new Image();$.onload=$.onerror=function(){window[_]=null};$.src=A;$=null}function L(_){var $=[];if(!_)return"";for(var A in _)$.push(A+"="+encodeURIComponent(_[A]));return $.join("&")}function C(A,$){var _="";if(!A)return"";if(!!$)_=$+"&";_+="ra="+Math.random();if(-1<A.indexOf("?"))return A+"&"+_;return A+"?"+_}function $($){if(!$)return"";$=$.replace(/<[^>]*>/g,"");return $.replace(/(^[\s\t\xa0\u3000]+)|([\u3000\xa0\s\t]+$)/g,"")}function _(_,$){for(var A in _)if($[A]===undefined||$[A]===null)$[A]=_[A]}function M(F,I,H){var F=F||window.event,G=F.srcElement||F.target,M=K[I],A="http://nsclick.baidu.com/v.gif",J,E,D;D={pid:107,url:"",type:0,t:$(G.innerHTML),u:""};_(H,D);_(M,D);E=L(D);J=C(A,E);B(J)}function A(F,I,H){var F=F||window.event,G=F.srcElement||F.target,M=K[I],A="http://nsclick.baidu.com/v.gif",J,E,D;if(G.tagName.toUpperCase()!="A")return;D={pid:107,url:G.href,type:0};_(M,D);_(H,D);D.t=$(G.innerHTML);D.u=G.href;E=L(D);J=C(A,E);B(J)}function D(G,J,I){var G=G||window.event,H=G.srcElement||G.target,N=K[J],D="http://nsclick.baidu.com/v.gif",M,F,E,A;if(H.tagName.toUpperCase()!="IMG")return;A=H.parentNode;while(A&&A.tagName.toUpperCase()!="A")A=A.parentNode;if(!A)return;E={pid:107,url:A.href,type:0};_(N,E);_(I,E);E.t=$(A.innerHTML);E.u=A.href;F=L(E);M=C(D,F);B(M)}function G(G,J,I){var D=G||window.event,H=D.srcElement||D.target,N=K[J],A="http://nsclick.baidu.com/v.gif",M,F,E,$;if(H.tagName.toUpperCase()!="INPUT")return;if(H.form.code.value=="\u4ee3\u7801/\u540d\u79f0/\u62fc\u97f3")return;E={pid:107,url:C(H.form.action,"code="+H.form.code.value),type:0};_(N,E);_(I,E);E.t=H.form.code.value;E.u=C(H.form.action,"code="+H.form.code.value);F=L(E);M=C(A,F);B(M)}function E(F,I,H){var F=F||window.event,G=F.srcElement||F.target,M=K[I],A="http://nsclick.baidu.com/v.gif",J,E,D,$;D={pid:107,url:"",type:0};_(M,D);_(H,D);D.u="";E=L(D);J=C(A,E);B(J)}function I(F,I,H){var F=F||window.event,G=F.srcElement||F.target,M=K[I],A="http://nsclick.baidu.com/v.gif",J,E,D,$;D={pid:107,url:"",type:0};_(M,D);_(H,D);D.u="";D.t="";E=L(D);J=C(A,E);B(J)}function F(_,B,A){var $=H[B];if($)$(_,B,A)}return{send:F}})()