function _NChkCtrl(e,a,c){var d=_N(e),b=_N(e+"I");b.checked=a;if(d.onchange&&!c){d.onchange()}}function _NChkCtrlTgl(b,a){_NSetProperty(b,"Selected",a?!_N(b).Selected:true)};