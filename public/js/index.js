/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/generic/navbar.ts":
/*!****************************************!*\
  !*** ./resources/js/generic/navbar.ts ***!
  \****************************************/
/***/ (() => {



window.addEventListener('DOMContenteLoaded', function () {
  var options = {
    root: document.querySelector('body'),
    rootMargin: '0px',
    threshold: 1.0
  };

  var callback = function callback(entries, observer) {
    entries.forEach(function (entry) {
      console.log(entry); // Each entry describes an intersection change for one observed
      // target element:
      //   entry.boundingClientRect
      //   entry.intersectionRatio
      //   entry.intersectionRect
      //   entry.isIntersecting
      //   entry.rootBounds
      //   entry.target
      //   entry.time
    });
  };

  var observer = new IntersectionObserver(callback, options);
  var target = document.querySelector('#page-navbar');
  observer.observe(target);
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
var exports = __webpack_exports__;
/*!***************************************!*\
  !*** ./resources/js/generic/index.ts ***!
  \***************************************/


Object.defineProperty(exports, "__esModule", ({
  value: true
}));

__webpack_require__(/*! ./navbar */ "./resources/js/generic/navbar.ts");
})();

/******/ })()
;