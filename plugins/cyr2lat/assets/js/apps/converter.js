(()=>{"use strict";function t(o){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(o)}function o(o,n){for(var e=0;e<n.length;e++){var i=n[e];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(o,(r=i.key,c=void 0,c=function(o,n){if("object"!==t(o)||null===o)return o;var e=o[Symbol.toPrimitive];if(void 0!==e){var i=e.call(o,n||"default");if("object"!==t(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===n?String:Number)(o)}(r,"string"),"symbol"===t(c)?c:String(c)),i)}var r,c}const n=function(){function t(){!function(t,o){if(!(t instanceof o))throw new TypeError("Cannot call a class as a function")}(this,t),this.CONVERT_FORM_SELECTOR="#ctl-convert-existing-slugs",this.CONVERT_BUTTON_SELECTOR="#ctl-convert-button",this.CONFIRM_POPUP_SELECTOR="#ctl-confirm-popup",this.CONFIRM_OK_SELECTOR="#ctl-confirm-ok",this.CONFIRM_CANCEL_SELECTOR="#ctl-confirm-cancel",this.confirmPopup=document.querySelector(this.CONFIRM_POPUP_SELECTOR),this.bindEvents()}var n,e,i;return n=t,(e=[{key:"bindEvents",value:function(){var t=this;document.querySelector(this.CONVERT_BUTTON_SELECTOR).onclick=function(o){return o.preventDefault(),t.confirmPopup.style.display="block",!1},this.confirmPopup.onclick=function(){t.hideConfirmPopup()},document.querySelector(this.CONFIRM_OK_SELECTOR).onclick=function(o){o.stopPropagation(),t.hideConfirmPopup(),document.querySelector(t.CONVERT_FORM_SELECTOR).submit()},document.querySelector(this.CONFIRM_CANCEL_SELECTOR).onclick=function(o){o.stopPropagation(),t.hideConfirmPopup()}}},{key:"hideConfirmPopup",value:function(){this.confirmPopup.style.display="none"}}])&&o(n.prototype,e),i&&o(n,i),Object.defineProperty(n,"prototype",{writable:!1}),t}();document.addEventListener("DOMContentLoaded",(function(){new n}))})();