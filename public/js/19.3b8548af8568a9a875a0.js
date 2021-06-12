webpackJsonp([19],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/discussion/Discussion.vue":
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
                name: 'user',
                trans: 'table.username',
                titleClass: 'text-center',
                dataClass: 'text-center',
                callback: 'username'
            }, {
                name: 'title',
                trans: 'table.title'
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
            }],
            itemActions: [{ name: 'view-item', icon: 'ion-eye', class: 'btn btn-success' }, { name: 'edit-item', icon: 'ion-edit', class: 'btn btn-info' }, { name: 'delete-item', icon: 'ion-trash-b', class: 'btn btn-danger' }]
        };
    },

    methods: {
        username: function username(value) {
            return value.name;
        },
        tableActions: function tableActions(action, data) {
            var _this = this;

            if (action == 'edit-item') {
                this.$router.push('/dashboard/discussions/' + data.id + '/edit');
            } else if (action == 'delete-item') {
                this.$http.delete('discussion/' + data.id).then(function (response) {
                    toastr.success('You delete the discussion success!');

                    _this.$emit('reload');
                }).catch(function (_ref) {
                    var response = _ref.response;

                    toastr.error(response.status + ' : Resource ' + response.statusText);
                });
            } else if (action == 'view-item') {
                window.open('/discussion/' + data.id, '_blank');
            }
        }
    }
};

/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-98474f20\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/discussion/Discussion.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('vue-table', {
    attrs: {
      "title": _vm.$t('page.discussions'),
      "fields": _vm.fields,
      "api-url": "discussion",
      "item-actions": _vm.itemActions,
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
      "to": "/dashboard/discussions/create"
    }
  }, [_vm._v(_vm._s(_vm.$t('page.create')))])], 1)])], 1)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-98474f20", module.exports)
  }
}

/***/ }),

/***/ "./resources/assets/js/views/dashboard/discussion/Discussion.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}],\"es2015\",\"stage-2\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/assets/js/views/dashboard/discussion/Discussion.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-98474f20\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/assets/js/views/dashboard/discussion/Discussion.vue"),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/apple/Desktop/Workspace/Projects/blog/resources/assets/js/views/dashboard/discussion/Discussion.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Discussion.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-98474f20", Component.options)
  } else {
    hotAPI.reload("data-v-98474f20", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});