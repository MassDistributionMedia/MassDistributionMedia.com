_N.Saved={};_N.Changes={};_N.EventVars={};_N.SEQ=[];_N.Incubator={};_N.IncubatorRoots={};_N.IncubatorRootsIns={};_N.Visit=-1;_N.EventDepth=0;_N.HighestZ=0;_N.LowestZ=0;_N.Request=true;_N.HistoryLength=history.length;function _NInitHelper(){_N.Saved.N1={};_NSet("N1","Width",document.documentElement.clientWidth);_NSet("N1","Height",document.documentElement.clientHeight);var a=document.createElement("DIV");a.id="NGraveyard";a.style.display="none";_N("N1").appendChild(a)}function _NInit(b){window.onresize=_NBodySizeState;_N.Title=document.title;_N.DebugMode=b;_NInitHelper();if(location.hash==""){location=location+"#/"}_N.Hash=location.hash;_N.URL=location.href;try{var c=_N("NBackButton").contentWindow.document}catch(a){location.reload(true);return}finally{c.open();c.write(location.href.replace("&","&amp;"));c.close();_N.URLChecker=setInterval(_NCheckURL,500)}}function _NSetLoadIndi(b){_N.LoadIndicator=b;var a=_N(b);if(a){a.style.visibility="hidden"}}function _NCheckURL(){var c=_N("NBackButton").contentWindow.document.body.innerText;if((_N.Hash!=location.hash&&_N.Hash.charAt(1)=="/"&&location.hash.charAt(1)=="/")||(_N.URL!=c)){clearInterval(_N.URLChecker);var g="_NVisit="+ ++_N.Visit+"&_NApp="+_NApp+"&_NSkeletonless=true",b=_N("N1");_N(_N.LoadIndicator).style.visibility="visible";if(_N.HistoryLength+1==history.length){var a=c}else{var a=location.href;var f=_N("NBackButton").contentWindow.document;f.open();f.write(location.href.replace("&","&amp;"));f.close();_N.HistoryLength=history.length}location=a;_N.Hash=location.hash;_N.URL=location.href;_N.Request=_NXHR("POST",(a.indexOf("#/")==-1?a.replace(_N.Hash,"")+(a.indexOf("?")==-1?"?":"&"):a.replace("#/",a.indexOf("?")==-1?"?":"&")+"&")+"_NVisit=0&_NApp="+_NApp+"&_NWidth="+document.documentElement.clientWidth+"&_NHeight="+document.documentElement.clientHeight,_NReqStateChange,true);_N.Request.send(g);if(b.NonControls){for(var e=0;e<b.NonControls.length;++e){_N(b.NonControls[e]).Destroy()}}b.innerHTML="";_N.Saved={};_N.Changes={};_N.HighestZ=0;_N.LowestZ=0;_NInitHelper()}}function _NSetURL(url,id){_N.URLTokenLink=id;location=url;_N.Hash=location.hash;_N.URL=location.href;var d=_N("NBackButton").contentWindow.document;d.open();d.write(location.href.replace("&","&amp;"));d.close();_N.HistoryLength=history.length;setTimeout(function(){document.title=_N.Title},2000);if(_N.Tracker){eval(_N.Tracker)}}function _NSetTokens(a,b){_NSetURL(document.URL.split("#",1)[0]+"#/"+a,b)}function _NSetTitle(a){document.title=_N.Title=a}function _NSet(c,b,a){_NChangeByObj(_N(c),b,a);_NSave(c,b,a);return a}function _NSetProperty(c,b,a){return _NSet(c,b,a)}function _NChange(c,b,a){_NChangeByObj(_N(c),b,a)}function _NChangeByObj(obj,property,value){if(obj){switch(property){case"onclick":obj.onclick=_NEvent("if(!_N.DisableClicks && (!event || event.button!=2)) {"+value+"}",obj);obj.className=value?"NClickable "+obj.className:obj.className.replace(/NClickable/g,"");break;case"KeyPress":case"ReturnKey":case"TypePause":obj.onkeypress=_NKeyEvntsPress;obj.onkeyup=_NKeyEvntsUp;case"onblur":case"onchange":case"ondblclick":case"onfocus":case"onelapsed":case"oninput":case"onmouseover":case"onload":case"onpaste":case"onscroll":case"onunload":case"Select":case"Deselect":obj[property]=_NEvent(value,obj);break;case"onmouseup":obj.onmouseup=_NEvent("if(!event || event.button!=2) {"+value+"}",obj);break;case"oncontextmenu":obj.oncontextmenu=_NEvent(value+"; if(obj.ContextMenu) _NCMShow(obj); return false;",obj);break;case"onmousedown":obj.onmousedown=_NEvent("if(!event || event.button!=2) {"+value+"; if(obj.Shifts && obj.Shifts.length!=0) _NShftSta(obj.Shifts);}",obj);break;case"onmouseout":obj.onmouseout=_NEvent("var to = event.toElement; while(to && to.tag!='BODY') {if(to.id == obj.id) return; to = to.parentNode;} "+value,obj);break;case"DragCatch":if(value!=""){_N.Catchers.push(obj.id)}else{for(var i=0;i<_N.Catchers.length;++i){if(_N.Catchers[i]==obj.id){_N.Catchers.splice(i,1);break}}}obj.DragCatch=_NEvent(value,obj);break;case"href":obj.href=value=="#"?"javascript:void(0);":value;break;case"Shifts":if(!obj.onmousedown){_NChangeByObj(obj,"onmousedown","")}case"ChildrenArray":eval("obj."+property+" = "+value+";");break;case"GroupM":obj._NMultiGroupable=true;case"Group":if(obj.Group=_N(value)){obj.Group.Elements.push(obj.id)}break;case"Selected":if(obj.Selected==true!=value){if(obj.Group){var selId=obj.Group.GetSelectedElement(),selEle;if((value&&selId)||selId==obj.id){obj.Group.PrevSelectedElement=selId}if(selId&&value&&!obj._NMultiGroupable&&(selEle=_N(selId))&&!selEle._NMultiGroupable){_NSave(selId,"Selected",selEle.Selected=false);if(selEle.Deselect&&_N.QueueDisabled!=obj.id){selEle.Deselect()}}}_NSave(obj.id,"Selected",obj.Selected=value);if(value){if(obj.Select){obj.Select()}}else{if(obj.Deselect){obj.Deselect()}}if(obj.Group&&obj.Group.onchange&&_N.QueueDisabled!=obj.id){obj.Group.onchange()}}else{if(event){window.event.cancelBubble=true;window.event.returnValue=false}}break;case"style.zIndex":if(value>_N.HighestZ){_N.HighestZ=value}if(value<_N.LowestZ){_N.LowestZ=value}obj.style.zIndex=(obj.Buoyant)?value+9999:value;break;case"style.left":if(obj.Buoyant){obj.Buoyant.Left=parseInt(value);_NByntMv(obj.id)}else{obj.style.left=value;if(obj.BuoyantChildren){_NByntMvCh(obj)}}break;case"style.top":if(obj.Buoyant){obj.Buoyant.Top=parseInt(value);_NByntMv(obj.id)}else{obj.style.top=value;if(obj.BuoyantChildren){_NByntMvCh(obj)}}break;case"style.display":obj.style.display=value;if(obj.BuoyantChildren&&!value){_NByntMvCh(obj)}break;case"className":obj.className=obj.className.indexOf("NClickable")!=-1&&value.indexOf("NClickable")==-1?"NClickable "+value:value;break;case"ContextMenu":if(!obj.oncontextmenu){_NChangeByObj(obj,"oncontextmenu","")}default:eval("obj."+property+" = value;")}}return value}function _NEvent(code,obj){var id=typeof obj=="object"?obj.id:obj;eval("var func = function() {if(_N.QueueDisabled!='"+id+"') {var liq=(event && event.srcElement && event.srcElement.id=='"+id+"'); ++_N.EventDepth; try {"+code+";} catch(err) {_NAlertError(err);} finally {if(!--_N.EventDepth && _N.SEQ.length) window.setTimeout(function() {if(_N.Uploads && _N.Uploads.length) _NServerWUpl(); else _NServer();}, 0); }}}");return func}function _NNoBubble(){if(window.event){window.event.cancelBubble=true}}function _NSave(id,property,value){if(id.indexOf("_")>=0||id==_N.QueueDisabled){return}var obj=_N(id);if(typeof value=="undefined"){eval("value = obj."+property+";")}if(!_N.Changes[id]){_N.Changes[id]={}}switch(property){case"value":_N.Changes[id][property]=typeof value=="string"?value.replace(/&/g,"~da~").replace(/\+/g,"~dp~"):value;break;case"style.left":case"style.top":case"style.width":case"style.height":_N.Changes[id][property]=parseInt(value);break;case"style.visibility":case"style.display":var obj=_N(id);_N.Changes[id]["Visible"]=obj.style.display=="none"?"null":(obj.style.visibility=="inherit"?"Cloak":false);break;case"style.filter":_N.Changes[id]["Opacity"]=parseInt(value.substring(14));break;default:_N.Changes[id][property]=typeof value=="boolean"?(value?1:0):value}}function _NBodySizeState(){var a=_N("N1");if(a.ShiftsWith){if(a.ShiftsWith[1]){_NShftObjs(a.ShiftsWith[1],document.documentElement.clientWidth-a.Width,0)}if(a.ShiftsWith[2]){_NShftObjs(a.ShiftsWith[2],0,document.documentElement.clientHeight-a.Height)}}if(a.BuoyantChildren){_NByntMvCh(a)}_NSet("N1","Width",document.documentElement.clientWidth);_NSet("N1","Height",document.documentElement.clientHeight)}function _NSetP(f,e){_N.QueueDisabled=f;var a=-1,d=_N(f),c=e.length,b=_N.Saved[f];while(++a<c){b[e[a]]=_NChangeByObj(d,e[a],e[++a])}delete _N.QueueDisabled}function _NQ(){var b,d,c,a=_N.IncubatorRoots;for(b in a){_N(b).appendChild(a[b])}for(d in _N.IncubatorRootsIns){c=_N.IncubatorRootsIns[d];_NAddAct(_N.Incubator[d],c[0],c[1])}_N.Incubator={};_N.IncubatorRoots={};_N.IncubatorRootsIns={}}function _NAddAct(d,b,a){b=_N(b);if(!a){b.appendChild(d)}else{var c=_N(a);if(c&&c.parentNode==b){b.insertBefore(d,c)}else{b.appendChild(d)}}}function _NAdd(b,j,a,e,c){_N.QueueDisabled=a;var h=document.createElement(j),f=e.length,d=-1,g;h.style.position="absolute";g=_N.Saved[h.id=a]={};while(++d<f){g[e[d]]=_NChangeByObj(h,e[d],e[++d])}_N.Incubator[a]=h;if(_N.Incubator[b]||b=="NHead"){_NAddAct(h,b,c)}else{if(c){_N.IncubatorRootsIns[a]=[b,c]}else{if(!_N.IncubatorRoots[b]){_N.IncubatorRoots[b]=document.createDocumentFragment()}_N.IncubatorRoots[b].appendChild(h)}}delete _N.QueueDisabled}function _NAdopt(c,b){var a=_N(c);if(_N.Incubator[b]){_N.Incubator[c]=_N(c);_N.IncubatorRootsIns[c]=[b,null]}else{a.parentNode.removeChild(a);_N(b).appendChild(a)}}function _NRem(c){var b=_N(c);b.parentNode.removeChild(b);_N("NGraveyard").appendChild(b);if(b.BuoyantChildren){for(var a=0;a<b.BuoyantChildren.length;++a){_NRem(b.BuoyantChildren[a])}}if(b.NonControls){for(var a=0;a<b.NonControls.length;++a){_N(b.NonControls[a]).Stop()}}}function _NRes(d,c){var b=_N(d);_N("NGraveyard").removeChild(b);_N(c).appendChild(b);if(b.BuoyantChildren){for(var a=0;a<b.BuoyantChildren.length;++a){_NRes(b.BuoyantChildren[a],c)}}if(b.NonControls){for(var a=0;a<b.NonControls.length;++a){_N(b.NonControls[a]).Start()}}}function _NAsc(d){var c=_N(d);if(c){if(c.Buoyant){_NByntFrgt(d,_N(c.Buoyant.ParentId))}if(c.BuoyantChildren){for(var a=0;a<c.BuoyantChildren.length;++a){var b=c.parentNode;_NByntFrgt(c.BuoyantChildren[a],b);_NAsc(c.BuoyantChildren[a])}}if(c.NonControls){for(var a=0;a<c.NonControls.length;++a){_N(c.NonControls[a]).Destroy()}}c.parentNode.removeChild(c)}}function _NGCAsc(b){var c=b.length;for(var a=0;a<c;++a){_NAsc(b[a])}}function _NChangeString(){if(_N.Observes){_NObserveSave()}var d="",a="",c,b;for(c in _N.Changes){d=c;for(b in _N.Changes[c]){if(_N.Changes[c][b]!=_N.Saved[c][b]){d+="~d1~"+b.replace("style.","")+"~d1~"+_N.Changes[c][b];_N.Saved[c][b]=_N.Changes[c][b]}}if(d!=c){a+=d+"~d0~"}}_N.Changes={};return a.substring(0,a.length-4)}function _NEventVarsString(){var a,b="",d,c;if(c=_N.EventVars.FocusedComponent){_NSave(c,"value");b+="FocusedComponent~d0~"+c+"~d0~";if(d=document.selection.createRange().text){b+="SelectedText~d0~"+d+"~d0~"}delete _N.EventVars.FocusedComponent}for(a in _N.EventVars){b+=a+"~d0~"+(typeof _N.EventVars[a]=="object"?_N.EventVars[a].join(","):_N.EventVars[a])+"~d0~"}_N.EventVars={};return b.substring(0,b.length-4)}function _NProcessResponse(text){var pos=text.indexOf("/*_N*/"),response=[text.substring(0,pos),text.substring(pos)];if(response[0]!=""){var s=document.createElement("SCRIPT");s.type="text/javascript";s.text=response[0];document.getElementsByTagName("head")[0].appendChild(s)}if(_N.DebugMode=="Full"){_NDebugFull(response[1])}else{eval(response[1])}}function _NAlertError(a){alert(_N.DebugMode?"A javascript error has occurred:\n\n"+a.name+": "+a.message:"An application error has occurred.")}function _NUnServer(){_N(_N.LoadIndicator).style.visibility="hidden";_N.Request=null;_N.URLChecker=setInterval(_NCheckURL,500);if(_N.Listeners){_NListenersCont()}}function _NReqStateChange(){var d=_N.Request;if(d.readyState==4){if(d.status==200){var f=d.responseText,c=_N.LoadIndicator;if(_N.DebugMode==null){_NProcessResponse(f);_NUnServer()}else{try{_NProcessResponse(f)}catch(b){var a=document.createElement("DIV");a.innerHTML=f;f=a.innerText;var e=f.match(/(.*): (.*) in (.*) on line ([0-9]+)/);if(e){alert(e[1]+e[2]+"\nin "+e[3]+"\non line "+e[4])}else{_NAlertError(b)}}finally{_NUnServer()}}}else{alert("HTTP error: "+d.status+"\n"+d.statusText);_NUnServer()}}}function _NSE(c,d,a){if(_N.Listeners){_NListenersHold()}if(!_N.EventVars.MouseX&&window.event){_N.EventVars.MouseX=window.event.clientX+document.documentElement.scrollLeft;_N.EventVars.MouseY=window.event.clientY+document.documentElement.scrollTop}if(_N.SEQ.Started!=null){for(var b=_N.SEQ.Started;b<_N.SEQ.length;++b){if(_N.SEQ[b][0]==c&&_N.SEQ[b][1]==d){_N.SEQ.splice(b--,1)}}}else{_N.SEQ.Started=_N.SEQ.length}_N.SEQ.push([c,d]);if(a){_N.Uploads=_N.Uploads.concat(a)}if(c=="Unload"){_NServer()}}function _NServer(){if(!_N.Request){try{clearInterval(_N.URLChecker);var c=location.href,a=c.indexOf("#/"),h,b=true,e=_N.SEQ.length;var g="_NVisit="+ ++_N.Visit+"&_NApp="+_NApp+"&_NEventVars="+_NEventVarsString()+"&_NChanges="+_NChangeString()+"&_NEvents=";for(var d=0;d<e;++d){if(_N.SEQ[d][0]=="Unload"){b=false}g+=_N.SEQ[d][0]+"@"+_N.SEQ[d][1]+","}_N.SEQ=[];g=g.substr(0,g.length-1);if(_N.URLTokenLink){g+="&_NTokenLink="+_N.URLTokenLink;_N.URLTokenLink=null}_N(_N.LoadIndicator).style.visibility="visible";_N.Request=_NXHR("POST",a==-1?c.replace(location.hash,""):c.replace("#/",(h=c.indexOf("?"))==-1||a<h?"?":"&"),b?_NReqStateChange:null,b);_N.Request.send(g)}catch(f){alert("Critical error initializing communication with server.\nRegretably, an abort is unavoidable here.");_NUnServer()}}};