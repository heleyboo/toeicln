webpackJsonp([4],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/link/Edit.vue":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _Form = __webpack_require__("./resources/assets/js/views/dashboard/link/Form.vue");

var _Form2 = _interopRequireDefault(_Form);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = {
    components: { LinkForm: _Form2.default },
    data: function data() {
        return {
            link: undefined
        };
    },
    created: function created() {
        this.loadLink();
    },

    methods: {
        loadLink: function loadLink() {
            var _this = this;

            this.$http.get('link/' + this.$route.params.id + '/edit').then(function (response) {
                _this.link = response.data.data;
            });
        }
    }
}; //
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

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/link/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _helper = __webpack_require__("./resources/assets/js/config/helper.js");

exports.default = {
    props: {
        link: {
            type: Object,
            default: function _default() {
                return {
                    image: ''
                };
            }
        }
    },
    watch: {
        link: function link() {
            return this.link;
        }
    },
    computed: {
        mode: function mode() {
            return this.link.id ? 'update' : 'create';
        }
    },
    methods: {
        change: function change(event) {
            var _this = this;

            var image = event.target.files[0];
            var formData = new FormData();
            formData.append('image', image);
            formData.append('strategy', 'links');

            if (!/\/(?:jpeg|jpg|png)/i.test(image.type)) {
                toastr.error('Uploaded Failed! Image only supported jpeg, jpg and png.');
                return;
            }

            this.$http.post('file/upload', formData).then(function (response) {
                _this.link.image = response.data.url;
            });
        },
        onSubmit: function onSubmit() {
            var _this2 = this;

            if (!this.link.image) {
                toastr.error('The image is required!');
                return;
            }

            var url = 'link' + (this.link.id ? '/' + this.link.id : '');
            var method = this.link.id ? 'patch' : 'post';

            this.$http[method](url, this.link).then(function (response) {
                toastr.success('You ' + _this2.mode + 'd the link information success!');

                _this2.$router.push('/dashboard/links');
            }).catch(function (_ref) {
                var response = _ref.response;

                (0, _helper.stack_error)(response);
            });
        }
    }
}; //
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

/***/ }),

/***/ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4e47523a\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/link/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("./node_modules/css-loader/lib/css-base.js")(undefined);
// imports


