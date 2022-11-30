/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

//Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Hamburger
jQuery(function ($) {
  // to reset burger
  var windowWidth = $('body').width();

  //Navigation
  var targetElement = document.querySelector('.gn');

  // Button
  $('.gn-trigger').on('click', function (e) {
    e.preventDefault();
    if ($(this).hasClass('is-active')) {
      $(this).removeClass('is-active');
      $('.gn').slideUp();
    } else {
      $(this).addClass('is-active');
      $('.gn').slideDown();
    }
  });

  // Header slides up and removes class from hamburger
  $('.nav-link').on('click', function (e) {
    e.preventDefault();
    $('.gn-trigger').removeClass('is-active');
    $('.gn').slideUp();
  });

  // to reset burger
  $(window).resize(function () {
    windowWidth = $('body').width();
    console.log(windowWidth);
    if (windowWidth > 767 && $('.gn-trigger').hasClass('is-active')) {
      setTimeout(function () {
        $('.gn-trigger').removeClass('is-active');
        $('.gn').slideUp(0);
      }, 200); //slightly delay action
    }
  });
});

/***/ }),

/***/ "./resources/scss/main.scss":
/*!**********************************!*\
  !*** ./resources/scss/main.scss ***!
  \**********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Undefined variable.\n   ╷\n37 │         font-family: vars.$titleFont;\n   │                      ^^^^^^^^^^^^^^^\n   ╵\n  resources/scss/base/_typography.scss 37:22  @use\n  resources/scss/main.scss 7:1                root stylesheet\n    at processResult (/Users/ivan/Documents/GitHub/4590-QA-Final-Project/node_modules/webpack/lib/NormalModule.js:758:19)\n    at /Users/ivan/Documents/GitHub/4590-QA-Final-Project/node_modules/webpack/lib/NormalModule.js:860:5\n    at /Users/ivan/Documents/GitHub/4590-QA-Final-Project/node_modules/loader-runner/lib/LoaderRunner.js:400:11\n    at /Users/ivan/Documents/GitHub/4590-QA-Final-Project/node_modules/loader-runner/lib/LoaderRunner.js:252:18\n    at context.callback (/Users/ivan/Documents/GitHub/4590-QA-Final-Project/node_modules/loader-runner/lib/LoaderRunner.js:124:13)\n    at Object.loader (/Users/ivan/Documents/GitHub/4590-QA-Final-Project/node_modules/sass-loader/dist/index.js:69:5)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/scss/main.scss"]();
/******/ 	
/******/ })()
;
//# sourceMappingURL=app.js.map