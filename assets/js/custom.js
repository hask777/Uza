"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/******/
(function (modules) {
  // webpackBootstrap

  /******/
  // The module cache

  /******/
  var installedModules = {};
  /******/

  /******/
  // The require function

  /******/

  function __webpack_require__(moduleId) {
    /******/

    /******/
    // Check if module is in cache

    /******/
    if (installedModules[moduleId]) {
      /******/
      return installedModules[moduleId].exports;
      /******/
    }
    /******/
    // Create a new module (and put it into the cache)

    /******/


    var module = installedModules[moduleId] = {
      /******/
      i: moduleId,

      /******/
      l: false,

      /******/
      exports: {}
      /******/

    };
    /******/

    /******/
    // Execute the module function

    /******/

    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
    /******/

    /******/
    // Flag the module as loaded

    /******/

    module.l = true;
    /******/

    /******/
    // Return the exports of the module

    /******/

    return module.exports;
    /******/
  }
  /******/

  /******/

  /******/
  // expose the modules object (__webpack_modules__)

  /******/


  __webpack_require__.m = modules;
  /******/

  /******/
  // expose the module cache

  /******/

  __webpack_require__.c = installedModules;
  /******/

  /******/
  // define getter function for harmony exports

  /******/

  __webpack_require__.d = function (exports, name, getter) {
    /******/
    if (!__webpack_require__.o(exports, name)) {
      /******/
      Object.defineProperty(exports, name, {
        enumerable: true,
        get: getter
      });
      /******/
    }
    /******/

  };
  /******/

  /******/
  // define __esModule on exports

  /******/


  __webpack_require__.r = function (exports) {
    /******/
    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
      /******/
      Object.defineProperty(exports, Symbol.toStringTag, {
        value: 'Module'
      });
      /******/
    }
    /******/


    Object.defineProperty(exports, '__esModule', {
      value: true
    });
    /******/
  };
  /******/

  /******/
  // create a fake namespace object

  /******/
  // mode & 1: value is a module id, require it

  /******/
  // mode & 2: merge all properties of value into the ns

  /******/
  // mode & 4: return value when already ns object

  /******/
  // mode & 8|1: behave like require

  /******/


  __webpack_require__.t = function (value, mode) {
    /******/
    if (mode & 1) value = __webpack_require__(value);
    /******/

    if (mode & 8) return value;
    /******/

    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;
    /******/

    var ns = Object.create(null);
    /******/

    __webpack_require__.r(ns);
    /******/


    Object.defineProperty(ns, 'default', {
      enumerable: true,
      value: value
    });
    /******/

    if (mode & 2 && typeof value != 'string') for (var key in value) {
      __webpack_require__.d(ns, key, function (key) {
        return value[key];
      }.bind(null, key));
    }
    /******/

    return ns;
    /******/
  };
  /******/

  /******/
  // getDefaultExport function for compatibility with non-harmony modules

  /******/


  __webpack_require__.n = function (module) {
    /******/
    var getter = module && module.__esModule ?
    /******/
    function getDefault() {
      return module['default'];
    } :
    /******/
    function getModuleExports() {
      return module;
    };
    /******/

    __webpack_require__.d(getter, 'a', getter);
    /******/


    return getter;
    /******/
  };
  /******/

  /******/
  // Object.prototype.hasOwnProperty.call

  /******/


  __webpack_require__.o = function (object, property) {
    return Object.prototype.hasOwnProperty.call(object, property);
  };
  /******/

  /******/
  // __webpack_public_path__

  /******/


  __webpack_require__.p = "";
  /******/

  /******/

  /******/
  // Load entry module and return exports

  /******/

  return __webpack_require__(__webpack_require__.s = "./assets/js/custom/custom.js");
  /******/
})(
/************************************************************************/

/******/
{
  /***/
  "./assets/js/custom/custom.js":
  /*!************************************!*\
    !*** ./assets/js/custom/custom.js ***!
    \************************************/

  /*! no static exports found */

  /***/
  function assetsJsCustomCustomJs(module, exports) {
    eval("jQuery(document).ready(function($){\n    var portfolio = $('.container-fluid');\n    var uzaUrl = 'http://uza/wp-json/uza_rest/v1/portfolio';\n\n    $('#load_more_btn').on('click', function(){\n\n        $.getJSON( uzaUrl, posts => {\n\n            var containerFluid = portfolio.append(`\n                <div class=\"row uza-portfolio\">\n                    ${posts.map(item =>\n                        `<div class=\"col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics\">\n                            <div class=\"single-portfolio-slide\">\n                                <img src=\"${item.image_url}\" alt=\"\">\n                                <!-- Overlay Effect -->\n                                <div class=\"overlay-effect\">\n                                    <h4>${item.title}</h4>\n                                    <p>${item.content}</p>\n                                </div>\n                                <!-- View More -->\n                                <div class=\"view-more-btn\">\n                                    <a href=\"${item.link}\"><i class=\"arrow_right\"></i></a>\n                                </div>\n                            </div>\n                        </div>`\n                    ).join('')}\n                </div>\n                `);\n        });\n    });\n});\n\n\n//# sourceURL=webpack:///./assets/js/custom/custom.js?");
    /***/
  }
  /******/

});
"use strict";

jQuery(document).ready(function ($) {
  var portfolio = $('.container-fluid');
  var uzaUrl = 'http://uza/wp-json/uza_rest/v1/portfolio';
  $('#load_more_btn').on('click', function () {
    $.getJSON(uzaUrl, function (posts) {
      var containerFluid = portfolio.append("\n                <div class=\"row uza-portfolio\">\n                    ".concat(posts.map(function (item) {
        return "<div class=\"col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics\">\n                            <div class=\"single-portfolio-slide\">\n                                <img src=\"".concat(item.image_url, "\" alt=\"\">\n                                <!-- Overlay Effect -->\n                                <div class=\"overlay-effect\">\n                                    <h4>").concat(item.title, "</h4>\n                                    <p>").concat(item.content, "</p>\n                                </div>\n                                <!-- View More -->\n                                <div class=\"view-more-btn\">\n                                    <a href=\"").concat(item.link, "\"><i class=\"arrow_right\"></i></a>\n                                </div>\n                            </div>\n                        </div>");
      }).join(''), "\n                </div>\n                "));
    });
  });
});