// module
exports.push([module.i, "\n.upload-box[data-v-4e47523a] {\n  position: relative;\n  width: 100px;\n  height: 100px;\n}\n.link-image[data-v-4e47523a] {\n  display: block;\n  width: 100px;\n  height: 100px;\n  text-align: center;\n  font-size: 30px;\n  line-height: 100px;\n  border: 2px dashed #e7eaec;\n  border-radius: 5px;\n  color: #e7eaec;\n}\n.image[data-v-4e47523a] {\n  border-radius: 5px;\n}\ninput#image[data-v-4e47523a] {\n  position: absolute;\n  top: 0;\n  left: 0;\n  width: 100px;\n  height: 100px;\n  border-radius: 5px;\n  cursor: pointer;\n  opacity: 0;\n  z-index: 10;\n}\n.mask[data-v-4e47523a] {\n  display: none;\n  position: absolute;\n  width: 100px;\n  height: 100px;\n  background-color: rgba(0, 0, 0, 0.5);\n  top: 0;\n  left: 0;\n  border-radius: 5px;\n  z-index: 5;\n  text-align: center;\n  color: rgba(255, 255, 255, 0.8);\n  line-height: 100px;\n  font-size: 20px;\n}\n.upload-box:hover .mask[data-v-4e47523a] {\n  display: block;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-4e47523a\",\"hasScoped\":true}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/link/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('form', {
    staticClass: "form col-md-4 col-md-offset-4",
    attrs: {
      "role": "form",
      "enctype": "multipart/form-data"
    },
    on: {
      "submit": function($event) {
        $event.preventDefault();
        _vm.onSubmit($event)
      }
    }
  }, [_c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "name"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.link_name')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.link.name),
      expression: "link.name"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "id": "name",
      "name": "name",
      "placeholder": _vm.$t('form.link_name')
    },
    domProps: {
      "value": (_vm.link.name)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.link.name = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "link"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.link')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.link.link),
      expression: "link.link"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "link",
      "id": "link",
      "name": "link",
      "placeholder": _vm.$t('form.link')
    },
    domProps: {
      "value": (_vm.link.link)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.link.link = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "image"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.image')))]), _vm._v(" "), _c('div', {
    staticClass: "upload-box"
  }, [_c('input', {
    staticClass: "form-control",
    attrs: {
      "type": "file",
      "id": "image",
      "name": "image"
    },
    on: {
      "change": _vm.change
    }
  }), _vm._v(" "), (_vm.link.image) ? _c('img', {
    staticClass: "img-circle image",
    attrs: {
      "src": _vm.link.image,
      "alt": _vm.link.name,
      "width": "100",
      "height": "100"
    }
  }) : _c('i', {
    staticClass: "ion-image link-image"
  }), _vm._v(" "), (_vm.link.image) ? _c('div', {
    staticClass: "mask"
  }, [_c('i', {
    staticClass: "ion-upload"
  })]) : _vm._e()])]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', [_vm._v(_vm._s(_vm.$t('form.is_enable')))]), _vm._v(" "), _c('div', {
    staticClass: "togglebutton",
    staticStyle: {
      "margin-top": "6px"
    }
  }, [_c('label', [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.link.status),
      expression: "link.status"
    }],
    attrs: {
      "type": "checkbox",
      "name": "status"
    },
    domProps: {
      "checked": Array.isArray(_vm.link.status) ? _vm._i(_vm.link.status, null) > -1 : (_vm.link.status)
    },
    on: {
      "__c": function($event) {
        var $$a = _vm.link.status,
          $$el = $event.target,
          $$c = $$el.checked ? (true) : (false);
        if (Array.isArray($$a)) {
          var $$v = null,
            $$i = _vm._i($$a, $$v);
          if ($$el.checked) {
            $$i < 0 && (_vm.link.status = $$a.concat($$v))
          } else {
            $$i > -1 && (_vm.link.status = $$a.slice(0, $$i).concat($$a.slice($$i + 1)))
          }
        } else {
          _vm.link.status = $$c
        }
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "toggle"
  })])])]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('button', {
    staticClass: "btn btn-info",
    attrs: {
      "type": "submit"
    }
  }, [_vm._v(_vm._s(_vm.link.id ? _vm.$t('form.edit') : _vm.$t('form.create')))])])])])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-4e47523a", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-dceebf00\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/link/Edit.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('vue-form', {
    attrs: {
      "title": _vm.$t('form.edit_link')
    }
  }, [_c('div', {
    slot: "buttons"
  }, [_c('router-link', {
    staticClass: "btn btn-default",
    attrs: {
      "to": "/dashboard/links",
      "exact": ""
    }
  }, [_vm._v(_vm._s(_vm.$t('form.back')))])], 1), _vm._v(" "), _c('div', {
    slot: "content"
  }, [_c('link-form', {
    attrs: {
      "link": _vm.link
    }
  })], 1)])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-dceebf00", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4e47523a\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/link/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__("./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4e47523a\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/link/Form.vue");
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__("./node_modules/vue-style-loader/lib/addStylesClient.js")("150519a9", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4e47523a\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Form.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4e47523a\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Form.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ "./resources/assets/js/config/helper.js":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.stack_error = stack_error;
function stack_error(response) {
    if (typeof response.data == 'string') {
        toastr.error(response.status + ' ' + response.statusText);
    } else {
        var data = response.data;
        var content = '';

        Object.keys(data).map(function (key, index) {
            var value = data[key];

            content += '<span style="color: #e74c3c">' + value[0] + '</span><br>';
        });

        swal({
            title: "Error Text!",
            type: 'error',
            text: content,
            html: true
        });
    }
}

/***/ }),

/***/ "./resources/assets/js/views/dashboard/link/Edit.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/link/Edit.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-dceebf00\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/link/Edit.vue"),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/apple/Desktop/Workspace/Projects/blog/resources/assets/js/views/dashboard/link/Edit.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Edit.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-dceebf00", Component.options)
  } else {
    hotAPI.reload("data-v-dceebf00", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ "./resources/assets/js/views/dashboard/link/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__("./node_modules/vue-style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-4e47523a\",\"scoped\":true,\"hasInlineConfig\":true}!./node_modules/sass-loader/lib/loader.js!./node_modules/vue-loader/lib/selector.js?type=styles&index=0!./resources/assets/js/views/dashboard/link/Form.vue")
}
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/link/Form.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-4e47523a\",\"hasScoped\":true}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/link/Form.vue"),
  /* styles */
  injectStyle,
  /* scopeId */
  "data-v-4e47523a",
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/apple/Desktop/Workspace/Projects/blog/resources/assets/js/views/dashboard/link/Form.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Form.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4e47523a", Component.options)
  } else {
    hotAPI.reload("data-v-4e47523a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});