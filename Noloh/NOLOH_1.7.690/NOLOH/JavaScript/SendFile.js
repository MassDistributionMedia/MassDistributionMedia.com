function _NFileReq(b){var a=document.createElement("IFRAME");a.id=b;a.src=b;a.style.display="none";document.body.appendChild(a);window.setTimeout('document.body.removeChild(_N("'+b+'"));',5000)};