function _NFilter(d,c,a){if(event.charCode){var b=_N(d).value+String.fromCharCode(event.charCode);if(event.which!=8&&!b.match(new RegExp("^"+c+"$",a))){event.preventDefault()}}};