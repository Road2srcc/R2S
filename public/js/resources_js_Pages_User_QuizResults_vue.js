(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_User_QuizResults_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/User/QuizResults.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/User/QuizResults.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\xampp\\htdocs\\resources\\js\\Pages\\User\\QuizResults.vue: Unexpected token, expected \",\" (230:21)\n\n\u001b[0m \u001b[90m 228 |\u001b[39m         totalTimeSpent() {\n \u001b[90m 229 |\u001b[39m             \u001b[36mreturn\u001b[39m \u001b[36mthis\u001b[39m\u001b[33m.\u001b[39msession\u001b[33m.\u001b[39mresults\u001b[33m.\u001b[39mtotal_time_taken\u001b[33m.\u001b[39mdetailed_readable \u001b[33m+\u001b[39m\u001b[32m' '\u001b[39m\u001b[33m+\u001b[39m\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39m__(\u001b[32m'Spent'\u001b[39m)\u001b[33m;\u001b[39m\n\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 230 |\u001b[39m         }            avgTimePerQuestion() {\n \u001b[90m     |\u001b[39m                      \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\n \u001b[90m 231 |\u001b[39m             \u001b[36mif\u001b[39m (\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39msession\u001b[33m.\u001b[39mresults\u001b[33m.\u001b[39manswered_questions \u001b[33m===\u001b[39m \u001b[35m0\u001b[39m) \u001b[36mreturn\u001b[39m \u001b[32m'0:00'\u001b[39m\u001b[33m;\u001b[39m\n \u001b[90m 232 |\u001b[39m             \u001b[36mconst\u001b[39m avgSeconds \u001b[33m=\u001b[39m \u001b[33mMath\u001b[39m\u001b[33m.\u001b[39mfloor(\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39msession\u001b[33m.\u001b[39mresults\u001b[33m.\u001b[39mtotal_time_taken\u001b[33m.\u001b[39mseconds \u001b[33m/\u001b[39m \u001b[36mthis\u001b[39m\u001b[33m.\u001b[39msession\u001b[33m.\u001b[39mresults\u001b[33m.\u001b[39manswered_questions)\u001b[33m;\u001b[39m\n \u001b[90m 233 |\u001b[39m             \u001b[36mconst\u001b[39m minutes \u001b[33m=\u001b[39m \u001b[33mMath\u001b[39m\u001b[33m.\u001b[39mfloor(avgSeconds \u001b[33m/\u001b[39m \u001b[35m60\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n    at constructor (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:360:19)\n    at Parser.raise (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:3338:19)\n    at Parser.unexpected (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:3358:16)\n    at Parser.expect (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:3668:12)\n    at Parser.parseObjectLike (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:11533:14)\n    at Parser.parseExprAtom (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:11051:23)\n    at Parser.parseExprSubscripts (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10785:23)\n    at Parser.parseUpdate (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10770:21)\n    at Parser.parseMaybeUnary (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10750:23)\n    at Parser.parseMaybeUnaryOrPrivate (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10603:61)\n    at Parser.parseExprOps (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10608:23)\n    at Parser.parseMaybeConditional (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10585:23)\n    at Parser.parseMaybeAssign (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10538:21)\n    at C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10507:39\n    at Parser.allowInAnd (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12126:12)\n    at Parser.parseMaybeAssignAllowIn (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10507:17)\n    at Parser.parseObjectProperty (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:11663:83)\n    at Parser.parseObjPropValue (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:11688:100)\n    at Parser.parsePropertyDefinition (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:11628:17)\n    at Parser.parseObjectLike (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:11543:21)\n    at Parser.parseExprAtom (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:11051:23)\n    at Parser.parseExprSubscripts (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10785:23)\n    at Parser.parseUpdate (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10770:21)\n    at Parser.parseMaybeUnary (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10750:23)\n    at Parser.parseMaybeUnaryOrPrivate (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10603:61)\n    at Parser.parseExprOps (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10608:23)\n    at Parser.parseMaybeConditional (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10585:23)\n    at Parser.parseMaybeAssign (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10538:21)\n    at C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10507:39\n    at Parser.allowInAnd (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12121:16)\n    at Parser.parseMaybeAssignAllowIn (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:10507:17)\n    at Parser.parseExportDefaultExpression (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:13584:22)\n    at Parser.parseExport (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:13487:25)\n    at Parser.parseStatementContent (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12542:27)\n    at Parser.parseStatementLike (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12432:17)\n    at Parser.parseModuleItem (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12409:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12980:36)\n    at Parser.parseBlockBody (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12973:10)\n    at Parser.parseProgram (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12306:10)\n    at Parser.parseTopLevel (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:12296:25)\n    at Parser.parse (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:14152:10)\n    at parse (C:\\xampp\\htdocs\\node_modules\\@babel\\parser\\lib\\index.js:14186:38)\n    at parser (C:\\xampp\\htdocs\\node_modules\\@babel\\core\\lib\\parser\\index.js:41:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (C:\\xampp\\htdocs\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:64:37)\n    at normalizeFile.next (<anonymous>)\n    at run (C:\\xampp\\htdocs\\node_modules\\@babel\\core\\lib\\transformation\\index.js:22:50)\n    at run.next (<anonymous>)\n    at transform (C:\\xampp\\htdocs\\node_modules\\@babel\\core\\lib\\transform.js:22:33)\n    at transform.next (<anonymous>)\n    at step (C:\\xampp\\htdocs\\node_modules\\gensync\\index.js:261:32)\n    at C:\\xampp\\htdocs\\node_modules\\gensync\\index.js:273:13\n    at async.call.result.err.err (C:\\xampp\\htdocs\\node_modules\\gensync\\index.js:223:11)");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/User/QuizResults.vue?vue&type=template&id=5da5e2b4&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/User/QuizResults.vue?vue&type=template&id=5da5e2b4& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* binding */ render),
/* harmony export */   staticRenderFns: () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "app-layout",
    {
      scopedSlots: _vm._u([
        {
          key: "header",
          fn: function () {
            return [
              _c(
                "div",
                { staticClass: "flex items-center" },
                [
                  _c("back-button"),
                  _vm._v(" "),
                  _c("h1", { staticClass: "app-heading" }, [
                    _vm._v(
                      _vm._s(_vm.quiz.title) + " " + _vm._s(_vm.__("Results"))
                    ),
                  ]),
                ],
                1
              ),
            ]
          },
          proxy: true,
        },
        {
          key: "actions",
          fn: function () {
            return [
              _c(
                "a",
                {
                  staticClass: "qt-btn qt-btn-sm qt-btn-success",
                  attrs: {
                    href: _vm.route("download_quiz_report", {
                      quiz: _vm.quiz.slug,
                      session: _vm.session.code,
                    }),
                    target: "_blank",
                  },
                },
                [
                  _vm._v(
                    "\n            " +
                      _vm._s(_vm.__("Download Score Report")) +
                      "\n        "
                  ),
                ]
              ),
            ]
          },
          proxy: true,
        },
      ]),
    },
    [
      _vm._v(" "),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "w-full mt-8" },
        [_c("progress-navigator", { attrs: { steps: _vm.steps } })],
        1
      ),
      _vm._v(" "),
      _c("div", { staticClass: "py-8" }, [
        _c(
          "div",
          {
            staticClass:
              "grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4",
          },
          [
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex items-center justify-between px-6 py-4 relative shadow",
              },
              [
                _c("div", {
                  staticClass:
                    "absolute w-2 h-4 bg-green-700 ltr:left-0 rtl:right-0",
                }),
                _vm._v(" "),
                _c(
                  "h3",
                  {
                    staticClass:
                      "focus:outline-none py-6 leading-4 text-gray-800 dark:text-gray-100 font-normal text-base",
                  },
                  [_vm._v(_vm._s(_vm.__(_vm.session.results.pass_or_fail)))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "flex flex-col items-end" }, [
                  _c(
                    "h2",
                    {
                      staticClass:
                        "focus:outline-none text-green-700 dark:text-gray-100 text-xl leading-normal font-bold",
                    },
                    [
                      _vm._v(
                        _vm._s(
                          _vm.session.results.percentage < 0
                            ? 0
                            : _vm.session.results.percentage
                        ) + "%"
                      ),
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "p",
                    {
                      staticClass:
                        "focus:outline-none ltr:ml-2 rtl:mr-2 mb-1 text-sm text-gray-600 dark:text-gray-400",
                      attrs: { tabindex: "0" },
                    },
                    [
                      _vm._v(
                        _vm._s(_vm.__("Min.")) +
                          " " +
                          _vm._s(_vm.session.results.cutoff) +
                          "%"
                      ),
                    ]
                  ),
                ]),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex items-center justify-between px-6 py-4 relative shadow",
              },
              [
                _c("div", {
                  staticClass:
                    "absolute w-2 h-4 bg-green-700 ltr:left-0 rtl:right-0",
                }),
                _vm._v(" "),
                _c(
                  "h3",
                  {
                    staticClass:
                      "focus:outline-none py-6 leading-4 text-gray-800 dark:text-gray-100 font-normal text-base",
                  },
                  [_vm._v(_vm._s(_vm.__("Score")))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "flex flex-col items-end" }, [
                  _c(
                    "h2",
                    {
                      staticClass:
                        "focus:outline-none text-green-700 dark:text-gray-100 text-xl leading-normal font-bold",
                    },
                    [
                      _vm._v(
                        _vm._s(
                          _vm.session.results.score < 0
                            ? 0
                            : _vm.session.results.score
                        )
                      ),
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "p",
                    {
                      staticClass:
                        "focus:outline-none ltr:ml-2 rtl:mr-2 mb-1 text-sm text-gray-600 dark:text-gray-400",
                      attrs: { tabindex: "0" },
                    },
                    [
                      _vm._v(
                        _vm._s(_vm.__("Marks")) +
                          " " +
                          _vm._s(_vm.session.results.total_marks)
                      ),
                    ]
                  ),
                ]),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex items-center justify-between px-6 py-4 relative shadow",
              },
              [
                _c("div", {
                  staticClass:
                    "absolute w-2 h-4 bg-green-700 ltr:left-0 rtl:right-0",
                }),
                _vm._v(" "),
                _c(
                  "h3",
                  {
                    staticClass:
                      "focus:outline-none py-6 leading-4 text-gray-800 dark:text-gray-100 font-normal text-base",
                  },
                  [_vm._v(_vm._s(_vm.__("Accuracy")))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "flex flex-col items-end" }, [
                  _c(
                    "h2",
                    {
                      staticClass:
                        "focus:outline-none text-green-700 dark:text-gray-100 text-xl leading-normal font-bold",
                    },
                    [_vm._v(_vm._s(_vm.session.results.accuracy) + "%")]
                  ),
                  _vm._v(" "),
                  _c("p", {
                    staticClass:
                      "focus:outline-none ltr:ml-2 rtl:mr-2 mb-1 text-sm text-gray-600 dark:text-gray-400",
                    attrs: { tabindex: "0" },
                  }),
                ]),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex items-center justify-between px-6 py-4 relative shadow",
              },
              [
                _c("div", {
                  staticClass:
                    "absolute w-2 h-4 bg-green-700 ltr:left-0 rtl:right-0",
                }),
                _vm._v(" "),
                _c(
                  "h3",
                  {
                    staticClass:
                      "focus:outline-none py-6 leading-4 text-gray-800 dark:text-gray-100 font-normal text-base",
                  },
                  [_vm._v(_vm._s(_vm.__("Speed")))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "flex flex-col items-end" }, [
                  _c(
                    "h2",
                    {
                      staticClass:
                        "focus:outline-none text-green-700 dark:text-gray-100 text-xl leading-normal font-bold",
                    },
                    [_vm._v(_vm._s(_vm.session.results.speed))]
                  ),
                  _vm._v(" "),
                  _c(
                    "p",
                    {
                      staticClass:
                        "focus:outline-none ltr:ml-2 rtl:mr-2 mb-1 text-sm text-gray-600 dark:text-gray-400",
                      attrs: { tabindex: "0" },
                    },
                    [_vm._v("Que/Hour")]
                  ),
                ]),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex items-center justify-between px-6 py-4 relative shadow",
              },
              [
                _c("div", {
                  staticClass:
                    "absolute w-2 h-4 bg-blue-700 ltr:left-0 rtl:right-0",
                }),
                _vm._v(" "),
                _c(
                  "h3",
                  {
                    staticClass:
                      "focus:outline-none py-6 leading-4 text-gray-800 dark:text-gray-100 font-normal text-base",
                  },
                  [_vm._v(_vm._s(_vm.__("Avg. Time/Question")))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "flex flex-col items-end" }, [
                  _c(
                    "h2",
                    {
                      staticClass:
                        "focus:outline-none text-blue-700 dark:text-gray-100 text-xl leading-normal font-bold",
                    },
                    [_vm._v(_vm._s(_vm.avgTimePerQuestion))]
                  ),
                  _vm._v(" "),
                  _c(
                    "p",
                    {
                      staticClass:
                        "focus:outline-none ltr:ml-2 rtl:mr-2 mb-1 text-sm text-gray-600 dark:text-gray-400",
                      attrs: { tabindex: "0" },
                    },
                    [_vm._v(_vm._s(_vm.__("Question Trap")))]
                  ),
                ]),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex items-center justify-between px-6 py-4 relative shadow",
              },
              [
                _c("div", {
                  staticClass:
                    "absolute w-2 h-4 bg-purple-700 ltr:left-0 rtl:right-0",
                }),
                _vm._v(" "),
                _c(
                  "h3",
                  {
                    staticClass:
                      "focus:outline-none py-6 leading-4 text-gray-800 dark:text-gray-100 font-normal text-base",
                  },
                  [_vm._v(_vm._s(_vm.__("Percentile")))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "flex flex-col items-end" }, [
                  _c(
                    "h2",
                    {
                      staticClass:
                        "focus:outline-none text-purple-700 dark:text-gray-100 text-xl leading-normal font-bold",
                    },
                    [_vm._v(_vm._s(_vm.mockPercentile) + "%")]
                  ),
                  _vm._v(" "),
                  _c(
                    "p",
                    {
                      staticClass:
                        "focus:outline-none ltr:ml-2 rtl:mr-2 mb-1 text-sm text-gray-600 dark:text-gray-400",
                      attrs: { tabindex: "0" },
                    },
                    [_vm._v(_vm._s(_vm.__("Rank")))]
                  ),
                ]),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex items-center justify-between px-6 py-4 relative shadow",
              },
              [
                _c("div", {
                  staticClass:
                    "absolute w-2 h-4 bg-indigo-700 ltr:left-0 rtl:right-0",
                }),
                _vm._v(" "),
                _c(
                  "h3",
                  {
                    staticClass:
                      "focus:outline-none py-6 leading-4 text-gray-800 dark:text-gray-100 font-normal text-base",
                  },
                  [_vm._v(_vm._s(_vm.__("Score (No Negative)")))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "flex flex-col items-end" }, [
                  _c(
                    "h2",
                    {
                      staticClass:
                        "focus:outline-none text-indigo-700 dark:text-gray-100 text-xl leading-normal font-bold",
                    },
                    [_vm._v(_vm._s(_vm.scoreWithoutNegativeMarking))]
                  ),
                  _vm._v(" "),
                  _c(
                    "p",
                    {
                      staticClass:
                        "focus:outline-none ltr:ml-2 rtl:mr-2 mb-1 text-sm text-gray-600 dark:text-gray-400",
                      attrs: { tabindex: "0" },
                    },
                    [
                      _vm._v(
                        _vm._s(_vm.__("Marks")) +
                          " " +
                          _vm._s(_vm.session.results.total_marks)
                      ),
                    ]
                  ),
                ]),
              ]
            ),
          ]
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "grid sm:grid-cols-1 md:grid-cols-3 gap-4 py-8" },
          [
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex flex-col items-center justify-center p-5 relative shadow",
              },
              [
                _c(
                  "h2",
                  {
                    staticClass:
                      "focus:outline-none text-gray-800 text-base leading-normal font-semibold mb-6",
                  },
                  [
                    _vm._v(
                      "\n                    " +
                        _vm._s(_vm.__("Total")) +
                        " " +
                        _vm._s(_vm.session.results.total_questions) +
                        " " +
                        _vm._s(_vm.__("Questions")) +
                        "\n                "
                    ),
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "flex gap-4 sm:justify-center items-center" },
                  [
                    _c(
                      "div",
                      { staticClass: "w-28" },
                      [
                        _c("doughnut-chart", {
                          key: "status",
                          attrs: {
                            id: "status",
                            "chart-data": _vm.statusChartData,
                            "element-text": _vm.totalAnswered,
                          },
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "flex flex-col gap-2 justify-center" },
                      [
                        _c(
                          "div",
                          { staticClass: "flex gap-2 items-center text-xs" },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "w-5 h-5 text-green-400",
                                attrs: {
                                  fill: "none",
                                  stroke: "currentColor",
                                  viewBox: "0 0 24 24",
                                  xmlns: "http://www.w3.org/2000/svg",
                                },
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    "stroke-linecap": "round",
                                    "stroke-linejoin": "round",
                                    "stroke-width": "2",
                                    d: "M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z",
                                  },
                                }),
                              ]
                            ),
                            _vm._v(
                              "\n                            " +
                                _vm._s(
                                  _vm.session.results.correct_answered_questions
                                ) +
                                " " +
                                _vm._s(_vm.__("Correct")) +
                                "\n                        "
                            ),
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "flex gap-2 items-center text-xs" },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "w-5 h-5 text-red-400",
                                attrs: {
                                  fill: "none",
                                  stroke: "currentColor",
                                  viewBox: "0 0 24 24",
                                  xmlns: "http://www.w3.org/2000/svg",
                                },
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    "stroke-linecap": "round",
                                    "stroke-linejoin": "round",
                                    "stroke-width": "2",
                                    d: "M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z",
                                  },
                                }),
                              ]
                            ),
                            _vm._v(
                              "\n                            " +
                                _vm._s(
                                  _vm.session.results.wrong_answered_questions
                                ) +
                                " " +
                                _vm._s(_vm.__("Wrong")) +
                                "\n                        "
                            ),
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "flex gap-2 items-center text-xs" },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "w-5 h-5 text-gray-400",
                                attrs: {
                                  fill: "none",
                                  stroke: "currentColor",
                                  viewBox: "0 0 24 24",
                                  xmlns: "http://www.w3.org/2000/svg",
                                },
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    "stroke-linecap": "round",
                                    "stroke-linejoin": "round",
                                    "stroke-width": "2",
                                    d: "M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z",
                                  },
                                }),
                              ]
                            ),
                            _vm._v(
                              "\n                            " +
                                _vm._s(
                                  _vm.session.results.unanswered_questions
                                ) +
                                " " +
                                _vm._s(_vm.__("Unanswered")) +
                                "\n                        "
                            ),
                          ]
                        ),
                      ]
                    ),
                  ]
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex flex-col items-center justify-center p-5 relative shadow",
              },
              [
                _c(
                  "h2",
                  {
                    staticClass:
                      "focus:outline-none text-gray-800 text-base leading-normal font-semibold mb-6",
                  },
                  [
                    _vm._v(
                      "\n                    " +
                        _vm._s(_vm.__("Total")) +
                        " " +
                        _vm._s(_vm.session.results.total_duration) +
                        " " +
                        _vm._s(_vm.__("Minutes")) +
                        "\n                "
                    ),
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "flex gap-4 sm:justify-center items-center" },
                  [
                    _c(
                      "div",
                      { staticClass: "w-28" },
                      [
                        _c("doughnut-chart", {
                          key: "time_spent",
                          attrs: {
                            id: "time_spent",
                            "chart-data": _vm.timeSpentChartData,
                            "element-text": _vm.totalTimeSpent,
                          },
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "flex flex-col gap-2 justify-center" },
                      [
                        _c(
                          "div",
                          { staticClass: "flex gap-2 items-center text-xs" },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "w-5 h-5 text-green-400",
                                attrs: {
                                  fill: "none",
                                  stroke: "currentColor",
                                  viewBox: "0 0 24 24",
                                  xmlns: "http://www.w3.org/2000/svg",
                                },
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    "stroke-linecap": "round",
                                    "stroke-linejoin": "round",
                                    "stroke-width": "2",
                                    d: "M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z",
                                  },
                                }),
                              ]
                            ),
                            _vm._v(
                              "\n                            " +
                                _vm._s(
                                  _vm.session.results
                                    .time_taken_for_correct_answered
                                    .detailed_readable
                                ) +
                                " " +
                                _vm._s(_vm.__("Correct")) +
                                "\n                        "
                            ),
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "flex gap-2 items-center text-xs" },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "w-5 h-5 text-red-400",
                                attrs: {
                                  fill: "none",
                                  stroke: "currentColor",
                                  viewBox: "0 0 24 24",
                                  xmlns: "http://www.w3.org/2000/svg",
                                },
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    "stroke-linecap": "round",
                                    "stroke-linejoin": "round",
                                    "stroke-width": "2",
                                    d: "M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z",
                                  },
                                }),
                              ]
                            ),
                            _vm._v(
                              "\n                            " +
                                _vm._s(
                                  _vm.session.results
                                    .time_taken_for_wrong_answered
                                    .detailed_readable
                                ) +
                                " " +
                                _vm._s(_vm.__("Wrong")) +
                                "\n                        "
                            ),
                          ]
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "flex gap-2 items-center text-xs" },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "w-5 h-5 text-gray-400",
                                attrs: {
                                  fill: "none",
                                  stroke: "currentColor",
                                  viewBox: "0 0 24 24",
                                  xmlns: "http://www.w3.org/2000/svg",
                                },
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    "stroke-linecap": "round",
                                    "stroke-linejoin": "round",
                                    "stroke-width": "2",
                                    d: "M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z",
                                  },
                                }),
                              ]
                            ),
                            _vm._v(
                              "\n                            " +
                                _vm._s(
                                  _vm.session.results.time_taken_for_other
                                    .detailed_readable
                                ) +
                                " " +
                                _vm._s(_vm.__("Other")) +
                                "\n                        "
                            ),
                          ]
                        ),
                      ]
                    ),
                  ]
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass:
                  "bg-white dark:bg-gray-800 rounded flex flex-col items-center justify-center p-5 relative shadow",
              },
              [
                _c(
                  "h2",
                  {
                    staticClass:
                      "focus:outline-none text-gray-800 text-base leading-normal font-semibold mb-6",
                  },
                  [
                    _vm._v(
                      "\n                    " +
                        _vm._s(_vm.__("Total Scored Marks")) +
                        "\n                "
                    ),
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass:
                      "w-full flex gap-4 sm:justify-center items-center",
                  },
                  [
                    _c("table", { staticClass: "w-full table-auto" }, [
                      _c("tbody", [
                        _c("tr", [
                          _c(
                            "td",
                            {
                              staticClass:
                                "border border-emerald-500 px-4 py-2 text-emerald-600 text-sm",
                            },
                            [_vm._v(_vm._s(_vm.__("Marks Earned")))]
                          ),
                          _vm._v(" "),
                          _c(
                            "td",
                            {
                              staticClass:
                                "border border-emerald-500 px-4 py-2 text-emerald-600 font-medium text-sm text-right",
                            },
                            [_vm._v(_vm._s(_vm.session.results.marks_earned))]
                          ),
                        ]),
                        _vm._v(" "),
                        _c("tr", { staticClass: "bg-emerald-200" }, [
                          _c(
                            "td",
                            {
                              staticClass:
                                "border border-emerald-500 px-4 py-2 text-emerald-600 text-sm",
                            },
                            [_vm._v(_vm._s(_vm.__("Negative Marks")))]
                          ),
                          _vm._v(" "),
                          _c(
                            "td",
                            {
                              staticClass:
                                "border border-emerald-500 px-4 py-2 text-emerald-600 font-medium text-sm text-right",
                            },
                            [
                              _vm._v(
                                "-" + _vm._s(_vm.session.results.marks_deducted)
                              ),
                            ]
                          ),
                        ]),
                        _vm._v(" "),
                        _c("tr", [
                          _c(
                            "td",
                            {
                              staticClass:
                                "border border-emerald-500 px-4 py-2 text-emerald-600 text-sm",
                            },
                            [_vm._v(_vm._s(_vm.__("Total Marks")))]
                          ),
                          _vm._v(" "),
                          _c(
                            "td",
                            {
                              staticClass:
                                "border border-emerald-500 px-4 py-2 text-emerald-600 font-medium text-sm text-right",
                            },
                            [_vm._v(_vm._s(_vm.session.results.score))]
                          ),
                        ]),
                      ]),
                    ]),
                  ]
                ),
              ]
            ),
          ]
        ),
      ]),
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/Pages/User/QuizResults.vue":
/*!*************************************************!*\
  !*** ./resources/js/Pages/User/QuizResults.vue ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _QuizResults_vue_vue_type_template_id_5da5e2b4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./QuizResults.vue?vue&type=template&id=5da5e2b4& */ "./resources/js/Pages/User/QuizResults.vue?vue&type=template&id=5da5e2b4&");
/* harmony import */ var _QuizResults_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./QuizResults.vue?vue&type=script&lang=js& */ "./resources/js/Pages/User/QuizResults.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _QuizResults_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _QuizResults_vue_vue_type_template_id_5da5e2b4___WEBPACK_IMPORTED_MODULE_0__.render,
  _QuizResults_vue_vue_type_template_id_5da5e2b4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/User/QuizResults.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/User/QuizResults.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/Pages/User/QuizResults.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizResults_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./QuizResults.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/User/QuizResults.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizResults_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Pages/User/QuizResults.vue?vue&type=template&id=5da5e2b4&":
/*!********************************************************************************!*\
  !*** ./resources/js/Pages/User/QuizResults.vue?vue&type=template&id=5da5e2b4& ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizResults_vue_vue_type_template_id_5da5e2b4___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   staticRenderFns: () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizResults_vue_vue_type_template_id_5da5e2b4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizResults_vue_vue_type_template_id_5da5e2b4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./QuizResults.vue?vue&type=template&id=5da5e2b4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/User/QuizResults.vue?vue&type=template&id=5da5e2b4&");


/***/ })

}]);