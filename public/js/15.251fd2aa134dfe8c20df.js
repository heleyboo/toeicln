webpackJsonp([15],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/System.vue":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

exports.default = {
    data: function data() {
        return {
            system: {},
            type: 'system'
        };
    },
    created: function created() {
        var _this = this;

        this.$http.get('system').then(function (response) {
            _this.system = response.data;
        });
    }
};

/***/ }),

/***/ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-2158f7be\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/System.vue":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("./node_modules/css-loader/lib/css-base.js")(undefined);
// imports


// module
exports.push([module.i, "\nh2[data-v-2158f7be] {\n  font-size: 20px;\n  line-height: 30px;\n  margin-top: 0;\n}\nul[data-v-2158f7be] {\n  padding-left: 0;\n}\nul li[data-v-2158f7be] {\n  list-style: none;\n}\n.content[data-v-2158f7be] {\n  margin-top: 30px;\n}\n.table thead th[data-v-2158f7be] {\n  vertical-align: bottom;\n}\n.table th[data-v-2158f7be] {\n  border-bottom: 1px solid #e5e5e5;\n  font-size: 12px;\n  text-transform: uppercase;\n  font-weight: normal;\n  color: #aaa;\n}\n.table :not(:last-child) > td[data-v-2158f7be] {\n  border-bottom: 1px solid #e5e5e5;\n}\n.table td[data-v-2158f7be] {\n  vertical-align: top;\n}\n.table th[data-v-2158f7be], .table td[data-v-2158f7be] {\n  padding: 16px 12px;\n}\n.table-hover tbody tr[data-v-2158f7be]:hover {\n  background: #fff;\n}\n.sidebar ul li a[data-v-2158f7be] {\n  font-size: 12px;\n  display: block;\n  text-decoration: none;\n  padding: 8px 14px;\n  cursor: pointer;\n  color: #666;\n}\n.sidebar ul li a[data-v-2158f7be]:hover, .active[data-v-2158f7be] {\n  background: #eee;\n  color: #666;\n}\n.sidebar ul li a i[data-v-2158f7be] {\n  font-size: 22px;\n  margin-right: 10px;\n  vertical-align: middle;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-2158f7be\",\"hasScoped\":true}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/System.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "ibox"
  }, [_c('div', {
    staticClass: "ibox-title"
  }, [_c('h5', [_vm._v(_vm._s(_vm.$t('page.systems')))])]), _vm._v(" "), _c('div', {
    staticClass: "ibox-content"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-md-2"
  }, [_c('div', {
    staticClass: "sidebar"
  }, [_c('ul', [_c('li', {
    class: [_vm.type == 'system' ? 'active' : ''],
    attrs: {
      "aria-expanded": "false"
    },
    on: {
      "click": function($event) {
        _vm.type = 'system'
      }
    }
  }, [_c('a', [_c('i', {
    staticClass: "ion-ios-toggle"
  }), _vm._v(_vm._s(_vm.$t('page.system')))])]), _vm._v(" "), _c('li', {
    class: [_vm.type == 'php' ? 'active' : ''],
    attrs: {
      "aria-expanded": "true"
    },
    on: {
      "click": function($event) {
        _vm.type = 'php'
      }
    }
  }, [_vm._m(0)]), _vm._v(" "), _c('li', {
    class: [_vm.type == 'database' ? 'active' : ''],
    attrs: {
      "aria-expanded": "false"
    },
    on: {
      "click": function($event) {
        _vm.type = 'database'
      }
    }
  }, [_c('a', [_c('i', {
    staticClass: "ion-social-buffer"
  }), _vm._v(" " + _vm._s(_vm.$t('page.database')))])])])])]), _vm._v(" "), _c('ul', {
    staticClass: "col-md-10",
    attrs: {
      "id": "tab-content"
    }
  }, [(_vm.type == 'system') ? _c('li', {
    attrs: {
      "aria-hidden": "true"
    }
  }, [_c('h2', [_vm._v(_vm._s(_vm.$t('page.system')))]), _vm._v(" "), _c('table', {
    staticClass: "table table-hover"
  }, [_c('thead', [_c('tr', [_c('th', {
    staticClass: "pk-table-width-150"
  }, [_vm._v(_vm._s(_vm.$t('page.key')))]), _vm._v(" "), _c('th', [_vm._v(_vm._s(_vm.$t('page.value')))])])]), _vm._v(" "), _c('tbody', [_c('tr', [_c('td', [_vm._v(_vm._s(_vm.$t('page.server')))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.server))])]), _vm._v(" "), _c('tr', [_c('td', [_vm._v(_vm._s(_vm.$t('page.domain')))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.http_host))])]), _vm._v(" "), _c('tr', [_c('td', [_vm._v("IP")]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.remote_host))])]), _vm._v(" "), _c('tr', [_c('td', [_vm._v("User Agent")]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.user_agent))])])])])]) : _vm._e(), _vm._v(" "), (_vm.type == 'php') ? _c('li', {
    attrs: {
      "aria-hidden": "false"
    }
  }, [_c('h2', [_vm._v("PHP")]), _vm._v(" "), _c('table', {
    staticClass: "table table-hover"
  }, [_c('thead', [_c('tr', [_c('th', [_vm._v(_vm._s(_vm.$t('page.key')))]), _vm._v(" "), _c('th', [_vm._v(_vm._s(_vm.$t('page.value')))])])]), _vm._v(" "), _c('tbody', [_c('tr', [_c('td', [_vm._v(_vm._s(_vm.$t('page.version')))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.php))])]), _vm._v(" "), _c('tr', [_c('td', [_vm._v("Handler")]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.sapi_name))])]), _vm._v(" "), _c('tr', [_c('td', [_vm._v(_vm._s(_vm.$t('page.extension')))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.extensions))])])])])]) : _vm._e(), _vm._v(" "), (_vm.type == 'database') ? _c('li', {
    attrs: {
      "aria-hidden": "true"
    }
  }, [_c('h2', [_vm._v(_vm._s(_vm.$t('page.database')))]), _vm._v(" "), _c('table', {
    staticClass: "table table-hover"
  }, [_c('thead', [_c('tr', [_c('th', [_vm._v(_vm._s(_vm.$t('page.key')))]), _vm._v(" "), _c('th', [_vm._v(_vm._s(_vm.$t('page.value')))])])]), _vm._v(" "), _c('tbody', [_c('tr', [_c('td', [_vm._v(_vm._s(_vm.$t('page.driver')))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.db_connection))])]), _vm._v(" "), _c('tr', [_c('td', [_vm._v(_vm._s(_vm.$t('page.database')))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.db_database))])]), _vm._v(" "), _c('tr', [_c('td', [_vm._v(_vm._s(_vm.$t('page.version')))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(_vm.system.db_version))])])])])]) : _vm._e()])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('a', [_c('i', {
    staticClass: "ion-code"
  }), _vm._v(" PHP")])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-2158f7be", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-2158f7be\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/System.vue":
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__("./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-2158f7be\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/System.vue");
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__("./node_modules/vue-style-loader/lib/addStylesClient.js")("4ee3ed4a", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-2158f7be\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/sass-loader/lib/loader.js!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./System.vue", function() {
     var newContent = require("!!../../../../../node_modules/css-loader/index.js!../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-2158f7be\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../node_modules/sass-loader/lib/loader.js!../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./System.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ "./resources/assets/js/views/dashboard/System.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__("./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-2158f7be\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/System.vue")
}
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/System.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-2158f7be\",\"hasScoped\":true}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/System.vue"),
  /* styles */
  injectStyle,
  /* scopeId */
  "data-v-2158f7be",
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/apple/Desktop/Workspace/Projects/blog/resources/assets/js/views/dashboard/System.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] System.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2158f7be", Component.options)
  } else {
    hotAPI.reload("data-v-2158f7be", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});