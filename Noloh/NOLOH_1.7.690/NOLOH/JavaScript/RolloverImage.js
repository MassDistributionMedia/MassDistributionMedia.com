function _NRlImgTgl(c,b){var a=_N(c);if(!a.Cur){a.Cur="Out"}if(a.Selected&&b!="Slct"||a.Cur==b){return}a.src=a[b];a.Cur=b;if(a.onchange){a.onchange()}};