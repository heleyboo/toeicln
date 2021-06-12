webpackJsonp([16],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/user/User.vue":
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

exports.default = {
    data: function data() {
        return {
            fields: [{
                name: 'id',
                trans: 'table.id',
                titleClass: 'width-5-percent text-center',
                dataClass: 'text-center'
            }, {
                name: 'avatar',
                trans: 'table.avatar',
                titleClass: 'text-center',
                dataClass: 'text-center',
                callback: 'avatar'
            }, {
                name: 'name',
                trans: 'table.username'
            }, {
                name: 'email',
                trans: 'table.email'
            }, {
                name: '__component',
                trans: 'table.status',
                titleClass: 'text-center',
                dataClass: 'text-center'
            }, {
                name: 'created_at',
                trans: 'table.created_at'
            }, {
                name: '__actions',
                trans: 'table.action',
                titleClass: 'text-center',
                dataClass: 'text-center'
            }]
        };
    },

    methods: {
        avatar: function avatar(value) {
            return '<img src="' + value + '" class="avatar img-responsive img-circle" />';
        },
        tableActions: function tableActions(action, data) {
            var _this = this;

            if (action == 'edit-item') {
                this.$router.push('/dashboard/users/' + data.id + '/edit');
            } else if (action == 'delete-item') {
                this.$http.delete('user/' + data.id).then(function (response) {
                    toastr.success('You delete the user success!');

                    _this.$emit('reload');
                }, function (response) {
                    if (typeof response.data.error !== 'string' && response.data.error) {
                        toastr.error(response.data.error.message);
                    } else {
                        toastr.error(response.status + ' : Resource ' + response.statusText);
                    }
                });
            }
        }
    }
};

/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-43acd510\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/user/User.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('vue-table', {
    attrs: {
      "title": _vm.$t('page.users'),
      "fields": _vm.fields,
      "api-url": "user",
      "show-paginate": ""
    },
    on: {
      "table-action": _vm.tableActions
    }
  }, [_c('div', {
    slot: "buttons"
  }, [_c('router-link', {
    staticClass: "btn btn-success",
    attrs: {
      "to": "/dashboard/users/create"
    }
  }, [_vm._v(_vm._s(_vm.$t('page.create')))])], 1)])], 1)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-43acd510", module.exports)
  }
}

/***/ }),

/***/ "./resources/assets/js/views/dashboard/user/User.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/user/User.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-43acd510\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/user/User.vue"),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/apple/Desktop/Workspace/Projects/blog/resources/assets/js/views/dashboard/user/User.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] User.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-43acd510", Component.options)
  } else {
    hotAPI.reload("data-v-43acd510", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});