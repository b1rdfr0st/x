(()=>{function t(e){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(e)}function e(t,e){for(var o=0;o<e.length;o++){var r=e[o];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,n(r.key),r)}}function n(e){var n=function(e,n){if("object"!=t(e)||!e)return e;var o=e[Symbol.toPrimitive];if(void 0!==o){var r=o.call(e,n||"default");if("object"!=t(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===n?String:Number)(e)}(e,"string");return"symbol"==t(n)?n:n+""}var o=function(){return t=function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)},(n=[{key:"init",value:function(t){var e=$(document).find("#".concat(t,"_wrapper"));$.each(e.find("tbody"),(function(t,e){Sortable.create(e,{group:e+"_"+t,sort:!0,delay:0,disabled:!1,store:null,animation:150,handle:"tr",ghostClass:"sortable-ghost",chosenClass:"sortable-chosen",dataIdAttr:"data-id",forceFallback:!1,fallbackClass:"sortable-fallback",fallbackOnBody:!1,scroll:!0,scrollSensitivity:30,scrollSpeed:10,onEnd:function(){$(document).find(".btn-save-sort-order").addClass("sort-button-active btn-warning").show();var t=$(e).closest(".card");$.each(t.find("tbody tr"),(function(t,e){$(e).find(".order-column").text(t+1)}))}})}));var n=$(document).find(".btn-save-sort-order");n.off("click").on("click",(function(t){t.preventDefault();var e=$(t.currentTarget),o=[];$.each(e.closest(".card").find("tbody tr"),(function(t,e){o.push(parseInt($(e).find("td:first-child").text())),$(e).find(".order-column").text(t+1)})),Botble.showButtonLoading(e),$httpClient.make().post(n.data("url"),{items:o}).then((function(t){var e=t.data;Botble.showSuccess(e.message)})).finally((function(){Botble.hideButtonLoading(e),e.hide()}))}))}}])&&e(t.prototype,n),o&&e(t,o),Object.defineProperty(t,"prototype",{writable:!1}),t;var t,n,o}();$((function(){document.addEventListener("core-table-init-completed",(function(t){(new o).init(t.detail.table.prop("id"))})),$(document).on("show.bs.modal","#simple-slider-item-modal",(function(t){var e=$(t.currentTarget),n=$(t.relatedTarget).prop("href");$httpClient.make().withLoading(e.find(".modal-content")).get(n).then((function(t){var n=t.data;e.find(".modal-header .modal-title").text(n.data.title),e.find(".modal-body").html(n.data.content),Botble.initMediaIntegrate(),Botble.initResources()}))})).on("click",'#simple-slider-item-modal button[type="submit"]',(function(t){t.preventDefault();var e=$(t.currentTarget),n=e.closest(".modal"),o=n.find("form");$httpClient.make().withLoading(o).withButtonLoading(e).post(o.prop("action"),o.serialize()).then((function(t){var e=t.data;Botble.showSuccess(e.message),n.modal("hide"),$("#botble-simple-slider-tables-simple-slider-item-table").DataTable().draw()}))}))}))})();