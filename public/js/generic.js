/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/generic/navbar.ts":
/*!****************************************!*\
  !*** ./resources/js/generic/navbar.ts ***!
  \****************************************/
/***/ (() => {



(function () {
  var navbarHTML;
  var pageMainTitle;
  var pageHeader;
  window.addEventListener('DOMContentLoaded', function () {
    navbarHTML = document.querySelector('#page-navbar');
    pageMainTitle = document.getElementById('page-main-title');
    pageHeader = document.getElementById('page-header');
    setTimeout(function () {
      updateNavbarStickiness();
      updateNavbarOnScroll();
    });
  });
  window.addEventListener('resize', function (e) {
    updateNavbarStickiness();
  });
  window.addEventListener('scroll', function (e) {
    updateNavbarOnScroll();
  });

  function updateNavbarStickiness() {
    pageHeader.style.top = '-' + pageMainTitle.getBoundingClientRect().height + 'px';
  }

  function updateNavbarOnScroll() {
    var posY = navbarHTML.getBoundingClientRect().top;

    if (posY <= 0) {
      navbarHTML.classList.add('stuck');
    } else {
      navbarHTML.classList.remove('stuck');
    }
  }
})();

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