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

  return __webpack_require__(__webpack_require__.s = "./inc/admin/assets/js/custom/custom.js");
  /******/
})(
/************************************************************************/

/******/
{
  /***/
  "./inc/admin/assets/js/custom/custom.js":
  /*!**********************************************!*\
    !*** ./inc/admin/assets/js/custom/custom.js ***!
    \**********************************************/

  /*! no static exports found */

  /***/
  function incAdminAssetsJsCustomCustomJs(module, exports) {
    eval("jQuery(document).ready(function($){\r\n\r\n   // Slider Post type menu handler\r\n\t$('.admin_slider_button_text_div').hide();\r\n   $('.trigger').on('click', function(e){\r\n\t\tconsole.log($(event.target).parent().next());\r\n\t\t$(event.target).parent().next().slideToggle();\r\n\t\t// e.target.next.slideToggle();\r\n   });\r\n\r\n   // Image uploader Header 1\r\n\tvar mediaUploader;\r\n\tvar attachment;\r\n\r\n\tclass MediaUploader{\r\n\t\tconstructor(button, input, preview){\r\n\t\t\tthis.triggerButton = $(button);\r\n\t\t\tthis.triggerInput = $(input);\r\n\t\t\tthis.imagePreview = $(preview);\r\n\t\t\tthis.mediaUploader = wp.media.frames.file_frame = wp.media({\r\n\t\t\t\t\ttitle: 'Choose a Profile Picture',\r\n\t\t\t\t\tbutton: {\r\n\t\t\t\t\t\ttext: 'Choose Picture'\r\n\t\t\t\t\t},\r\n\t\t\t\t\t\tmultiple: false,\r\n\t\t\t\t});\r\n\t\t\tthis.uploadImage();\r\n\t\t}\r\n\r\n\t\tuploadImage(){\r\n\t\t\tthis.triggerButton.on('click', this.startUpload.bind(this));\r\n\t\t\tthis.mediaUploader.on('select', this.endUpload.bind(this));\r\n\t\t}\r\n\r\n\t\tstartUpload(e){\r\n\t\t\tif(this.mediaUploader){\r\n\t\t\t\tthis.mediaUploader.open();\r\n\t\t\t\t\treturn;\r\n\t\t\t}\r\n\t\t}\r\n\r\n\t\tendUpload(){\r\n\t\t\t\tthis.attachment = this.mediaUploader.state().get('selection').first().toJSON();\r\n\r\n\t\t\t\tthis.triggerInput.val(this.attachment.url);\r\n\t\t\t\tthis.imagePreview.attr('src', this.attachment.url);\r\n\t\t\t\tconsole.log(this.triggerInput);\r\n\r\n\t\t\tmediaUploader.open();\r\n\t\t}\r\n\t}\r\n\r\n\tvar headerImage = new MediaUploader('#upload-header-img', '#header-input', '#header_image_preview img');\r\n\r\n\tvar advertiseImage = new MediaUploader('#upload-advertis-img', '#advertis-input', '#advertis_image_preview img');\r\n\r\n\r\n\r\n});\r\n\n\n//# sourceURL=webpack:///./inc/admin/assets/js/custom/custom.js?");
    /***/
  }
  /******/

});
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

jQuery(document).ready(function ($) {
  // Slider Post type menu handler
  $('.admin_slider_button_text_div').hide();
  $('.trigger').on('click', function (e) {
    console.log($(event.target).parent().next());
    $(event.target).parent().next().slideToggle(); // e.target.next.slideToggle();
  }); // Image uploader Header 1

  var mediaUploader;
  var attachment;

  var MediaUploader = /*#__PURE__*/function () {
    function MediaUploader(button, input, preview) {
      _classCallCheck(this, MediaUploader);

      this.triggerButton = $(button);
      this.triggerInput = $(input);
      this.imagePreview = $(preview);
      this.mediaUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose a Profile Picture',
        button: {
          text: 'Choose Picture'
        },
        multiple: false
      });
      this.uploadImage();
    }

    _createClass(MediaUploader, [{
      key: "uploadImage",
      value: function uploadImage() {
        this.triggerButton.on('click', this.startUpload.bind(this));
        this.mediaUploader.on('select', this.endUpload.bind(this));
      }
    }, {
      key: "startUpload",
      value: function startUpload(e) {
        if (this.mediaUploader) {
          this.mediaUploader.open();
          return;
        }
      }
    }, {
      key: "endUpload",
      value: function endUpload() {
        this.attachment = this.mediaUploader.state().get('selection').first().toJSON();
        this.triggerInput.val(this.attachment.url);
        this.imagePreview.attr('src', this.attachment.url);
        console.log(this.triggerInput);
        mediaUploader.open();
      }
    }]);

    return MediaUploader;
  }();

  var headerImage = new MediaUploader('#upload-header-img', '#header-input', '#header_image_preview img');
  var advertiseImage = new MediaUploader('#upload-advertis-img', '#advertis-input', '#advertis_image_preview img');
});