function _NClickOff(b,a){if(_N.ClickOffId){_NClickOffClick()}_N.ClickOffId=b;if(typeof a=="undefined"){_N.ClickOffFunc=a}document.attachEvent("onmousedown",_NClickOffDown);document.attachEvent("onclick",_NClickOffClick)}function _NClickOffDown(){var a=event.srcElement;while(a&&a.id){if(a.id==_N.ClickOffId){return}a=a.parentNode}_NClickOffClick()}function _NClickOffClick(){if(_N.ClickOffId){_NSetProperty(_N.ClickOffId,"style.display","none");if(_N.ClickOffFunc){_N.ClickOffFunc()}document.detachEvent("onmousedown",_NClickOffDown);document.detachEvent("onclick",_NClickOffClick);delete _N.ClickOffId;if(_N.ClickOffFunc){delete _N.ClickOffFunc}}};