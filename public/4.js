(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var v_select2_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! v-select2-component */ "./node_modules/v-select2-component/dist/Select2.esm.js");


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

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
var url = window.location.href;
var lastParam = url.split("/").slice(-1)[0];


/* harmony default export */ __webpack_exports__["default"] = ({
  components: {
    Select2: v_select2_component__WEBPACK_IMPORTED_MODULE_2__["default"]
  },
  data: function data() {
    return {
      detallefacturacion: [],
      detalle: {
        id: lastParam,
        fecha: '',
        importe: '',
        file: '',
        tipo_gasto: '',
        gasts: '',
        gasto_operativo: ''
      },
      tipoComprobante: '',
      gastos: [],
      gasto_operativo: '',
      gastosdeViaje: []
    };
  },
  methods: {
    limpiarData: function limpiarData() {
      self = this;
      self.detalle.fecha = '';
      self.detalle.file = '';
      self.detalle.importe = '';
      self.tipoComprobante = '';
      self.gasto_operativo = '';
    },
    ObtenerGastos: function ObtenerGastos() {
      var _this = this;

      this.gastos.splice(0);

      if (this.tipoComprobante != 0) {
        axios__WEBPACK_IMPORTED_MODULE_1___default.a.get('/otrosGastos/gastosTipo/' + this.tipoComprobante).then(function (res) {
          var _iterator = _createForOfIteratorHelper(res.data),
              _step;

          try {
            for (_iterator.s(); !(_step = _iterator.n()).done;) {
              var value = _step.value;

              _this.gastos.push({
                id: value.id,
                tipo: value.tipo,
                descripcion: value.descripcion
              });
            }
          } catch (err) {
            _iterator.e(err);
          } finally {
            _iterator.f();
          }
        });
      }
    },
    cargarDocumento: function cargarDocumento(event) {
      this.cargarDocumento.file = event.target.files[0];
    },
    changeProducto: function changeProducto(event) {
      var _this2 = this;

      var value = this.gasto_operativo;
      axios__WEBPACK_IMPORTED_MODULE_1___default.a.get('/gasto-api-search/' + value).then(function (_ref) {
        var data = _ref.data;
        self = _this2;
        self.detalle.gasto_operativo = data.id;
        self.detalle.gasts = data.descripcion;
      })["catch"](function (error) {
        console.log(error);
      });
    },
    guardarDetalleFacturacion: function guardarDetalleFacturacion() {
      self = this;
      self.detalle.tipo_gasto = this.tipoComprobante;
      Bus.$emit("DetalleFacturacion", self.detalle);
      self.closeModalDetalleFacturacion();
    },
    closeModalDetalleFacturacion: function closeModalDetalleFacturacion() {
      self = this;
      self.limpiarData();
      $('#OtrosGastosOrdenTrabajo').modal('hide');
    },
    mySelectEvent2: function mySelectEvent2(_ref2) {
      var id = _ref2.id,
          text = _ref2.text;
      console.log({
        id: id,
        text: text
      });
    },
    getGastos: function getGastos() {
      var _this3 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                console.log("entre a getGastos");
                _context.next = 3;
                return axios__WEBPACK_IMPORTED_MODULE_1___default.a.get('/getGastosxViaje/' + lastParam).then(function (res) {
                  var _iterator2 = _createForOfIteratorHelper(res.data),
                      _step2;

                  try {
                    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
                      var gasto = _step2.value;

                      _this3.gastosdeViaje.push({
                        id: gasto.id,
                        importe: gasto.importe,
                        gasto: gasto.descripcion,
                        fecha: gasto.fecha
                      });
                    }
                  } catch (err) {
                    _iterator2.e(err);
                  } finally {
                    _iterator2.f();
                  }
                });

              case 3:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    eliminar: function eliminar(gasto, index) {
      var _this4 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_1___default.a["delete"]('/otrosgGastos/' + gasto.id).then(function () {
                  _this4.gastosdeViaje.splice(index, 1);
                });

              case 2:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2);
      }))();
    }
  },
  created: function created() {
    this.getGastos();
  },
  computed: {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "modal",
      attrs: {
        id: "VerOtrosGastosOrdenTrabajo",
        tabindex: "-1",
        role: "dialog",
        "aria-labelledby": "exampleModalLabel",
        "aria-hidden": "true"
      }
    },
    [
      _c(
        "div",
        {
          staticClass: "modal-dialog modal-dialog-scrollable modal-lg ",
          attrs: { role: "document" }
        },
        [
          _c("div", { staticClass: "modal-content" }, [
            _vm._m(0),
            _vm._v(" "),
            _c("div", { staticClass: "modal-body" }, [
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-md-12" }, [
                  _c("table", { staticClass: "table" }, [
                    _vm._m(1),
                    _vm._v(" "),
                    _c(
                      "tbody",
                      _vm._l(_vm.gastosdeViaje, function(item, index) {
                        return _c("tr", { key: index }, [
                          _c("th", [_vm._v(_vm._s(index))]),
                          _vm._v(" "),
                          _c("th", [_vm._v(_vm._s(item.fecha))]),
                          _vm._v(" "),
                          _c("th", [_vm._v(_vm._s(item.gasto))]),
                          _vm._v(" "),
                          _c("th", [_vm._v(_vm._s(item.importe))]),
                          _vm._v(" "),
                          _c("th", [
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-sm btn-danger",
                                attrs: { type: "button" },
                                on: {
                                  click: function($event) {
                                    return _vm.eliminar(item, index)
                                  }
                                }
                              },
                              [_c("i", { staticClass: "fa fa-remove" })]
                            )
                          ])
                        ])
                      }),
                      0
                    )
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _vm._m(2)
          ])
        ]
      )
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h5",
        { staticClass: "modal-title", attrs: { id: "exampleModalLabel" } },
        [_vm._v("OTROS GASTOS")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "close",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-label": "Close"
          }
        },
        [_c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("×")])]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { attrs: { scope: "col" } }, [_vm._v("#")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Fecha")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Descripción")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Importe")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Opciones")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-secondary",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("Cancelar")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-primary btn-pill",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("\n                      Guardar Detalle\n                  ")]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/VerDetalleOtrosGastosComponent.vue":
/*!********************************************************************!*\
  !*** ./resources/js/components/VerDetalleOtrosGastosComponent.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _VerDetalleOtrosGastosComponent_vue_vue_type_template_id_34d644ec___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec& */ "./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec&");
/* harmony import */ var _VerDetalleOtrosGastosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _VerDetalleOtrosGastosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _VerDetalleOtrosGastosComponent_vue_vue_type_template_id_34d644ec___WEBPACK_IMPORTED_MODULE_0__["render"],
  _VerDetalleOtrosGastosComponent_vue_vue_type_template_id_34d644ec___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/VerDetalleOtrosGastosComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_VerDetalleOtrosGastosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_VerDetalleOtrosGastosComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec&":
/*!***************************************************************************************************!*\
  !*** ./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec& ***!
  \***************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_VerDetalleOtrosGastosComponent_vue_vue_type_template_id_34d644ec___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/VerDetalleOtrosGastosComponent.vue?vue&type=template&id=34d644ec&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_VerDetalleOtrosGastosComponent_vue_vue_type_template_id_34d644ec___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_VerDetalleOtrosGastosComponent_vue_vue_type_template_id_34d644ec___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);