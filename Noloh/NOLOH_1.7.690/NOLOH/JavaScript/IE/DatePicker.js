function _NDPSlctDt(a,c,b){_NDPShow(a,c,b);_N(a).style.display="none"}function _NDPShow(a,d,c){var b=_NCalDtStr(a,c);_N(d).options[0]=new Option(b,b)}function _NDPTglOn(a){var b=_N(a);if(b.style.display=="none"){b.style.display="";_N.CalOpened=a;document.attachEvent("onclick",_NDPTglOff);window.event.cancelBubble=true}document.body.focus()}function _NDPTglOff(){_N(_N.CalOpened).style.display="none";_N.CalOpened=null;document.detachEvent("onclick",_NDPTglOff)};