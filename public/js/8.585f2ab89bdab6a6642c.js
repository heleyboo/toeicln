webpackJsonp([8],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/user/Edit.vue":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _Form = __webpack_require__("./resources/assets/js/views/dashboard/user/Form.vue");

var _Form2 = _interopRequireDefault(_Form);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = {
    components: { UserForm: _Form2.default },
    data: function data() {
        return {
            user: undefined
        };
    },
    created: function created() {
        this.loadUser();
    },

    methods: {
        loadUser: function loadUser() {
            var _this = this;

            this.$http.get('user/' + this.$route.params.id + '/edit').then(function (response) {
                _this.user = response.data.data;
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

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/user/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _helper = __webpack_require__("./resources/assets/js/config/helper.js");

exports.default = {
    props: {
        user: {
            type: Object,
            default: function _default() {
                return {};
            }
        }
    },
    computed: {
        mode: function mode() {
            return this.user.id ? 'update' : 'create';
        }
    },
    methods: {
        onSubmit: function onSubmit() {
            var _this = this;

            var url = 'user' + (this.user.id ? '/' + this.user.id : '');
            var method = this.user.id ? 'patch' : 'post';

            this.$http[method](url, this.user).then(function (response) {
                toastr.success('You ' + _this.mode + 'd a new account information!');

                _this.$router.push('/dashboard/users');
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
//
//
//
//
//
//
//

/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-6fcad189\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/user/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('form', {
    staticClass: "form col-md-4 col-md-offset-4",
    attrs: {
      "role": "form"
    },
    on: {
      "submit": function($event) {
        $event.preventDefault();
        _vm.onSubmit($event)
      }
    }
  }, [_c('div', {
    staticClass: "form-group text-center"
  }, [_c('img', {
    staticClass: "img-circle",
    attrs: {
      "src": _vm.user.avatar ? _vm.user.avatar : 'https://pigjian.com/uploads/default_avatar.png',
      "id": "avatar",
      "width": "100",
      "alt": _vm.user.name
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "name"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.name')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.user.name),
      expression: "user.name"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "id": "name",
      "placeholder": _vm.$t('form.name'),
      "disabled": _vm.user.id ? true : false
    },
    domProps: {
      "value": (_vm.user.name)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.user.name = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "email"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.email')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.user.email),
      expression: "user.email"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "email",
      "id": "email",
      "placeholder": _vm.$t('form.email')
    },
    domProps: {
      "value": (_vm.user.email)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.user.email = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "nickname"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.nickname')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.user.nickname),
      expression: "user.nickname"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "id": "nickname",
      "placeholder": _vm.$t('form.nickname')
    },
    domProps: {
      "value": (_vm.user.nickname)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.user.nickname = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "website"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.website')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.user.website),
      expression: "user.website"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "id": "website",
      "placeholder": _vm.$t('form.website')
    },
    domProps: {
      "value": (_vm.user.website)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.user.website = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "description"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.description')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.user.description),
      expression: "user.description"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "id": "description",
      "placeholder": _vm.$t('form.description')
    },
    domProps: {
      "value": (_vm.user.description)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.user.description = $event.target.value
      }
    }
  })]), _vm._v(" "), (!_vm.user.id) ? [_c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "password"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.password')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.user.password),
      expression: "user.password"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "password",
      "id": "password",
      "placeholder": _vm.$t('form.password'),
      "name": "password"
    },
    domProps: {
      "value": (_vm.user.password)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.user.password = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    attrs: {
      "for": "password_confirmation"
    }
  }, [_vm._v(_vm._s(_vm.$t('form.confirm_password')))]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.user.password_confirmation),
      expression: "user.password_confirmation"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "password",
      "id": "password_confirmation",
      "placeholder": _vm.$t('form.confirm_password'),
      "name": "password_confirmation"
    },
    domProps: {
      "value": (_vm.user.password_confirmation)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.user.password_confirmation = $event.target.value
      }
    }
  })])] : _vm._e(), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('button', {
    staticClass: "btn btn-primary",
    attrs: {
      "type": "submit"
    }
  }, [_vm._v(_vm._s(_vm.user.id ? _vm.$t('form.edit') : _vm.$t('form.create')))])])], 2)])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-6fcad189", module.exports)
  }
}

/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-99e7c062\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/user/Edit.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('vue-form', {
    attrs: {
      "title": _vm.$t('form.edit_user')
    }
  }, [_c('div', {
    slot: "buttons"
  }, [_c('router-link', {
    staticClass: "btn btn-default",
    attrs: {
      "to": "/dashboard/users",
      "exact": ""
    }
  }, [_vm._v(_vm._s(_vm.$t('form.back')))])], 1), _vm._v(" "), _c('div', {
    slot: "content"
  }, [_c('user-form', {
    attrs: {
      "user": _vm.user
    }
  })], 1)])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-99e7c062", module.exports)
  }
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

/***/ "./resources/assets/js/views/dashboard/user/Edit.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/user/Edit.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-99e7c062\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/user/Edit.vue"),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/apple/Desktop/Workspace/Projects/blog/resources/assets/js/views/dashboard/user/Edit.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Edit.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-99e7c062", Component.options)
  } else {
    hotAPI.reload("data-v-99e7c062", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ "./resources/assets/js/views/dashboard/user/Form.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/user/Form.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-6fcad189\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/user/Form.vue"),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/apple/Desktop/Workspace/Projects/blog/resources/assets/js/views/dashboard/user/Form.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Form.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6fcad189", Component.options)
  } else {
    hotAPI.reload("data-v-6fcad189", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});