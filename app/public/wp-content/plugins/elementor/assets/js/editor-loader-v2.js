<<<<<<< HEAD
/*! elementor - v3.16.0 - 13-09-2023 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*******************************************************!*\
  !*** ../core/editor/loader/v2/js/editor-loader-v2.js ***!
  \*******************************************************/


var _window$elementorV;
=======
/*! elementor - v3.15.0 - 20-08-2023 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ../core/editor/assets/js/editor-loader-v2.js ***!
  \****************************************************/


var _window$__UNSTABLE__e;
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
window.__elementorEditorV1LoadingPromise = new Promise(function (resolve) {
  window.addEventListener('elementor/init', function () {
    resolve();
  }, {
    once: true
  });
});
window.elementor.start();
<<<<<<< HEAD
if (!((_window$elementorV = window.elementorV2) !== null && _window$elementorV !== void 0 && _window$elementorV.editor)) {
  throw new Error('The "@elementor/editor" package was not loaded.');
}
window.elementorV2.editor.init(document.getElementById('elementor-editor-wrapper-v2'));
=======
if (!((_window$__UNSTABLE__e = window.__UNSTABLE__elementorPackages) !== null && _window$__UNSTABLE__e !== void 0 && _window$__UNSTABLE__e.editor)) {
  throw new Error('The "@elementor/editor" package was not loaded.');
}
window.__UNSTABLE__elementorPackages.editor.init(document.getElementById('elementor-editor-wrapper-v2'));
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
/******/ })()
;
//# sourceMappingURL=editor-loader-v2.js.map