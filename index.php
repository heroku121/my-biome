 <?php
echo '
<!DOCTYPE html>
<html lang="en" class="clickfunnels-com wf-proximanova-i4-active wf-proximanova-i7-active wf-proximanova-n4-active wf-proximanova-n7-active wf-active wf-proximanova-i3-active wf-proximanova-n3-active wf-proximanovasoft-n4-active wf-proximanovasoft-n7-active wf-proximasoft-n4-active wf-proximasoft-i4-active wf-proximasoft-i6-active wf-proximasoft-n6-active wf-proximasoft-i7-active wf-proximasoft-n7-active gr__app_clickfunnels_com gr__reachathletics-app_clickfunnels_com avcHn2VQJenBvoR5hilPG js-focus-visible bgCover "
    style=\'background-color: rgb(255, 255, 255); overflow: initial; background-image: url("//lenashealthylifestyle.com/hosted/images/5e/0a56c5425e4628820aed98ad43ee88/Depositphotos_387740610_S.jpg"); font-family: "Open Sans", Helvetica, sans-serif !important;\'>

<head data-next-url="" data-this-url="https://lenashealthylifestyle.com/10-second">
    <meta charset="UTF-8">
    <script>
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "NRJS-fc902efb332119fff33",
            "applicationID": "367981416",
            "transactionName": "dFZWTENWVQ9QExdNRlJLSFlWXEpMRQBfXUYYSU1aXVBKC1AF",
            "queueTime": 0,
            "applicationTime": 464,
            "agent": ""
        }
    </script>
    <script>
        (window.NREUM || (NREUM = {})).init = {
            ajax: {
                deny_list: ["bam.nr-data.net"]
            }
        };
        (window.NREUM || (NREUM = {})).loader_config = {
            licenseKey: "NRJS-fc902efb332119fff33",
            applicationID: "367981416"
        };;
        (() => {
            "use strict";
            var e, t, n = {
                    8768: (e, t, n) => {
                        n.d(t, {
                            T: () => r,
                            p: () => i
                        });
                        const r = /(iPad|iPhone|iPod)/g.test(navigator.userAgent),
                            i = r && Boolean("undefined" == typeof SharedWorker)
                    },
                    2919: (e, t, n) => {
                        n.d(t, {
                            P_: () => h,
                            Mt: () => p,
                            C5: () => c,
                            DL: () => w,
                            OP: () => N,
                            lF: () => C,
                            Yu: () => A,
                            Dg: () => v,
                            CX: () => u,
                            GE: () => y,
                            sU: () => I
                        });
                        var r = {};
                        n.r(r), n.d(r, {
                            agent: () => x,
                            match: () => k,
                            version: () => _
                        });
                        var i = n(6797),
                            o = n(4286);
                        const a = {
                                beacon: i.ce.beacon,
                                errorBeacon: i.ce.errorBeacon,
                                licenseKey: void 0,
                                applicationID: void 0,
                                sa: void 0,
                                queueTime: void 0,
                                applicationTime: void 0,
                                ttGuid: void 0,
                                user: void 0,
                                account: void 0,
                                product: void 0,
                                extra: void 0,
                                jsAttributes: {},
                                userAttributes: void 0,
                                atts: void 0,
                                transactionName: void 0,
                                tNamePlain: void 0
                            },
                            s = {};

                        function c(e) {
                            if (!e) throw new Error("All info objects require an agent identifier!");
                            if (!s[e]) throw new Error("Info for ".concat(e, " was never set"));
                            return s[e]
                        }

                        function u(e, t) {
                            if (!e) throw new Error("All info objects require an agent identifier!");
                            s[e] = new o.I(t, a), (0, i.Qy)(e, s[e], "info")
                        }
                        var d = n(2797),
                            f = n(2374);
                        const l = {
                                allow_bfcache: !0,
                                privacy: {
                                    cookies_enabled: !0
                                },
                                ajax: {
                                    deny_list: void 0,
                                    enabled: !0,
                                    harvestTimeSeconds: 10
                                },
                                distributed_tracing: {
                                    enabled: void 0,
                                    exclude_newrelic_header: void 0,
                                    cors_use_newrelic_header: void 0,
                                    cors_use_tracecontext_headers: void 0,
                                    allowed_origins: void 0
                                },
                                session: {
                                    domain: void 0,
                                    expiresMs: d.oD,
                                    inactiveMs: d.Hb
                                },
                                ssl: void 0,
                                obfuscate: void 0,
                                jserrors: {
                                    enabled: !0,
                                    harvestTimeSeconds: 10
                                },
                                metrics: {
                                    enabled: !0
                                },
                                page_action: {
                                    enabled: !0,
                                    harvestTimeSeconds: 30
                                },
                                page_view_event: {
                                    enabled: !0
                                },
                                page_view_timing: {
                                    enabled: !0,
                                    harvestTimeSeconds: 30,
                                    long_task: !1
                                },
                                session_trace: {
                                    enabled: !0,
                                    harvestTimeSeconds: 10
                                },
                                spa: {
                                    enabled: !0,
                                    harvestTimeSeconds: 10
                                }
                            },
                            g = {};

                        function h(e) {
                            if (!e) throw new Error("All configuration objects require an agent identifier!");
                            if (!g[e]) throw new Error("Configuration for ".concat(e, " was never set"));
                            return g[e]
                        }

                        function v(e, t) {
                            if (!e) throw new Error("All configuration objects require an agent identifier!");
                            g[e] = new o.I(t, l), (0, i.Qy)(e, g[e], "config")
                        }

                        function p(e, t) {
                            if (!e) throw new Error("All configuration objects require an agent identifier!");
                            var n = h(e);
                            if (n) {
                                for (var r = t.split("."), i = 0; i < r.length - 1; i++)
                                    if ("object" != typeof(n = n[r[i]])) return;
                                n = n[r[r.length - 1]]
                            }
                            return n
                        }
                        const m = {
                                accountID: void 0,
                                trustKey: void 0,
                                agentID: void 0,
                                licenseKey: void 0,
                                applicationID: void 0,
                                xpid: void 0
                            },
                            b = {};

                        function w(e) {
                            if (!e) throw new Error("All loader-config objects require an agent identifier!");
                            if (!b[e]) throw new Error("LoaderConfig for ".concat(e, " was never set"));
                            return b[e]
                        }

                        function y(e, t) {
                            if (!e) throw new Error("All loader-config objects require an agent identifier!");
                            b[e] = new o.I(t, m), (0, i.Qy)(e, b[e], "loader_config")
                        }
                        const A = (0, i.mF)().o;
                        var x = null,
                            _ = null;
                        const j = /Version\/(\S+)\s+Safari/;
                        if (navigator.userAgent) {
                            var D = navigator.userAgent,
                                E = D.match(j);
                            E && -1 === D.indexOf("Chrome") && -1 === D.indexOf("Chromium") && (x = "Safari", _ = E[1])
                        }

                        function k(e, t) {
                            if (!x) return !1;
                            if (e !== x) return !1;
                            if (!t) return !0;
                            if (!_) return !1;
                            for (var n = _.split("."), r = t.split("."), i = 0; i < r.length; i++)
                                if (r[i] !== n[i]) return !1;
                            return !0
                        }
                        var S = n(1651);
                        const T = {
                                buildEnv: S.Re,
                                bytesSent: {},
                                queryBytesSent: {},
                                customTransaction: void 0,
                                disabled: !1,
                                distMethod: S.gF,
                                isolatedBacklog: !1,
                                loaderType: void 0,
                                maxBytes: 3e4,
                                offset: Math.floor(f._A ? .performance ? .timeOrigin || f._A ? .performance ? .timing ? .navigationStart || Date.now()),
                                onerror: void 0,
                                origin: "" + f._A.location,
                                ptid: void 0,
                                releaseIds: {},
                                session: void 0,
                                xhrWrappable: "function" == typeof f._A.XMLHttpRequest ? .prototype ? .addEventListener,
                                userAgent: r,
                                version: S.q4
                            },
                            P = {};

                        function N(e) {
                            if (!e) throw new Error("All runtime objects require an agent identifier!");
                            if (!P[e]) throw new Error("Runtime for ".concat(e, " was never set"));
                            return P[e]
                        }

                        function I(e, t) {
                            if (!e) throw new Error("All runtime objects require an agent identifier!");
                            P[e] = new o.I(t, T), (0, i.Qy)(e, P[e], "runtime")
                        }

                        function C(e) {
                            return function(e) {
                                try {
                                    const t = c(e);
                                    return !!t.licenseKey && !!t.errorBeacon && !!t.applicationID
                                } catch (e) {
                                    return !1
                                }
                            }(e)
                        }
                    },
                    4286: (e, t, n) => {
                        n.d(t, {
                            I: () => o
                        });
                        var r = n(909),
                            i = n(8610);
                        class o {
                            constructor(e, t) {
                                Object.assign(this, function(e, t) {
                                    const n = {};
                                    try {
                                        return e && "object" == typeof e ? t && "object" == typeof t ? (Object.assign(n, t), Object.entries(e).forEach((e => {
                                            let [o, a] = e;
                                            if (!Object.keys(t).includes(o)) return;
                                            const s = (0, r.q)(o);
                                            s.length && a && "object" == typeof a && s.forEach((e => {
                                                e in a && ((0, i.Z)(\'"\'.concat(e, \'" is a protected attribute and can not be changed in feature \').concat(o, ".  It will have no effect.")), delete a[e])
                                            })), n[o] = a
                                        })), n) : (0, i.Z)("Setting a Configurable requires a model to set its initial properties") : (0, i.Z)("New setting a Configurable requires an object as input")
                                    } catch (e) {
                                        (0, i.Z)("An error occured while setting a Configurable", e)
                                    }
                                }(e, t))
                            }
                        }
                    },
                    1651: (e, t, n) => {
                        n.d(t, {
                            Re: () => i,
                            gF: () => o,
                            q4: () => r
                        });
                        const r = "1.232.0",
                            i = "PROD",
                            o = "CDN"
                    },
                    9557: (e, t, n) => {
                        n.d(t, {
                            w: () => o
                        });
                        var r = n(8610);
                        const i = {
                            agentIdentifier: "",
                            ee: void 0
                        };
                        class o {
                            constructor(e) {
                                try {
                                    if ("object" != typeof e) return (0, r.Z)("shared context requires an object as input");
                                    this.sharedContext = {}, Object.assign(this.sharedContext, i), Object.entries(e).forEach((e => {
                                        let [t, n] = e;
                                        Object.keys(i).includes(t) && (this.sharedContext[t] = n)
                                    }))
                                } catch (e) {
                                    (0, r.Z)("An error occured while setting SharedContext", e)
                                }
                            }
                        }
                    },
                    4329: (e, t, n) => {
                        n.d(t, {
                            L: () => d,
                            R: () => c
                        });
                        var r = n(3752),
                            i = n(7022),
                            o = n(4045),
                            a = n(2325);
                        const s = {};

                        function c(e, t) {
                            const n = {
                                staged: !1,
                                priority: a.p[t] || 0
                            };
                            u(e), s[e].get(t) || s[e].set(t, n)
                        }

                        function u(e) {
                            e && (s[e] || (s[e] = new Map))
                        }

                        function d() {
                            let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "feature";
                            if (u(e), !e || !s[e].get(t)) return a(t);
                            s[e].get(t).staged = !0;
                            const n = Array.from(s[e]);

                            function a(t) {
                                const n = e ? r.ee.get(e) : r.ee,
                                    a = o.X.handlers;
                                if (n.backlog && a) {
                                    var s = n.backlog[t],
                                        c = a[t];
                                    if (c) {
                                        for (var u = 0; s && u < s.length; ++u) f(s[u], c);
                                        (0, i.D)(c, (function(e, t) {
                                            (0, i.D)(t, (function(t, n) {
                                                n[0].on(e, n[1])
                                            }))
                                        }))
                                    }
                                    delete a[t], n.backlog[t] = null, n.emit("drain-" + t, [])
                                }
                            }
                            n.every((e => {
                                let [t, n] = e;
                                return n.staged
                            })) && (n.sort(((e, t) => e[1].priority - t[1].priority)), n.forEach((e => {
                                let [t] = e;
                                a(t)
                            })))
                        }

                        function f(e, t) {
                            var n = e[1];
                            (0, i.D)(t[n], (function(t, n) {
                                var r = e[0];
                                if (n[0] === r) {
                                    var i = n[1],
                                        o = e[3],
                                        a = e[2];
                                    i.apply(o, a)
                                }
                            }))
                        }
                    },
                    3752: (e, t, n) => {
                        n.d(t, {
                            ee: () => u
                        });
                        var r = n(6797),
                            i = n(3916),
                            o = n(7022),
                            a = n(2919),
                            s = "nr@context";
                        let c = (0, r.fP)();
                        var u;

                        function d() {}

                        function f() {
                            return new d
                        }

                        function l() {
                            u.aborted = !0, u.backlog = {}
                        }
                        c.ee ? u = c.ee : (u = function e(t, n) {
                            var r = {},
                                c = {},
                                g = {},
                                h = !1;
                            try {
                                h = 16 === n.length && (0, a.OP)(n).isolatedBacklog
                            } catch (e) {}
                            var v = {
                                on: b,
                                addEventListener: b,
                                removeEventListener: w,
                                emit: m,
                                get: A,
                                listeners: y,
                                context: p,
                                buffer: x,
                                abort: l,
                                aborted: !1,
                                isBuffering: _,
                                debugId: n,
                                backlog: h ? {} : t && "object" == typeof t.backlog ? t.backlog : {}
                            };
                            return v;

                            function p(e) {
                                return e && e instanceof d ? e : e ? (0, i.X)(e, s, f) : f()
                            }

                            function m(e, n, r, i, o) {
                                if (!1 !== o && (o = !0), !u.aborted || i) {
                                    t && o && t.emit(e, n, r);
                                    for (var a = p(r), s = y(e), d = s.length, f = 0; f < d; f++) s[f].apply(a, n);
                                    var l = j()[c[e]];
                                    return l && l.push([v, e, n, a]), a
                                }
                            }

                            function b(e, t) {
                                r[e] = y(e).concat(t)
                            }

                            function w(e, t) {
                                var n = r[e];
                                if (n)
                                    for (var i = 0; i < n.length; i++) n[i] === t && n.splice(i, 1)
                            }

                            function y(e) {
                                return r[e] || []
                            }

                            function A(t) {
                                return g[t] = g[t] || e(v, t)
                            }

                            function x(e, t) {
                                var n = j();
                                v.aborted || (0, o.D)(e, (function(e, r) {
                                    t = t || "feature", c[r] = t, t in n || (n[t] = [])
                                }))
                            }

                            function _(e) {
                                return !!j()[c[e]]
                            }

                            function j() {
                                return v.backlog
                            }
                        }(void 0, "globalEE"), c.ee = u)
                    },
                    9252: (e, t, n) => {
                        n.d(t, {
                            E: () => r,
                            p: () => i
                        });
                        var r = n(3752).ee.get("handle");

                        function i(e, t, n, i, o) {
                            o ? (o.buffer([e], i), o.emit(e, t, n)) : (r.buffer([e], i), r.emit(e, t, n))
                        }
                    },
                    4045: (e, t, n) => {
                        n.d(t, {
                            X: () => o
                        });
                        var r = n(9252);
                        o.on = a;
                        var i = o.handlers = {};

                        function o(e, t, n, o) {
                            a(o || r.E, i, e, t, n)
                        }

                        function a(e, t, n, i, o) {
                            o || (o = "feature"), e || (e = r.E);
                            var a = t[o] = t[o] || {};
                            (a[n] = a[n] || []).push([e, i])
                        }
                    },
                    8544: (e, t, n) => {
                        n.d(t, {
                            bP: () => s,
                            iz: () => c,
                            m$: () => a
                        });
                        var r = n(2374);
                        let i = !1,
                            o = !1;
                        try {
                            const e = {
                                get passive() {
                                    return i = !0, !1
                                },
                                get signal() {
                                    return o = !0, !1
                                }
                            };
                            r._A.addEventListener("test", null, e), r._A.removeEventListener("test", null, e)
                        } catch (e) {}

                        function a(e, t) {
                            return i || o ? {
                                capture: !!e,
                                passive: i,
                                signal: t
                            } : !!e
                        }

                        function s(e, t) {
                            let n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                                r = arguments.length > 3 ? arguments[3] : void 0;
                            window.addEventListener(e, t, a(n, r))
                        }

                        function c(e, t) {
                            let n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                                r = arguments.length > 3 ? arguments[3] : void 0;
                            document.addEventListener(e, t, a(n, r))
                        }
                    },
                    5526: (e, t, n) => {
                        n.d(t, {
                            Rl: () => a,
                            ky: () => s
                        });
                        var r = n(2374);
                        const i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";

                        function o(e, t) {
                            return e ? 15 & e[t] : 16 * Math.random() | 0
                        }

                        function a() {
                            const e = r._A ? .crypto || r._A ? .msCrypto;
                            let t, n = 0;
                            return e && e.getRandomValues && (t = e.getRandomValues(new Uint8Array(31))), i.split("").map((e => "x" === e ? o(t, ++n).toString(16) : "y" === e ? (3 & o() | 8).toString(16) : e)).join("")
                        }

                        function s(e) {
                            const t = r._A ? .crypto || r._A ? .msCrypto;
                            let n, i = 0;
                            t && t.getRandomValues && (n = t.getRandomValues(new Uint8Array(31)));
                            const a = [];
                            for (var s = 0; s < e; s++) a.push(o(n, ++i).toString(16));
                            return a.join("")
                        }
                    },
                    2797: (e, t, n) => {
                        n.d(t, {
                            Bq: () => r,
                            Hb: () => o,
                            oD: () => i
                        });
                        const r = "NRBA",
                            i = 144e5,
                            o = 18e5
                    },
                    2053: (e, t, n) => {
                        function r() {
                            return Math.round(performance.now())
                        }
                        n.d(t, {
                            z: () => r
                        })
                    },
                    8610: (e, t, n) => {
                        function r(e, t) {
                            "function" == typeof console.warn && (console.warn("New Relic: ".concat(e)), t && console.warn(t))
                        }
                        n.d(t, {
                            Z: () => r
                        })
                    },
                    3916: (e, t, n) => {
                        n.d(t, {
                            X: () => i
                        });
                        var r = Object.prototype.hasOwnProperty;

                        function i(e, t, n) {
                            if (r.call(e, t)) return e[t];
                            var i = n();
                            if (Object.defineProperty && Object.keys) try {
                                return Object.defineProperty(e, t, {
                                    value: i,
                                    writable: !0,
                                    enumerable: !1
                                }), i
                            } catch (e) {}
                            return e[t] = i, i
                        }
                    },
                    2374: (e, t, n) => {
                        n.d(t, {
                            _A: () => o,
                            il: () => r,
                            v6: () => i
                        });
                        const r = Boolean("undefined" != typeof window && window.document),
                            i = Boolean("undefined" != typeof WorkerGlobalScope && self.navigator instanceof WorkerNavigator);
                        let o = (() => {
                            if (r) return window;
                            if (i) {
                                if ("undefined" != typeof globalThis && globalThis instanceof WorkerGlobalScope) return globalThis;
                                if (self instanceof WorkerGlobalScope) return self
                            }
                            throw new Error(\'New Relic browser agent shutting down due to error: Unable to locate global scope. This is possibly due to code redefining browser global variables like "self" and "window".\')
                        })()
                    },
                    7022: (e, t, n) => {
                        n.d(t, {
                            D: () => r
                        });
                        const r = (e, t) => Object.entries(e || {}).map((e => {
                            let [n, r] = e;
                            return t(n, r)
                        }))
                    },
                    2438: (e, t, n) => {
                        n.d(t, {
                            P: () => o
                        });
                        var r = n(3752);
                        const i = () => {
                            const e = new WeakSet;
                            return (t, n) => {
                                if ("object" == typeof n && null !== n) {
                                    if (e.has(n)) return;
                                    e.add(n)
                                }
                                return n
                            }
                        };

                        function o(e) {
                            try {
                                return JSON.stringify(e, i())
                            } catch (e) {
                                try {
                                    r.ee.emit("internal-error", [e])
                                } catch (e) {}
                            }
                        }
                    },
                    2650: (e, t, n) => {
                        n.d(t, {
                            K: () => a,
                            b: () => o
                        });
                        var r = n(8544);

                        function i() {
                            return "undefined" == typeof document || "complete" === document.readyState
                        }

                        function o(e, t) {
                            if (i()) return e();
                            (0, r.bP)("load", e, t)
                        }

                        function a(e) {
                            if (i()) return e();
                            (0, r.iz)("DOMContentLoaded", e)
                        }
                    },
                    6797: (e, t, n) => {
                        n.d(t, {
                            EZ: () => u,
                            Qy: () => c,
                            ce: () => o,
                            fP: () => a,
                            gG: () => d,
                            mF: () => s
                        });
                        var r = n(2053),
                            i = n(2374);
                        const o = {
                            beacon: "bam.nr-data.net",
                            errorBeacon: "bam.nr-data.net"
                        };

                        function a() {
                            return i._A.NREUM || (i._A.NREUM = {}), void 0 === i._A.newrelic && (i._A.newrelic = i._A.NREUM), i._A.NREUM
                        }

                        function s() {
                            let e = a();
                            return e.o || (e.o = {
                                ST: i._A.setTimeout,
                                SI: i._A.setImmediate,
                                CT: i._A.clearTimeout,
                                XHR: i._A.XMLHttpRequest,
                                REQ: i._A.Request,
                                EV: i._A.Event,
                                PR: i._A.Promise,
                                MO: i._A.MutationObserver,
                                FETCH: i._A.fetch
                            }), e
                        }

                        function c(e, t, n) {
                            let i = a();
                            const o = i.initializedAgents || {},
                                s = o[e] || {};
                            return Object.keys(s).length || (s.initializedAt = {
                                ms: (0, r.z)(),
                                date: new Date
                            }), i.initializedAgents = { ...o,
                                [e]: { ...s,
                                    [n]: t
                                }
                            }, i
                        }

                        function u(e, t) {
                            a()[e] = t
                        }

                        function d() {
                            return function() {
                                    let e = a();
                                    const t = e.info || {};
                                    e.info = {
                                        beacon: o.beacon,
                                        errorBeacon: o.errorBeacon,
                                        ...t
                                    }
                                }(),
                                function() {
                                    let e = a();
                                    const t = e.init || {};
                                    e.init = { ...t
                                    }
                                }(), s(),
                                function() {
                                    let e = a();
                                    const t = e.loader_config || {};
                                    e.loader_config = { ...t
                                    }
                                }(), a()
                        }
                    },
                    6998: (e, t, n) => {
                        n.d(t, {
                            N: () => i
                        });
                        var r = n(8544);

                        function i(e) {
                            let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                                n = arguments.length > 2 ? arguments[2] : void 0,
                                i = arguments.length > 3 ? arguments[3] : void 0;
                            return void(0, r.iz)("visibilitychange", (function() {
                                if (t) return void("hidden" == document.visibilityState && e());
                                e(document.visibilityState)
                            }), n, i)
                        }
                    },
                    6034: (e, t, n) => {
                        n.d(t, {
                            gF: () => o,
                            mY: () => i,
                            t9: () => r,
                            vz: () => s,
                            xS: () => a
                        });
                        const r = n(2325).D.metrics,
                            i = "sm",
                            o = "cm",
                            a = "storeSupportabilityMetrics",
                            s = "storeEventMetrics"
                    },
                    2484: (e, t, n) => {
                        n.d(t, {
                            Dz: () => i,
                            OJ: () => a,
                            qw: () => o,
                            t9: () => r
                        });
                        const r = n(2325).D.pageViewEvent,
                            i = "firstbyte",
                            o = "domcontent",
                            a = "windowload"
                    },
                    6382: (e, t, n) => {
                        n.d(t, {
                            t: () => r
                        });
                        const r = n(2325).D.pageViewTiming
                    },
                    1509: (e, t, n) => {
                        n.d(t, {
                            W: () => s
                        });
                        var r = n(2919),
                            i = n(3752),
                            o = n(2384),
                            a = n(6797);
                        class s {
                            constructor(e, t, n) {
                                this.agentIdentifier = e, this.aggregator = t, this.ee = i.ee.get(e, (0, r.OP)(this.agentIdentifier).isolatedBacklog), this.featureName = n, this.blocked = !1, this.checkConfiguration()
                            }
                            checkConfiguration() {
                                if (!(0, r.lF)(this.agentIdentifier)) {
                                    let e = { ...(0, a.gG)().info ? .jsAttributes
                                    };
                                    try {
                                        e = { ...e,
                                            ...(0, r.C5)(this.agentIdentifier) ? .jsAttributes
                                        }
                                    } catch (e) {}(0, o.j)(this.agentIdentifier, { ...(0, a.gG)(),
                                        info: { ...(0, a.gG)().info,
                                            jsAttributes: e
                                        }
                                    })
                                }
                            }
                        }
                    },
                    2384: (e, t, n) => {
                        n.d(t, {
                            j: () => b
                        });
                        var r = n(2325),
                            i = n(2919),
                            o = n(9252),
                            a = n(3752),
                            s = n(2053),
                            c = n(4329),
                            u = n(2650),
                            d = n(2374),
                            f = n(8610),
                            l = n(6034),
                            g = n(6797);

                        function h() {
                            const e = (0, g.gG)();
                            ["setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease", "addPageAction", "setCurrentRouteName", "setPageViewName", "setCustomAttribute", "interaction", "noticeError", "setUserId"].forEach((t => {
                                e[t] = function() {
                                    for (var n = arguments.length, r = new Array(n), i = 0; i < n; i++) r[i] = arguments[i];
                                    return function(t) {
                                        for (var n = arguments.length, r = new Array(n > 1 ? n - 1 : 0), i = 1; i < n; i++) r[i - 1] = arguments[i];
                                        let o = [];
                                        return Object.values(e.initializedAgents).forEach((e => {
                                            e.exposed && e.api[t] && o.push(e.api[t](...r))
                                        })), o.length > 1 ? o : o[0]
                                    }(t, ...r)
                                }
                            }))
                        }
                        var v = n(7022);
                        const p = {
                            stn: [r.D.sessionTrace],
                            err: [r.D.jserrors, r.D.metrics],
                            ins: [r.D.pageAction],
                            spa: [r.D.spa]
                        };
                        const m = {};

                        function b(e) {
                            let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                                b = arguments.length > 2 ? arguments[2] : void 0,
                                w = arguments.length > 3 ? arguments[3] : void 0,
                                {
                                    init: y,
                                    info: A,
                                    loader_config: x,
                                    runtime: _ = {
                                        loaderType: b
                                    },
                                    exposed: j = !0
                                } = t;
                            const D = (0, g.gG)();
                            A || (y = D.init, A = D.info, x = D.loader_config), A.jsAttributes ? ? = {}, d.v6 && (A.jsAttributes.isWorker = !0), (0, i.CX)(e, A), (0, i.Dg)(e, y || {}), (0, i.GE)(e, x || {}), (0, i.sU)(e, _), h();
                            const E = function(e, t) {
                                t || (0, c.R)(e, "api");
                                const g = {};
                                var h = a.ee.get(e),
                                    v = h.get("tracer"),
                                    p = "api-",
                                    m = p + "ixn-";

                                function b(t, n, r, o) {
                                    const a = (0, i.C5)(e);
                                    return null === n ? delete a.jsAttributes[t] : (0, i.CX)(e, { ...a,
                                        jsAttributes: { ...a.jsAttributes,
                                            [t]: n
                                        }
                                    }), A(p, r, !0, o || null === n ? "session" : void 0)(t, n)
                                }

                                function w() {}["setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"].forEach((e => g[e] = A(p, e, !0, "api"))), g.addPageAction = A(p, "addPageAction", !0, r.D.pageAction), g.setCurrentRouteName = A(p, "routeName", !0, r.D.spa), g.setPageViewName = function(t, n) {
                                    if ("string" == typeof t) return "/" !== t.charAt(0) && (t = "/" + t), (0, i.OP)(e).customTransaction = (n || "http://custom.transaction") + t, A(p, "setPageViewName", !0)()
                                }, g.setCustomAttribute = function(e, t) {
                                    let n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                                    if ("string" == typeof e) {
                                        if (["string", "number"].includes(typeof t) || null === t) return b(e, t, "setCustomAttribute", n);
                                        (0, f.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string or number type, but a type of <".concat(typeof t, "> was provided."))
                                    } else(0, f.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e, "> was provided."))
                                }, g.setUserId = function(e) {
                                    if ("string" == typeof e || null === e) return b("enduser.id", e, "setUserId", !0);
                                    (0, f.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e, "> was provided."))
                                }, g.interaction = function() {
                                    return (new w).get()
                                };
                                var y = w.prototype = {
                                    createTracer: function(e, t) {
                                        var n = {},
                                            i = this,
                                            a = "function" == typeof t;
                                        return (0, o.p)(m + "tracer", [(0, s.z)(), e, n], i, r.D.spa, h),
                                            function() {
                                                if (v.emit((a ? "" : "no-") + "fn-start", [(0, s.z)(), i, a], n), a) try {
                                                    return t.apply(this, arguments)
                                                } catch (e) {
                                                    throw v.emit("fn-err", [arguments, this, "string" == typeof e ? new Error(e) : e], n), e
                                                } finally {
                                                    v.emit("fn-end", [(0, s.z)()], n)
                                                }
                                            }
                                    }
                                };

                                function A(e, t, n, i) {
                                    return function() {
                                        return (0, o.p)(l.xS, ["API/" + t + "/called"], void 0, r.D.metrics, h), i && (0, o.p)(e + t, [(0, s.z)(), ...arguments], n ? null : this, i, h), n ? void 0 : this
                                    }
                                }

                                function x() {
                                    n.e(439).then(n.bind(n, 5692)).then((t => {
                                        let {
                                            setAPI: n
                                        } = t;
                                        n(e), (0, c.L)(e, "api")
                                    })).catch((() => (0, f.Z)("Downloading runtime APIs failed...")))
                                }
                                return ["actionText", "setName", "setAttribute", "save", "ignore", "onEnd", "getContext", "end", "get"].forEach((e => {
                                    y[e] = A(m, e, void 0, r.D.spa)
                                })), g.noticeError = function(e, t) {
                                    "string" == typeof e && (e = new Error(e)), (0, o.p)(l.xS, ["API/noticeError/called"], void 0, r.D.metrics, h), (0, o.p)("err", [e, (0, s.z)(), !1, t], void 0, r.D.jserrors, h)
                                }, d.v6 ? x() : (0, u.b)((() => x()), !0), g
                            }(e, w);
                            return (0, g.Qy)(e, E, "api"), (0, g.Qy)(e, j, "exposed"), (0, g.EZ)("activatedFeatures", m), (0, g.EZ)("setToken", (t => function(e, t) {
                                var n = a.ee.get(t);
                                e && "object" == typeof e && ((0, v.D)(e, (function(e, t) {
                                    if (!t) return (p[e] || []).forEach((t => {
                                        (0, o.p)("block-" + e, [], void 0, t, n)
                                    }));
                                    m[e] || ((0, o.p)("feat-" + e, [], void 0, p[e], n), m[e] = !0)
                                })), (0, c.L)(t, r.D.pageViewEvent))
                            }(t, e))), E
                        }
                    },
                    909: (e, t, n) => {
                        n.d(t, {
                            Z: () => i,
                            q: () => o
                        });
                        var r = n(2325);

                        function i(e) {
                            switch (e) {
                                case r.D.ajax:
                                    return [r.D.jserrors];
                                case r.D.sessionTrace:
                                    return [r.D.ajax, r.D.pageViewEvent];
                                case r.D.pageViewTiming:
                                    return [r.D.pageViewEvent];
                                default:
                                    return []
                            }
                        }

                        function o(e) {
                            return e === r.D.jserrors ? [] : ["auto"]
                        }
                    },
                    2325: (e, t, n) => {
                        n.d(t, {
                            D: () => r,
                            p: () => i
                        });
                        const r = {
                                ajax: "ajax",
                                jserrors: "jserrors",
                                metrics: "metrics",
                                pageAction: "page_action",
                                pageViewEvent: "page_view_event",
                                pageViewTiming: "page_view_timing",
                                sessionTrace: "session_trace",
                                spa: "spa"
                            },
                            i = {
                                [r.pageViewEvent]: 1,
                                [r.pageViewTiming]: 2,
                                [r.metrics]: 3,
                                [r.jserrors]: 4,
                                [r.ajax]: 5,
                                [r.sessionTrace]: 6,
                                [r.pageAction]: 7,
                                [r.spa]: 8
                            }
                    }
                },
                r = {};

            function i(e) {
                var t = r[e];
                if (void 0 !== t) return t.exports;
                var o = r[e] = {
                    exports: {}
                };
                return n[e](o, o.exports, i), o.exports
            }
            i.m = n, i.n = e => {
                var t = e && e.__esModule ? () => e.default : () => e;
                return i.d(t, {
                    a: t
                }), t
            }, i.d = (e, t) => {
                for (var n in t) i.o(t, n) && !i.o(e, n) && Object.defineProperty(e, n, {
                    enumerable: !0,
                    get: t[n]
                })
            }, i.f = {}, i.e = e => Promise.all(Object.keys(i.f).reduce(((t, n) => (i.f[n](e, t), t)), [])), i.u = e => (({
                78: "page_action-aggregate",
                147: "metrics-aggregate",
                193: "session_trace-aggregate",
                242: "session-manager",
                317: "jserrors-aggregate",
                348: "page_view_timing-aggregate",
                439: "async-api",
                729: "lazy-loader",
                786: "page_view_event-aggregate",
                873: "spa-aggregate",
                898: "ajax-aggregate"
            }[e] || e) + "." + {
                78: "64dc4751",
                147: "c2ad263a",
                193: "c0ef217a",
                242: "2a8d47d1",
                317: "017d6ea4",
                348: "ddd91465",
                439: "ad3273bd",
                729: "c8cd494b",
                786: "5a238c1f",
                873: "342172b1",
                875: "2c240adb",
                898: "666f66ea"
            }[e] + "-1.232.0.min.js"), i.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), e = {}, t = "NRBA:", i.l = (n, r, o, a) => {
                if (e[n]) e[n].push(r);
                else {
                    var s, c;
                    if (void 0 !== o)
                        for (var u = document.getElementsByTagName("script"), d = 0; d < u.length; d++) {
                            var f = u[d];
                            if (f.getAttribute("src") == n || f.getAttribute("data-webpack") == t + o) {
                                s = f;
                                break
                            }
                        }
                    s || (c = !0, (s = document.createElement("script")).charset = "utf-8", s.timeout = 120, i.nc && s.setAttribute("nonce", i.nc), s.setAttribute("data-webpack", t + o), s.src = n), e[n] = [r];
                    var l = (t, r) => {
                            s.onerror = s.onload = null, clearTimeout(g);
                            var i = e[n];
                            if (delete e[n], s.parentNode && s.parentNode.removeChild(s), i && i.forEach((e => e(r))), t) return t(r)
                        },
                        g = setTimeout(l.bind(null, void 0, {
                            type: "timeout",
                            target: s
                        }), 12e4);
                    s.onerror = l.bind(null, s.onerror), s.onload = l.bind(null, s.onload), c && document.head.appendChild(s)
                }
            }, i.r = e => {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, i.j = 71, i.p = "https://js-agent.newrelic.com/", (() => {
                var e = {
                    71: 0,
                    131: 0
                };
                i.f.j = (t, n) => {
                    var r = i.o(e, t) ? e[t] : void 0;
                    if (0 !== r)
                        if (r) n.push(r[2]);
                        else {
                            var o = new Promise(((n, i) => r = e[t] = [n, i]));
                            n.push(r[2] = o);
                            var a = i.p + i.u(t),
                                s = new Error;
                            i.l(a, (n => {
                                if (i.o(e, t) && (0 !== (r = e[t]) && (e[t] = void 0), r)) {
                                    var o = n && ("load" === n.type ? "missing" : n.type),
                                        a = n && n.target && n.target.src;
                                    s.message = "Loading chunk " + t + " failed.\n(" + o + ": " + a + ")", s.name = "ChunkLoadError", s.type = o, s.request = a, r[1](s)
                                }
                            }), "chunk-" + t, t)
                        }
                };
                var t = (t, n) => {
                        var r, o, [a, s, c] = n,
                            u = 0;
                        if (a.some((t => 0 !== e[t]))) {
                            for (r in s) i.o(s, r) && (i.m[r] = s[r]);
                            if (c) c(i)
                        }
                        for (t && t(n); u < a.length; u++) o = a[u], i.o(e, o) && e[o] && e[o][0](), e[o] = 0
                    },
                    n = window.webpackChunkNRBA = window.webpackChunkNRBA || [];
                n.forEach(t.bind(null, 0)), n.push = t.bind(null, n.push.bind(n))
            })();
            var o = {};
            (() => {
                i.r(o);
                var e = i(2325),
                    t = i(2919);
                const n = Object.values(e.D);

                function r(e) {
                    const r = {};
                    return n.forEach((n => {
                        r[n] = function(e, n) {
                            return !1 !== (0, t.Mt)(n, "".concat(e, ".enabled"))
                        }(n, e)
                    })), r
                }
                var a = i(2384),
                    s = i(909),
                    c = i(9252),
                    u = i(8768),
                    d = i(4329),
                    f = i(1509),
                    l = i(2650),
                    g = i(2374),
                    h = i(8610);
                class v extends f.W {
                    constructor(e, t, n) {
                        let r = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3];
                        super(e, t, n), this.hasAggregator = !1, this.auto = r, this.abortHandler, r && (0, d.R)(e, n)
                    }
                    importAggregator() {
                        if (this.hasAggregator || !this.auto) return;
                        this.hasAggregator = !0;
                        const e = async () => {
                            try {
                                const {
                                    setupAgentSession: e
                                } = await i.e(242).then(i.bind(i, 2011));
                                e(this.agentIdentifier);
                                const {
                                    lazyLoader: t
                                } = await i.e(729).then(i.bind(i, 8110)), {
                                    Aggregate: n
                                } = await t(this.featureName, "aggregate");
                                new n(this.agentIdentifier, this.aggregator)
                            } catch (e) {
                                (0, h.Z)("Downloading ".concat(this.featureName, " failed..."), e), this.abortHandler ? .()
                            }
                        };
                        g.v6 ? e() : (0, l.b)((() => e()), !0)
                    }
                }
                var p = i(2484),
                    m = i(2053);
                class b extends v {
                    static featureName = p.t9;
                    constructor(n, r) {
                        let i = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        if (super(n, r, p.t9, i), ("undefined" == typeof PerformanceNavigationTiming || u.T) && "undefined" != typeof PerformanceTiming) {
                            const r = (0, t.OP)(n);
                            r[p.Dz] = Math.max(Date.now() - r.offset, 0), (0, l.K)((() => r[p.qw] = Math.max((0, m.z)() - r[p.Dz], 0))), (0, l.b)((() => {
                                const t = (0, m.z)();
                                r[p.OJ] = Math.max(t - r[p.Dz], 0), (0, c.p)("timing", ["load", t], void 0, e.D.pageViewTiming, this.ee)
                            }))
                        }
                        this.importAggregator()
                    }
                }
                var w = i(9557),
                    y = i(7022);
                class A extends w.w {
                    constructor(e) {
                        super(e), this.aggregatedData = {}
                    }
                    store(e, t, n, r, i) {
                        var o = this.getBucket(e, t, n, i);
                        return o.metrics = function(e, t) {
                            t || (t = {
                                count: 0
                            });
                            return t.count += 1, (0, y.D)(e, (function(e, n) {
                                t[e] = x(n, t[e])
                            })), t
                        }(r, o.metrics), o
                    }
                    merge(e, t, n, r, i) {
                        var o = this.getBucket(e, t, r, i);
                        if (o.metrics) {
                            var a = o.metrics;
                            a.count += n.count, (0, y.D)(n, (function(e, t) {
                                if ("count" !== e) {
                                    var r = a[e],
                                        i = n[e];
                                    i && !i.c ? a[e] = x(i.t, r) : a[e] = function(e, t) {
                                        if (!t) return e;
                                        t.c || (t = _(t.t));
                                        return t.min = Math.min(e.min, t.min), t.max = Math.max(e.max, t.max), t.t += e.t, t.sos += e.sos, t.c += e.c, t
                                    }(i, a[e])
                                }
                            }))
                        } else o.metrics = n
                    }
                    storeMetric(e, t, n, r) {
                        var i = this.getBucket(e, t, n);
                        return i.stats = x(r, i.stats), i
                    }
                    getBucket(e, t, n, r) {
                        this.aggregatedData[e] || (this.aggregatedData[e] = {});
                        var i = this.aggregatedData[e][t];
                        return i || (i = this.aggregatedData[e][t] = {
                            params: n || {}
                        }, r && (i.custom = r)), i
                    }
                    get(e, t) {
                        return t ? this.aggregatedData[e] && this.aggregatedData[e][t] : this.aggregatedData[e]
                    }
                    take(e) {
                        for (var t = {}, n = "", r = !1, i = 0; i < e.length; i++) t[n = e[i]] = j(this.aggregatedData[n]), t[n].length && (r = !0), delete this.aggregatedData[n];
                        return r ? t : null
                    }
                }

                function x(e, t) {
                    return null == e ? function(e) {
                        e ? e.c++ : e = {
                            c: 1
                        };
                        return e
                    }(t) : t ? (t.c || (t = _(t.t)), t.c += 1, t.t += e, t.sos += e * e, e > t.max && (t.max = e), e < t.min && (t.min = e), t) : {
                        t: e
                    }
                }

                function _(e) {
                    return {
                        t: e,
                        min: e,
                        max: e,
                        sos: e * e,
                        c: 1
                    }
                }

                function j(e) {
                    return "object" != typeof e ? [] : (0, y.D)(e, D)
                }

                function D(e, t) {
                    return t
                }
                var E = i(6797),
                    k = i(5526),
                    S = i(2438);
                var T = i(6998),
                    P = i(8544),
                    N = i(6382);
                class I extends v {
                    static featureName = N.t;
                    constructor(e, n) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(e, n, N.t, r), g.il && ((0, t.OP)(e).initHidden = Boolean("hidden" === document.visibilityState), (0, T.N)((() => (0, c.p)("docHidden", [(0, m.z)()], void 0, N.t, this.ee)), !0), (0, P.bP)("pagehide", (() => (0, c.p)("winPagehide", [(0, m.z)()], void 0, N.t, this.ee))), this.importAggregator())
                    }
                }
                const C = Boolean(g._A ? .Worker),
                    O = Boolean(g._A ? .SharedWorker),
                    R = Boolean(g._A ? .navigator ? .serviceWorker);
                let M, B, z;
                var q = i(6034);
                class W extends v {
                    static featureName = q.t9;
                    constructor(t, n) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(t, n, q.t9, r),
                            function(e) {
                                if (!M) {
                                    if (C) {
                                        M = Worker;
                                        try {
                                            g._A.Worker = n(M, "Dedicated")
                                        } catch (e) {
                                            o(e, "Dedicated")
                                        }
                                        if (O) {
                                            B = SharedWorker;
                                            try {
                                                g._A.SharedWorker = n(B, "Shared")
                                            } catch (e) {
                                                o(e, "Shared")
                                            }
                                        } else r("Shared");
                                        if (R) {
                                            z = navigator.serviceWorker.register;
                                            try {
                                                g._A.navigator.serviceWorker.register = (t = z, function() {
                                                    for (var e = arguments.length, n = new Array(e), r = 0; r < e; r++) n[r] = arguments[r];
                                                    return i("Service", n[1] ? .type), t.apply(navigator.serviceWorker, n)
                                                })
                                            } catch (e) {
                                                o(e, "Service")
                                            }
                                        } else r("Service");
                                        var t;
                                        return
                                    }
                                    r("All")
                                }

                                function n(e, t) {
                                    return "undefined" == typeof Proxy ? e : new Proxy(e, {
                                        construct: (e, n) => (i(t, n[1] ? .type), new e(...n))
                                    })
                                }

                                function r(t) {
                                    g.v6 || e("Workers/".concat(t, "/Unavailable"))
                                }

                                function i(t, n) {
                                    e("Workers/".concat(t, "module" === n ? "/Module" : "/Classic"))
                                }

                                function o(t, n) {
                                    e("Workers/".concat(n, "/SM/Unsupported")), (0, h.Z)("NR Agent: Unable to capture ".concat(n, " workers."), t)
                                }
                            }((t => (0, c.p)(q.xS, [t], void 0, e.D.metrics, this.ee))), this.importAggregator()
                    }
                }
                new class {
                    constructor(e) {
                        let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : (0, k.ky)(16);
                        this.agentIdentifier = t, this.sharedAggregator = new A({
                            agentIdentifier: this.agentIdentifier
                        }), this.features = {}, this.desiredFeatures = new Set(e.features || []), this.desiredFeatures.add(b), Object.assign(this, (0, a.j)(this.agentIdentifier, e, e.loaderType || "agent")), this.start()
                    }
                    get config() {
                        return {
                            info: (0, t.C5)(this.agentIdentifier),
                            init: (0, t.P_)(this.agentIdentifier),
                            loader_config: (0, t.DL)(this.agentIdentifier),
                            runtime: (0, t.OP)(this.agentIdentifier)
                        }
                    }
                    start() {
                        const t = "features";
                        try {
                            const n = r(this.agentIdentifier),
                                i = Array.from(this.desiredFeatures);
                            i.sort(((t, n) => e.p[t.featureName] - e.p[n.featureName])), i.forEach((t => {
                                if (n[t.featureName] || t.featureName === e.D.pageViewEvent) {
                                    const e = (0, s.Z)(t.featureName);
                                    e.every((e => n[e])) || (0, h.Z)("".concat(t.featureName, " is enabled but one or more dependent features has been disabled (").concat((0, S.P)(e), "). This may cause unintended consequences or missing data...")), this.features[t.featureName] = new t(this.agentIdentifier, this.sharedAggregator)
                                }
                            })), (0, E.Qy)(this.agentIdentifier, this.features, t)
                        } catch (e) {
                            (0, h.Z)("Failed to initialize all enabled instrument classes (agent aborted) -", e);
                            for (const e in this.features) this.features[e].abortHandler ? .();
                            const n = (0, E.fP)();
                            return delete n.initializedAgents[this.agentIdentifier] ? .api, delete n.initializedAgents[this.agentIdentifier] ? .[t], delete this.sharedAggregator, n.ee ? .abort(), delete n.ee ? .get(this.agentIdentifier), !1
                        }
                    }
                }({
                    features: [b, I, W],
                    loaderType: "lite"
                })
            })(), window.NRBA = o
        })();
    </script>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="initial-scale=1">
    <title>This “10-Second Daily Juice Trick” Took Me from 202 Down to 145!</title>
    <meta class="metaTagTop" name="description" content="">
    <meta class="metaTagTop" name="keywords" content="">
    <meta class="metaTagTop" name="author" content="">
    <meta class="metaTagTop" property="og:image" content="https://lenashealthylifestyle.com/hosted/images/71/76daf06bf94efb895366dfd44f6bb9/Middle-age-woman-posing-in-park.jpg" id="social-image">
    <meta property="og:title" content="This “10-Second Daily Juice Trick” Took Me from 202 Down to 145!">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://lenashealthylifestyle.com/10-second">
    <meta property="og:type" content="website">
    <link rel="stylesheet" media="screen" href="//lenashealthylifestyle.com/assets/lander.css">
    <link rel="canonical" href="https://lenashealthylifestyle.com/10-second">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7COswald:400,700%7CDroid+Sans:400,700%7CRoboto:400,700%7CLato:400,700%7CPT+Sans:400,700%7CSource+Sans+Pro:400,600,700%7CNoto+Sans:400,700%7CPT+Sans:400,700%7CUbuntu:400,700%7CBitter:400,700%7CPT+Serif:400,700%7CRokkitt:400,700%7CDroid+Serif:400,700%7CRaleway:400,700%7CInconsolata:400,700"
        rel="stylesheet" type="text/css">
    <meta property="cf:funnel_id" content="Tjcrd2VkMUp1Y0s2eDJPTU5ubXBVdz09LS0vNUtwZFF6WHNIK2gxQWNoK3hNcXh3PT0=--6b68a2a3e3049373304358eef1cc36c89fdb9f11">
    <meta property="cf:page_id" content="aitHdjdFMkN6dWpUa1V0NXhMcDBDZz09LS14b0dqcVFiQmlQZWd3WVJ3WXBPbTVBPT0=--f38fac841c77cd3f516bdf04555c1fb55cef1a19">
    <meta property="cf:funnel_step_id" content="NW83Z3FkTVRRWDBoNUJlSk80M1Z6dz09LS1JNDdRbmthOUE3andyTll5RHphZUh3PT0=--ec0bd60d172458ebada32f270e2839950f84c4db">
    <meta property="cf:user_id" content="WkdqTS80T05vYWJ6dmVBVmorOFp4UT09LS1aaHpMRnNrOENKcUR3RVdSU1RCSGN3PT0=--035dc9393f9913a0566a65cc5b8c4542d6040c40">
    <meta property="cf:account_id" content="WWlQaElnWTNDS2pxeEVydHJCN0dldz09LS1yS3dkcmlHVC9HUU9QZmU4SDRKeGdBPT0=--5d42d63ddecce661cd8a4914d1de42d0fea85b0c">
    <meta property="cf:page_code" content="NTg3ODgwNzU=">
    <meta property="cf:mode_id" content="1">
    <meta property="cf:time_zone" content="Eastern Time (US &amp; Canada)">
    <meta property="cf:app_domain" content="app.clickfunnels.com">
    <script src="//lenashealthylifestyle.com/assets/userevents/application.js" async="async"></script>
    <style>
        [data-timed-style=\'fade\'] {
            display: none
        }

        [data-timed-style=\'scale\'] {
            display: none
        }
    </style>
    <link rel=\'icon\' type=\'image/png\' href=\'https://d2saw6je89goi1.cloudfront.net/uploads/digital_asset/file/1025450/Favicon.png\'></link>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = \'2.0\';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, \'script\',
            \'https://connect.facebook.net/en_US/fbevents.js\');
        fbq(\'init\', \'933931814470413\');
        fbq(\'track\', \'PageView\');
    </script>
    <noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=933931814470413&ev=PageView&noscript=1"
/></noscript>


    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3430175,
                hjsv: 6
            };
            a = o.getElementsByTagName(\'head\')[0];
            r = o.createElement(\'script\');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, \'https://static.hotjar.com/c/hotjar-\', \'.js?sv=\');
    </script>
</head>
<script type="text/javascript">
    function init() {
        for (var t = document.getElementsByTagName("img"), e = 0; e < t.length; e++) {
            var i = t[e].getAttribute("data-src");
            if (i) {
                for (var n = t[e].parentElement, a = 0; 0 == a && n;) a = n.scrollWidth, n = n.parentElement;
                a && 0 < i.indexOf("images.clickfunnels.com") && (i = "//lenashealthylifestyle.com/hosted/images/cdn-cgi/image/fit=scale-down,width=" + a + ",quality=75/" + i), t[e].setAttribute("src", i)
            }
        }
    }
    window.addEventListener("load", init);
</script>

<body data-affiliate-param="affiliate_id" data-show-progress="true">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none !important">
<filter id="grayscale">
<fecolormatrix type="matrix" values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0"></fecolormatrix>
</filter>
</svg>
    <div class="containerWrapper">
        <style id="globalHeadlineCSS" data-font-fam="Playfair Display">
            .elHeadlineWrapper[data-htype="headline"] {
                font-family: "Playfair Display", Helvetica, sans-serif !important;
            }
        </style>
        <meta name="robots" content="noindex, nofollow">
        <textarea id="tracking-body-top" style="display: none !important"></textarea>
        <input id="submit-form-action" value="redirect-url" data-url="#" data-ar-service="" data-ar-list="" data-webhook="" type="hidden">
        <div class="nodoHiddenFormFields hide">
            <input id="elHidden1" class="elInputHidden elInput" name="ad" type="hidden">
            <input id="elHidden2" class="elInputHidden elInput" name="tag" type="hidden">
            <input id="elHidden3" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden4" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden5" class="elInputHidden elInput" name="" type="hidden">
        </div>
        <div class="nodoCustomHTML hide"></div>
        <div class="modalBackdropWrapper" style="background-color: rgba(0, 0, 0, 0.4); height: 100%; display: none;"></div>
        <div class="container containerModal midContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll shadow0 bgNoRepeat emptySection borderLight border5px radius5" id="modalPopup" data-title="Modal" data-block-color="0074C7"
            style="margin-top: 100px; padding-top: 40px; padding-bottom: 40px; border-color: rgb(37, 162, 176); outline: none; position: fixed; background-color: rgb(255, 255, 255); display: none;" data-trigger="none" data-animate="top" data-delay="0">
            <div class="containerInner ui-sortable">
                <div style="outline: none;" class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-4676810000" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row">
                    <div style="outline: none;" id="col-full-308" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                            <div style=\'outline: none; cursor: pointer; font-family: "Patua One", Helvetica, sans-serif !important;\' class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-97443" data-de-type="headline" data-de-editing="false" data-title="optin headline"
                                data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" aria-disabled="false" data-google-font="Patua+One">
                                <div class="ne elHeadline elMargin0 elBGStyle0 hsTextShadow0 hsSize4 lh1" style="text-align: center; color: rgb(37, 162, 176);" data-bold="inherit" contenteditable="false"><b>Your Results Have Been Analyzed</b></div>
                            </div>
                            <div style="outline: none; cursor: pointer; margin-top: 20px;" class="de elHeadlineWrapper ui-droppable de-editable" id="headline-63683" data-de-type="headline" data-de-editing="false" data-title="optin headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" aria-disabled="false">
                                <div class="ne elHeadline elMargin0 elBGStyle0 hsTextShadow0 hsSize4 lh1" style="text-align: center; color: rgb(71, 71, 71); font-size: 24px;" data-bold="inherit" contenteditable="false"><b>Congratulations! You\'re a perfect fit!</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="outline: none; margin-bottom: 0px;" class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row-7814410000" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row">
                    <div style="outline: none;" id="col-full-177" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
                            <div style="outline: none; cursor: pointer;" class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="tmp_button-85389" data-de-type="button" data-de-editing="false" data-title="sign up button" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" aria-disabled="false" data-elbuttontype="1">
                                <a href="#" class="elButton elButtonColor1 elButtonFull elButtonSize2 elButtonBottomBorder deCapitalize elButtonCorner5" style="color: rgb(255, 255, 255); background-color: rgb(202, 30, 108);">
<span class="elButtonMain">Click here to learn about the easy ritual</span>
<span class="elButtonSub">&amp; let today be the start of your transformation journey</span>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="closeLPModal"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="" data-src="https://assets.clickfunnels.com/images/closemodal.png"></div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <style id="button_style_tmp_button-94931">
            #tmp_button-94931 .elButtonFlat:hover {
                background-color: #cf3323 !important;
            }

            #tmp_button-94931 .elButtonBottomBorder:hover {
                background-color: #cf3323 !important;
            }

            #tmp_button-94931 .elButtonSubtle:hover {
                background-color: #cf3323 !important;
            }

            #tmp_button-94931 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(222, 76, 61)), color-stop(1, #cf3323));
                background-image: -o-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: -moz-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: -ms-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: linear-gradient(to bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
            }

            #tmp_button-94931 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(222, 76, 61)), color-stop(0, #cf3323));
                background-image: -o-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: -moz-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: -ms-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: linear-gradient(to bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
            }

            #tmp_button-94931 .elButtonBorder {
                border: 3px solid rgb(222, 76, 61) !important;
                color: rgb(222, 76, 61) !important;
            }

            #tmp_button-94931 .elButtonBorder:hover {
                background-color: rgb(222, 76, 61) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_headline1-90167">
            #tmp_headline1-90167 .elHeadline b {
                color: rgb(222, 76, 61);
            }
        </style>
        <style id="bold_style_headline-90754-143">
            #headline-90754-143 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--45994" data-title="Section" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 20px; outline: none; background-color: rgb(15, 136, 203);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--30106" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-158" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-27531" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false" data-google-font="" data-htype="headline">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_28" style="text-align: center; font-size: 42px; color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <b>This “10-Second Daily Juice Trick” </b>
                                    <div><b>Took Me from 202 Down to 145!</b></div>
                                </h1>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-68765" data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_20" style="text-align: center; font-size: 26px; color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false"><b>I Never Thought I Would Feel so Good in My 50s…</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--75644" data-title="Section" data-block-color="0074C7" style="padding-top: 0px; padding-bottom: 0px; outline: none;"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--99920" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding: 20px 0px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-left-122" class="innerContent col_left ui-resizable col-md-5" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-61079" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" alt="" height="PX" data-src="//lenashealthylifestyle.com/hosted/images/71/76daf06bf94efb895366dfd44f6bb9/Middle-age-woman-posing-in-park.jpg">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-145" class="innerContent col_right ui-resizable col-md-7" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-88923" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">Hi, my name is Dawn. I’m 57. Married for 34 years. Mom of 3. Grandma of 7. And I just recently stumbled upon a way to get my old self back…
                                    <div>
                                        <br>
                                        <div></div>
                                        <div>I remember back in my 20s and 30s when I used to….</div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="de elBullet elMargin0 ui-droppable de-editable" id="list-78752" data-de-type="list" data-de-editing="false" data-title="icon bullet list" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false" style="margin-top: 20px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <ul class="ne elBulletList elBulletListNew elBulletList2 listBorder0" data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>Have plenty of energy from morning to night</b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>Maintain a slim figure even while eating burgers and tacos</b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>Eat what I wanted...WHENEVER I wanted and not gain a single ounce</b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>​Stay in great shape even though I hardly worked out<br></b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>​Feel confident and comfortable wearing form fitting clothes<br></b>
                                    </li>
                                </ul>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-34043" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <span style="background-color: initial; color: inherit;">That was up <b>UNTIL</b>, I hit my mid 40s.</span><br>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--25178" data-title="Section" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 20px; background-color: rgb(15, 136, 203); outline: none; color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--51727" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-129" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-36703" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false" data-google-font="" data-htype="headline">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_22" style="text-align: center;font-size: 32px" data-bold="inherit" data-gramm="false" contenteditable="false"><b>After 45, EVERYTHING Went Downhill, Quickly..</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--87956" data-title="Section" data-block-color="0074C7" style="padding-top: 0px; padding-bottom: 0px; outline: none;"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--32527" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-full-148" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" id="tmp_paragraph-22524" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>Suddenly my once slender frame became a magnet for pounds and bulge in all the wrong places.
                                    </div>
                                    <div>
                                    </div>
                                    <div><span style="background-color: initial; color: inherit;"><br></span></div>
                                    <div>
                                        <span style="background-color: initial; color: inherit;"><b>It became obvious that my metabolism had SLOWED down drastically.</b></span><br>
                                    </div>
                                    <div><span style="background-color: initial; color: inherit;"><br></span></div>
                                    <div>My health was declining, and I had little to no energy throughout the day.
                                    </div>
                                    <div><br></div>
                                    <div>So, I would go to bed earlier at night, hoping that the extra sleep would help me make it through the next day.
                                    </div>
                                    <div><br></div>
                                    <div>I sometimes slept for 10-12 HOURS, and I\'d still be dragging the next day!
                                    </div>
                                    <div><br></div>
                                    <div>I never realized how <b>BAD</b> it had gotten.
                                    </div>
                                    <div><br></div>
                                    <div>That is, until my husband and I went to visit my sister and her family in Florida over the holidays. We booked a condo on Vrbo for us to stay at instead of staying at my her home and being a burden.
                                    </div>
                                    <div><br></div>
                                    <div>When we arrived at the condo, I went straight to the bathroom (long flight and drank lots of water).</div>
                                    <div><br></div>
                                    <div>As I stepped in, I noticed there was a fancy digital scale right in the middle of the floor. We don\'t have one at home and it\'s been quite some time since I\'ve stepped on one.
                                    </div>
                                    <div><br></div>
                                    <div>Reluctantly, I decided to step on.....just to see what it read.
                                    </div>
                                    <div><br></div>
                                    <div><b>202 pounds….What? There\'s no way! The scale had to be off.
</b></div>
                                    <div><br></div>
                                    <div>At that moment my heart DROPPED.
                                    </div>
                                    <div><br></div>
                                    <div><b>I stood in front of the mirror, and I was embarrased by what I was seeing.</b></div>
                                    <div><br></div>
                                    <div>I looked like I hadn\'t slept in days. I was so puffy and... ahem...“round”
                                    </div>
                                    <div><br></div>
                                    <div>How did I let myself get this bad? </div>
                                    <div><br></div>
                                    <div>I thought about the numbers I saw on the scale for the rest of the day. And that evening as I was getting ready for bed, I made a decision.</div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--25178-135" data-title="Section - Clone" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; background-color: rgb(15, 136, 203); outline: none; color: rgb(255, 255, 255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--51727-159" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-129-186" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-36703-187" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false" data-google-font="" data-htype="headline">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_22" style="text-align: center;font-size: 32px" data-bold="inherit" data-gramm="false" contenteditable="false"><b>I Was Determined To Get Back The "YOUNG VERSION OF ME"!</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--25357" data-title="Section" data-block-color="0074C7" style="padding-top: 0px; padding-bottom: 0px; outline: none;"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--66097" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row" style="padding-top: 20px; padding-bottom: 0px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-left-134" class="innerContent col_left ui-resizable col-md-6" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-88266" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <div>First thing I started to do when I got back home was speed walking.
                                        </div>
                                        <div><br></div>
                                        <div>But, I found out quickly that my knees and hips were not going to hold up with all the weight I was carrying at the time.
                                        </div>
                                        <div><br></div>
                                        <div>Then, I started a juicing and protein shake routine.</div>
                                        <div><br></div>
                                        <div>I had a little bit of success early on, but found out it left me too hungry, so I ended up snacking which ruined the momentum I had.</div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-right-144" class="innerContent col_right ui-resizable col-md-6" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="img-11346" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" alt="" height="325" data-src="//lenashealthylifestyle.com/hosted/images/e0/5c513cc59a41e185c989401bf1fd63/PXL_20230327_020345772.PORTRAIT.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--32527-102" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row - Clone" style="padding-top: 0px; padding-bottom: 20px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-full-148-158" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-22524-174" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <span style="background-color: initial; color: inherit;">I even tried some weird home remedies that a lady at my local health food store swore by.</span><br>
                                    </div>
                                    <div><span style="background-color: initial; color: inherit;"><br></span></div>
                                    <div>Like various concoctions in the kitchen, with apple cider vinegar, lemons, bananas, and a whole bunch more..
                                    </div>
                                    <div><br></div>
                                    <div>While I was on the "natural home remedy" kick, I even tried foot detox tricks like saran wrapping peeled onions around my feet.</div>
                                    <div><br></div>
                                    <div><b>(...and I\'m just a little embarrassed to confess that I slept with wrapped onions around my feet...)</b></div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--66097-109" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row - Clone" style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-left-134-151" class="col-md-6 innerContent col_left ui-resizable" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-44914" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" alt="" data-src="//lenashealthylifestyle.com/hosted/images/ba/c6bebef0fc46cd93a3879be821562e/WL.png">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-144-109" class="col-md-6 innerContent col_right ui-resizable" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-88266-141" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <div>Next, I did Weight Watchers. There were some excellent meals to be had with that plan, but I got tired of tracking my points.
                                        </div>
                                        <div><br></div>
                                        <div>Then I tried Paleo. No luck there. I even went Vegan for a whole month. BUT, my numbers weren’t moving!
                                        </div>
                                        <div><br></div>
                                        <div><b>I thought...“Could there be something wrong with me internally?”
</b></div>
                                        <div><br></div>
                                        <div>So, I scheduled an appointment with my doctor to get checked out.</div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--28300" data-title="Section" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 20px; background-color: rgb(15, 136, 203); outline: none; color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--33249" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-156" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-37621" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgba(0, 0, 0, 0);"
                                aria-disabled="false" data-google-font="" data-htype="headline">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_22" style="text-align: center; font-size: 32px; background-color: rgba(0, 0, 0, 0); color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false"><b>My Doctor Totally Shocked Me With What She Revealed!</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--55263" data-title="Section" data-block-color="0074C7" style="padding-top: 0px; padding-bottom: 0px; outline: none;"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--66097-109-172" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row - Clone - Clone" style="padding-top: 20px; padding-bottom: 0px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-left-134-151-112" class="col-md-6 innerContent col_left ui-resizable" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-44914-136" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" alt="" height="400" data-src="//lenashealthylifestyle.com/hosted/images/50/9c2b7182634f8fb96d2a5d7240327a/Unknown-woman-doctor-and-patient.jpg">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-144-109-152" class="col-md-6 innerContent col_right ui-resizable" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-88266-141-155" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <div>Calmly, she said, “Dawn, there is nothing to worry about. You did nothing wrong.”
                                        </div>
                                        <div><br></div>
                                        <div>She explained that my weight gain over the years had <b>ZERO</b> to do with <b>what I ate</b> or <b>how much or how little I exercised</b>.
                                        </div>
                                        <div><br></div>
                                        <div>She then lowered her voice a bit, peeked out the room to see if anyone in the office was listening...
                                        </div>
                                        <div><br></div>
                                        <div>She quietly said, “Dawn, I’ve known you and Mike for a long time. I don’t share this with just anyone, but I want to show you something I learned recently that will help you.”
                                        </div>
                                        <div><br></div>
                                        <div>"It\'s somewhat unconventional, but it is backed by excellent science research."</div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--94026" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 0px; padding-bottom: 20px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-full-122" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable" id="tmp_paragraph-55846" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">I figured she was going to tell me about some "magical" pill that she could prescribe to help me.
                                    <div>
                                        <br>
                                        <div></div>
                                        <div>Boy, was I wrong....
                                        </div>
                                        <div><br></div>
                                        <div>She went on to tell me about a 10-second daily juice trick that she learned about at a recent conference she had attended.
                                        </div>
                                        <div><br></div>
                                        <div>She went on to say, "there are 3 almost unbelievable benefits people have discovered by using this method…..
                                        </div>
                                        <div><br></div>
                                        <div><b>1. There\'s no need to change your eating habits
</b></div>
                                        <div><b>2. There\'s no need for you to exercise
</b></div>
                                        <div><b>3. That it worked VERY quickly
</b></div>
                                        <div><br></div>
                                        <div>“And, it only takes <b>10 seconds per day</b>.”
                                        </div>
                                        <div><br></div>
                                        <div>She said, “all of the details are right here.”
                                        </div>
                                        <div><br></div>
                                        <div>Then she handed me a piece of paper with a website address on it.
                                        </div>
                                        <div><br></div>
                                        <div>Well needless to say, I couldn\'t wait until get home to watch it!
                                        </div>
                                        <div><br></div>
                                        <div>So, I just pulled it up on my phone in the Doctor\'s office parking lot.
                                        </div>
                                        <div><br></div>
                                        <div>I was just <b>BLOWN</b> away by everything I had just learned from watching the video.
                                        </div>
                                        <div><br></div>
                                        <div>Could something so simple really deliver postive results in such a short amount of time?
                                        </div>
                                        <div><br></div>
                                        <div>I had doubts in my head, but my heart said <b>"YES! This is Answer I Was Looking For!"
</b>
                                        </div>
                                        <div><br></div>
                                        <div>Suffice it to say, I followed my heart...</div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--28300-112" data-title="Section - Clone" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; background-color: rgb(15, 136, 203); outline: none; color: rgb(255, 255, 255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--33249-160" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-156-119" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-37621-133" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgba(0, 0, 0, 0);"
                                aria-disabled="false" data-google-font="" data-htype="headline">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_22" style="text-align: center; font-size: 32px; background-color: rgba(0, 0, 0, 0); color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false"><b>96.7% of People Have Never Even Heard Of This..</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--58436" data-title="Section" data-block-color="0074C7" style="padding-top: 0px; padding-bottom: 0px; outline: none;"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--66097-109-172-173" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row - Clone - Clone - Clone"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-left-134-151-112-159" class="innerContent col_left ui-resizable col-md-5" data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-88266-141-155-120" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: center; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <div>My Results...</div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-44914-136-110" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 20px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" alt="" height="500" data-src="//lenashealthylifestyle.com/hosted/images/c4/6594db4bea40da91c199f99f54bba9/Senior-Couple-Enjoying-Beach-Holiday-2.jpg">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-144-109-152-123" class="innerContent col_right ui-resizable col-md-7" data-col="right" data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-13735" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <div>So, I’ve been using this juice trick for quite some time now, and I am absolutely THRILLED!
                                        </div>
                                        <div><br></div>
                                        <div>Within no time, I started seeing results exactly like my doctor said I would.
                                        </div>
                                        <div><br></div>
                                        <div><b>The numbers on the scale started falling on Day 2 and have continued to fall since.
</b></div>
                                        <div><br></div>
                                        <div>It seems like every couple of weeks, I\'m replacing part of my wardrobe.
                                        </div>
                                        <div><br></div>
                                        <div>At times I feel like this can\'t be real, as I shop in for new clothes in the women\'s petite section....instead of the plus!
                                        </div>
                                        <div><br></div>
                                        <div>Even, my husband has noticed the difference too…if you know what I mean 😉. Let’s just say a new spark has been ignited in our relationship. Even at our age!</div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--89558" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-full-145" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-79618" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <div>He decided to start using the juice trick as well. Yes, it works for men too!
                                        </div>
                                        <div><br></div>
                                        <div>Other things have changed since I started doing it is...</div>
                                        <div><br></div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="de elBullet elMargin0 ui-droppable hiddenElementTools de-editable" id="list-35789" data-de-type="list" data-de-editing="false" data-title="icon bullet list" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <ul class="ne elBulletList elBulletListNew elBulletList2 listBorder0" data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>My energy has SKYROCKETED. 58 feels more like 35 these days if you ask me!</b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>I don’t crave snacks all day.</b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>I’m eating MORE of my favorite foods like Ice Cream and Cheesecake. All Guilt-Free!</b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>My blood sugar levels are lower.</b>
                                    </li>
                                    <li style="font-size: 18px;">
                                        <i contenteditable="false" class="fa fa-fw fa-check"></i><b>​I sleep much better these days. I wake up feeling refreshed and ready for whatever the day throws at me.<br></b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--28300-112-137" data-title="Section - Clone - Clone" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; background-color: rgb(15, 136, 203); outline: none; color: rgb(255, 255, 255);" data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--33249-160-145" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-156-119-103" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-37621-133-136" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgba(0, 0, 0, 0);"
                                aria-disabled="false" data-google-font="" data-htype="headline">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_22" style="text-align: center; font-size: 32px; background-color: rgba(0, 0, 0, 0); color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false"><b>I\'m SO Proud Of Myself For Following My Heart, and Not My Mind...</b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection" id="section--92040" data-title="Section" data-block-color="0074C7" style="padding-top: 0px; padding-bottom: 0px; outline: none;"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--55284" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="padding-top: 20px; padding-bottom: 20px; margin: 0px auto; outline: none; background-color: rgb(255, 255, 255); width: 85%; max-width: 100%;">
                    <div id="col-full-124" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-79567" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: left; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>I could have easily blown off what my Doctor said about this unusual juice trick. But, I put my skepticism aside.
                                    </div>
                                    <div>
                                    </div>
                                    <div><br></div>
                                    <div>Now, I absolutely love who I have become. It feels like the “<b>YOUNG VERSION OF ME</b>’ again.
                                    </div>
                                    <div>
                                    </div>
                                    <div><br></div>
                                    <div>I don’t have to worry about my health anymore.</div>
                                    <div><br></div>
                                    <div>All because I took some time to learn about this 10-second daily juice trick. Who would have thought?</div>
                                    <div><br></div>
                                    <div>Everyone is asking me what I\'ve been doing to get these results so quickly.</div>
                                    <div><br></div>
                                    <div>So, I have provided a link below to the same website my doctor shared with me about a few months ago.</div>
                                    <div><br></div>
                                    <div>As long as it\'s STILL up and running.</div>
                                    <div><br></div>
                                    <div>I know there is a chance that it could have be taken down, due to some well-known pharmaceutical company that is trying to keep this method hidden from the general public.</div>
                                    <div><br></div>
                                    <div>I guess the smart thing to do would be to go ahead and click the link right now to be certain you have the opportunity to learn about this trick for yourself. 👇👇<br>
                                        <div><br></div>
                                    </div>
                                </div>
                            </div>
                            <div class="de elBTN elAlign_center elMargin0 ui-droppable de-editable" id="button-92317" data-de-type="button" data-de-editing="false" data-title="button" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;"
                                data-google-font="" aria-disabled="false" data-element-theme="customized">
                                <a href="https://bestofferhere.link/Alpilean" class="elButton elButtonSize1 elButtonColor1 elButtonPadding2 elBtnVP_10 elButtonCorner3 elBtnHP_25 elButtonTxtColor1 elBTN_b_none elButtonShadowFlatHighlight elBTNone elButtonBlock elButtonFull mfs_20"
                                    style="color: rgb(0, 77, 45); background: rgb(254, 239, 0); font-size: 26px;" rel="noopener noreferrer" id="undefined-457">
<span class="elButtonMain">Click Here to See The “10-Second Daily Juice Trick”</span>
<span class="elButtonSub"></span>
</a>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable hiddenElementTools" id="tmp_image-43977" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" alt="" width="PX" height="550" data-src="//lenashealthylifestyle.com/hosted/images/d1/52a24a55414d58a4ededd4a29f29a3/Senior-Couple-Enjoying-Beach-Holiday.jpg">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-16973" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: center; font-size: 18px;" data-gramm="false" contenteditable="false">
                                    <div>
                                        <div>
                                            <b style="color: inherit;">Supporting your journey,</b><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-88961" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style=\'margin-top: 15px; outline: none; cursor: pointer; font-family: "Dancing Script", Helvetica, sans-serif !important;\'
                                aria-disabled="false" data-google-font="Dancing+Script">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: center; color: rgb(0, 77, 45); font-size: 26px;" data-gramm="false" contenteditable="false"><i>- Dawn &amp; Mike</i></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable hiddenElementTools" id="tmp_image-73191" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false" data-imagelink="https://bestofferhere.link/Alpilean">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg" alt="" width="800" data-imagelink="https://bestofferhere.link/Alpilean" data-src="//lenashealthylifestyle.com/hosted/images/da/14071f1ab9428c8fdd57a5f8b47e86/LANDER-VIDEO-PLAYER.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container noTopMargin padding40-top padding40-bottom padding40H noBorder borderSolid border3px cornersAll bgNoRepeat emptySection fullContainer radius0 shadow0" id="section--23272" data-title="Section" data-block-color="0074C7" style="padding-top: 20px; padding-bottom: 100px; outline: none; background-color: rgb(15, 136, 203); margin-top: 0px; color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--32665-128" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row - Clone" style="padding-top: 10px; padding-bottom: 10px; margin: 0px auto; width: 60%; max-width: 100%; outline: none;">
                    <div id="col-full-164-139" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_image-95116" data-de-type="img" data-de-editing="false" data-title="image" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg imgOpacity1 imgGrey0" alt="" width="150" height="px" data-src="//lenashealthylifestyle.com/hosted/images/6e/088d42dfb441cb86537e984f9e478c/Simply-Being-Healthy-Logo-New.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-88048" data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0" data-bold="inherit" style="text-align: center;" data-gramm="false" contenteditable="false"> © Copyright 2023 Simply Being Healthy - All Rights Reserved</div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-86562" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                data-google-font="" aria-disabled="false">
                                <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_12" style="text-align: center; font-size: 12px; color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <div>
                                        <a href="" id="link-64596-627" class="" target="_self" rel="noopener noreferrer" style="color: rgb(255, 255, 255);">Privacy Policy</a> | <a href=""
                                            id="link-41563" class="" target="_self" rel="noopener noreferrer" style="color: rgb(255, 255, 255);">Disclaimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-53877" data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer;"
                                data-google-font="" aria-disabled="false">
                                <div class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_12" style="text-align: center; font-size: 12px; color: rgb(255, 255, 255);" data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <div><br></div>
                                    <div>This site is not part, neither is it endorsed by FACEBOOK™.</div>
                                    <div>FACEBOOK™ is a trademark of FACEBOOK™ , Inc.</div>
                                    <div><br></div>
                                    <div>FDA Compliance: The information on this website has not been evaluated by the Food &amp; Drug Administration or any other medical body. We do not aim to diagnose, treat, cure or prevent any illness or disease.</div>
                                    <div><br></div>
                                    <div>Disclaimer: Information is shared for educational purposes only. You should always consult your doctor before acting on any content on this website, especially if you are pregnant, nursing, taking medication or have
                                        a medical condition.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <style id="bold_style_tmp_headline1-17755-132">
            #tmp_headline1-17755-132 .elHeadline b {
                color: rgb(248, 148, 6);
            }
        </style>
        <style id="bold_style_headline-82394-141">
            #headline-82394-141 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-90754-143">
            #headline-90754-143 .elHeadline b {
                color: rgb(248, 148, 6);
            }
        </style>
        <style id="bold_style_headline-90754-143-133">
            #headline-90754-143-133 .elHeadline b {
                color: rgb(248, 148, 6);
            }
        </style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans%7CPlayfair+Display%7COpen+Sans%7CPlayfair+Display%7COpen+Sans%7CPlayfair+Display%7COpen+Sans%7CPlayfair+Display%7COpen+Sans%7CPlayfair+Display%7COpen+Sans%7CPlayfair+Display%7COpen+Sans%7CDancing+Script%7COpen+Sans%7CPlayfair+Display%7C"
            id="custom_google_font" google-font="Open+Sans">
        <style id="bold_style_headline-90754-143-181">
            #headline-90754-143-181 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_tmp_headline1-17755-132-105">
            #tmp_headline1-17755-132-105 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-33344">
            #headline-33344 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-71552">
            #headline-71552 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-57255">
            #headline-57255 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-67119">
            #headline-67119 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-82394-141-127">
            #headline-82394-141-127 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="bold_style_headline-83730">
            #headline-83730 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="bold_style_headline-61689">
            #headline-61689 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-42433">
            #headline-42433 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="bold_style_headline-36310-145">
            #headline-36310-145 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-79759">
            #headline-79759 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-59321">
            #headline-59321 .elHeadline b {
                color: rgb(6, 114, 178);
            }
        </style>
        <style id="bold_style_headline-85329">
            #headline-85329 .elHeadline b {
                color: rgb(6, 114, 178);
            }
        </style>
        <style id="bold_style_headline-47430">
            #headline-47430 .elHeadline b {
                color: rgb(6, 114, 178);
            }
        </style>
        <style id="bold_style_headline-85246">
            #headline-85246 .elHeadline b {
                color: rgb(6, 114, 178);
            }
        </style>
        <style id="bold_style_headline-99944">
            #headline-99944 .elHeadline b {
                color: rgb(6, 114, 178);
            }
        </style>
        <style id="bold_style_headline-49408">
            #headline-49408 .elHeadline b {
                color: rgb(6, 114, 178);
            }
        </style>
        <style id="bold_style_headline-23250">
            #headline-23250 .elHeadline b {
                color: rgb(6, 114, 178);
            }
        </style>
        <style id="bold_style_headline-43428">
            #headline-43428 .elHeadline b {
                color: rgb(182, 15, 11);
            }
        </style>
        <style id="button_style_button-43503">
            #button-43503 .elButtonFlat:hover {
                background-color: #1c1f5c !important;
            }

            #button-43503 .elButtonBottomBorder:hover {
                background-color: #1c1f5c !important;
            }

            #button-43503 .elButtonSubtle:hover {
                background-color: #1c1f5c !important;
            }

            #button-43503 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(38, 42, 123)), color-stop(1, #1c1f5c));
                background-image: -o-linear-gradient(bottom, rgb(38, 42, 123) 0%, #1c1f5c 100%);
                background-image: -moz-linear-gradient(bottom, rgb(38, 42, 123) 0%, #1c1f5c 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(38, 42, 123) 0%, #1c1f5c 100%);
                background-image: -ms-linear-gradient(bottom, rgb(38, 42, 123) 0%, #1c1f5c 100%);
                background-image: linear-gradient(to bottom, rgb(38, 42, 123) 0%, #1c1f5c 100%);
            }

            #button-43503 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(38, 42, 123)), color-stop(0, #1c1f5c));
                background-image: -o-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 0%);
                background-image: -moz-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 0%);
                background-image: -ms-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 0%);
                background-image: linear-gradient(to bottom, rgb(38, 42, 123) 100%, #1c1f5c 0%);
            }

            #button-43503 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(38, 42, 123)), color-stop(1, #1c1f5c));
                background-image: -o-linear-gradient(bottom, rgb(38, 42, 123) 30%, #1c1f5c 80%);
                background-image: -moz-linear-gradient(bottom, rgb(38, 42, 123) 30%, #1c1f5c 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(38, 42, 123) 30%, #1c1f5c 80%);
                background-image: -ms-linear-gradient(bottom, rgb(38, 42, 123) 30%, #1c1f5c 80%);
                background-image: linear-gradient(to bottom, rgb(38, 42, 123) 30%, #1c1f5c 80%);
            }

            #button-43503 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(38, 42, 123)), color-stop(0, #1c1f5c));
                background-image: -o-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 30%);
                background-image: -moz-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 30%);
                background-image: -ms-linear-gradient(bottom, rgb(38, 42, 123) 100%, #1c1f5c 30%);
                background-image: linear-gradient(to bottom, rgb(38, 42, 123) 100%, #1c1f5c 30%);
            }

            #button-43503 .elButtonBorder {
                border: 3px solid rgb(38, 42, 123) !important;
                color: rgb(38, 42, 123) !important;
            }

            #button-43503 .elButtonBorder:hover {
                background-color: rgb(38, 42, 123) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-20121">
            #headline-20121 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-36310">
            #headline-36310 .elHeadline b {
                color: rgb(182, 15, 11);
            }
        </style>
        <style id="bold_style_headline-36310-166">
            #headline-36310-166 .elHeadline b {
                color: rgb(182, 15, 11);
            }
        </style>
        <style id="bold_style_headline-20121-188">
            #headline-20121-188 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-43428-143">
            #headline-43428-143 .elHeadline b {
                color: rgb(182, 15, 11);
            }
        </style>
        <style id="button_style_button-40421-105">
            #button-40421-105 .elButtonFlat:hover {
                background-color: #ffcb14 !important;
            }

            #button-40421-105 .elButtonBottomBorder:hover {
                background-color: #ffcb14 !important;
            }

            #button-40421-105 .elButtonSubtle:hover {
                background-color: #ffcb14 !important;
            }

            #button-40421-105 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(255, 212, 61)), color-stop(1, #ffcb14));
                background-image: -o-linear-gradient(bottom, rgb(255, 212, 61) 0%, #ffcb14 100%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 212, 61) 0%, #ffcb14 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 212, 61) 0%, #ffcb14 100%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 212, 61) 0%, #ffcb14 100%);
                background-image: linear-gradient(to bottom, rgb(255, 212, 61) 0%, #ffcb14 100%);
            }

            #button-40421-105 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(255, 212, 61)), color-stop(0, #ffcb14));
                background-image: -o-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 0%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 0%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 0%);
                background-image: linear-gradient(to bottom, rgb(255, 212, 61) 100%, #ffcb14 0%);
            }

            #button-40421-105 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(255, 212, 61)), color-stop(1, #ffcb14));
                background-image: -o-linear-gradient(bottom, rgb(255, 212, 61) 30%, #ffcb14 80%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 212, 61) 30%, #ffcb14 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 212, 61) 30%, #ffcb14 80%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 212, 61) 30%, #ffcb14 80%);
                background-image: linear-gradient(to bottom, rgb(255, 212, 61) 30%, #ffcb14 80%);
            }

            #button-40421-105 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(255, 212, 61)), color-stop(0, #ffcb14));
                background-image: -o-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 30%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 30%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 212, 61) 100%, #ffcb14 30%);
                background-image: linear-gradient(to bottom, rgb(255, 212, 61) 100%, #ffcb14 30%);
            }

            #button-40421-105 .elButtonBorder {
                border: 3px solid rgb(255, 212, 61) !important;
                color: rgb(255, 212, 61) !important;
            }

            #button-40421-105 .elButtonBorder:hover {
                background-color: rgb(255, 212, 61) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-43428-109">
            #headline-43428-109 .elHeadline b {
                color: rgb(182, 15, 11);
            }
        </style>
        <style id="bold_style_headline-20121-134">
            #headline-20121-134 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_tmp_subheadline-90734">
            #tmp_subheadline-90734 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="button_style_tmp_subheadline-90734">
            #tmp_subheadline-90734 .elButtonFlat:hover {
                background-color: #0a6795 !important;
            }

            #tmp_subheadline-90734 .elButtonBottomBorder:hover {
                background-color: #0a6795 !important;
            }

            #tmp_subheadline-90734 .elButtonSubtle:hover {
                background-color: #0a6795 !important;
            }

            #tmp_subheadline-90734 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(12, 129, 187)), color-stop(1, #0a6795));
                background-image: -o-linear-gradient(bottom, rgb(12, 129, 187) 0%, #0a6795 100%);
                background-image: -moz-linear-gradient(bottom, rgb(12, 129, 187) 0%, #0a6795 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(12, 129, 187) 0%, #0a6795 100%);
                background-image: -ms-linear-gradient(bottom, rgb(12, 129, 187) 0%, #0a6795 100%);
                background-image: linear-gradient(to bottom, rgb(12, 129, 187) 0%, #0a6795 100%);
            }

            #tmp_subheadline-90734 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(12, 129, 187)), color-stop(0, #0a6795));
                background-image: -o-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 0%);
                background-image: -moz-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 0%);
                background-image: -ms-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 0%);
                background-image: linear-gradient(to bottom, rgb(12, 129, 187) 100%, #0a6795 0%);
            }

            #tmp_subheadline-90734 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(12, 129, 187)), color-stop(1, #0a6795));
                background-image: -o-linear-gradient(bottom, rgb(12, 129, 187) 30%, #0a6795 80%);
                background-image: -moz-linear-gradient(bottom, rgb(12, 129, 187) 30%, #0a6795 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(12, 129, 187) 30%, #0a6795 80%);
                background-image: -ms-linear-gradient(bottom, rgb(12, 129, 187) 30%, #0a6795 80%);
                background-image: linear-gradient(to bottom, rgb(12, 129, 187) 30%, #0a6795 80%);
            }

            #tmp_subheadline-90734 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(12, 129, 187)), color-stop(0, #0a6795));
                background-image: -o-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 30%);
                background-image: -moz-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 30%);
                background-image: -ms-linear-gradient(bottom, rgb(12, 129, 187) 100%, #0a6795 30%);
                background-image: linear-gradient(to bottom, rgb(12, 129, 187) 100%, #0a6795 30%);
            }

            #tmp_subheadline-90734 .elButtonBorder {
                border: 3px solid rgb(12, 129, 187) !important;
                color: rgb(12, 129, 187) !important;
            }

            #tmp_subheadline-90734 .elButtonBorder:hover {
                background-color: rgb(12, 129, 187) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_paragraph-47455">
            #tmp_paragraph-47455 .elHeadline b {
                color: rgb(245, 173, 67);
            }
        </style>
        <style id="bold_style_tmp_headline1-37319">
            #tmp_headline1-37319 .elHeadline b {
                color: rgb(245, 173, 67);
            }
        </style>
        <style id="button_style_button-40421-131">
            #button-40421-131 .elButtonFlat:hover {
                background-color: #f39c1c !important;
            }

            #button-40421-131 .elButtonBottomBorder:hover {
                background-color: #f39c1c !important;
            }

            #button-40421-131 .elButtonSubtle:hover {
                background-color: #f39c1c !important;
            }

            #button-40421-131 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(245, 173, 67)), color-stop(1, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
            }

            #button-40421-131 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(245, 173, 67)), color-stop(0, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
            }

            #button-40421-131 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(245, 173, 67)), color-stop(1, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
            }

            #button-40421-131 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(245, 173, 67)), color-stop(0, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
            }

            #button-40421-131 .elButtonBorder {
                border: 3px solid rgb(245, 173, 67) !important;
                color: rgb(245, 173, 67) !important;
            }

            #button-40421-131 .elButtonBorder:hover {
                background-color: rgb(245, 173, 67) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-15840">
            #headline-15840 .elHeadline b {
                color: rgb(32, 22, 82);
            }
        </style>
        <style id="bold_style_headline-60135">
            #headline-60135 .elHeadline b {
                color: rgb(245, 173, 67);
            }
        </style>
        <style id="bold_style_headline-64292">
            #headline-64292 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="button_style_button-17750">
            #button-17750 .elButtonFlat:hover {
                background-color: #f39c1c !important;
            }

            #button-17750 .elButtonBottomBorder:hover {
                background-color: #f39c1c !important;
            }

            #button-17750 .elButtonSubtle:hover {
                background-color: #f39c1c !important;
            }

            #button-17750 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(245, 173, 67)), color-stop(1, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
            }

            #button-17750 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(245, 173, 67)), color-stop(0, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
            }

            #button-17750 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(245, 173, 67)), color-stop(1, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
            }

            #button-17750 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(245, 173, 67)), color-stop(0, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
            }

            #button-17750 .elButtonBorder {
                border: 3px solid rgb(245, 173, 67) !important;
                color: rgb(245, 173, 67) !important;
            }

            #button-17750 .elButtonBorder:hover {
                background-color: rgb(245, 173, 67) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-29152">
            #headline-29152 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-52073">
            #headline-52073 .elHeadline b {
                color: rgb(245, 173, 67);
            }
        </style>
        <style id="bold_style_headline-69326">
            #headline-69326 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-45809">
            #headline-45809 .elHeadline b {
                color: rgb(245, 173, 67);
            }
        </style>
        <style id="bold_style_headline-85057">
            #headline-85057 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_tmp_headline1-13090-130">
            #tmp_headline1-13090-130 .elHeadline b {
                color: rgb(96, 96, 96);
            }

            #tmp_headline1-13090-130 .elHeadline b {
                color: rgb(96, 96, 96);
            }
        </style>
        <style id="bold_style_tmp_headline1-13090-130"></style>
        <style id="button_style_button-68724-169">
            #button-68724-169 .elButtonFlat:hover {
                background-color: #f39c1c !important;
            }

            #button-68724-169 .elButtonBottomBorder:hover {
                background-color: #f39c1c !important;
            }

            #button-68724-169 .elButtonSubtle:hover {
                background-color: #f39c1c !important;
            }

            #button-68724-169 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(245, 173, 67)), color-stop(1, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 0%, #f39c1c 100%);
            }

            #button-68724-169 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(245, 173, 67)), color-stop(0, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 100%, #f39c1c 0%);
            }

            #button-68724-169 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(245, 173, 67)), color-stop(1, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 30%, #f39c1c 80%);
            }

            #button-68724-169 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(245, 173, 67)), color-stop(0, #f39c1c));
                background-image: -o-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
                background-image: linear-gradient(to bottom, rgb(245, 173, 67) 100%, #f39c1c 30%);
            }

            #button-68724-169 .elButtonBorder {
                border: 3px solid rgb(245, 173, 67) !important;
                color: rgb(245, 173, 67) !important;
            }

            #button-68724-169 .elButtonBorder:hover {
                background-color: rgb(245, 173, 67) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-63683">
            #headline-63683 .elHeadline b {
                color: rgb(71, 71, 71);
            }
        </style>
        <style id="bold_style_tmp_headline1-19261">
            #tmp_headline1-19261 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-97443">
            #tmp_headline1-97443 .elHeadline b {
                color: rgb(37, 162, 176);
            }
        </style>
        <style id="button_style_tmp_button-85389">
            #tmp_button-85389 .elButtonFlat:hover {
                background-color: #a61959 !important;
            }

            #tmp_button-85389 .elButtonBottomBorder:hover {
                background-color: #a61959 !important;
            }

            #tmp_button-85389 .elButtonSubtle:hover {
                background-color: #a61959 !important;
            }

            #tmp_button-85389 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(202, 30, 108)), color-stop(1, #a61959));
                background-image: -o-linear-gradient(bottom, rgb(202, 30, 108) 0%, #a61959 100%);
                background-image: -moz-linear-gradient(bottom, rgb(202, 30, 108) 0%, #a61959 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(202, 30, 108) 0%, #a61959 100%);
                background-image: -ms-linear-gradient(bottom, rgb(202, 30, 108) 0%, #a61959 100%);
                background-image: linear-gradient(to bottom, rgb(202, 30, 108) 0%, #a61959 100%);
            }

            #tmp_button-85389 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(202, 30, 108)), color-stop(0, #a61959));
                background-image: -o-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 0%);
                background-image: -moz-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 0%);
                background-image: -ms-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 0%);
                background-image: linear-gradient(to bottom, rgb(202, 30, 108) 100%, #a61959 0%);
            }

            #tmp_button-85389 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(202, 30, 108)), color-stop(1, #a61959));
                background-image: -o-linear-gradient(bottom, rgb(202, 30, 108) 30%, #a61959 80%);
                background-image: -moz-linear-gradient(bottom, rgb(202, 30, 108) 30%, #a61959 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(202, 30, 108) 30%, #a61959 80%);
                background-image: -ms-linear-gradient(bottom, rgb(202, 30, 108) 30%, #a61959 80%);
                background-image: linear-gradient(to bottom, rgb(202, 30, 108) 30%, #a61959 80%);
            }

            #tmp_button-85389 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(202, 30, 108)), color-stop(0, #a61959));
                background-image: -o-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 30%);
                background-image: -moz-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 30%);
                background-image: -ms-linear-gradient(bottom, rgb(202, 30, 108) 100%, #a61959 30%);
                background-image: linear-gradient(to bottom, rgb(202, 30, 108) 100%, #a61959 30%);
            }

            #tmp_button-85389 .elButtonBorder {
                border: 3px solid rgb(202, 30, 108) !important;
                color: rgb(202, 30, 108) !important;
            }

            #tmp_button-85389 .elButtonBorder:hover {
                background-color: rgb(202, 30, 108) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-33996-105">
            #headline-33996-105 .elHeadline b {
                color: rgb(37, 162, 176);
            }

            #headline-33996-105 .elHeadline b {
                color: rgb(37, 162, 176);
            }
        </style>
        <style id="bold_style_headline-33996-105"></style>
        <style id="button_style_button-92317">
            #button-92317 .elButtonFlat:hover {
                background-color: #d5c900 !important;
            }

            #button-92317 .elButtonBottomBorder:hover {
                background-color: #d5c900 !important;
            }

            #button-92317 .elButtonSubtle:hover {
                background-color: #d5c900 !important;
            }

            #button-92317 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(254, 239, 0)), color-stop(1, #d5c900));
                background-image: -o-linear-gradient(bottom, rgb(254, 239, 0) 0%, #d5c900 100%);
                background-image: -moz-linear-gradient(bottom, rgb(254, 239, 0) 0%, #d5c900 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(254, 239, 0) 0%, #d5c900 100%);
                background-image: -ms-linear-gradient(bottom, rgb(254, 239, 0) 0%, #d5c900 100%);
                background-image: linear-gradient(to bottom, rgb(254, 239, 0) 0%, #d5c900 100%);
            }

            #button-92317 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(254, 239, 0)), color-stop(0, #d5c900));
                background-image: -o-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 0%);
                background-image: -moz-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 0%);
                background-image: -ms-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 0%);
                background-image: linear-gradient(to bottom, rgb(254, 239, 0) 100%, #d5c900 0%);
            }

            #button-92317 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(254, 239, 0)), color-stop(1, #d5c900));
                background-image: -o-linear-gradient(bottom, rgb(254, 239, 0) 30%, #d5c900 80%);
                background-image: -moz-linear-gradient(bottom, rgb(254, 239, 0) 30%, #d5c900 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(254, 239, 0) 30%, #d5c900 80%);
                background-image: -ms-linear-gradient(bottom, rgb(254, 239, 0) 30%, #d5c900 80%);
                background-image: linear-gradient(to bottom, rgb(254, 239, 0) 30%, #d5c900 80%);
            }

            #button-92317 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgb(254, 239, 0)), color-stop(0, #d5c900));
                background-image: -o-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 30%);
                background-image: -moz-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 30%);
                background-image: -ms-linear-gradient(bottom, rgb(254, 239, 0) 100%, #d5c900 30%);
                background-image: linear-gradient(to bottom, rgb(254, 239, 0) 100%, #d5c900 30%);
            }

            #button-92317 .elButtonBorder {
                border: 3px solid rgb(254, 239, 0) !important;
                color: rgb(254, 239, 0) !important;
            }

            #button-92317 .elButtonBorder:hover {
                background-color: rgb(254, 239, 0) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_tmp_headline1-37621-133-136">
            #tmp_headline1-37621-133-136 .elButtonFlat:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621-133-136 .elButtonBottomBorder:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621-133-136 .elButtonSubtle:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621-133-136 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
            }

            #tmp_headline1-37621-133-136 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
            }

            #tmp_headline1-37621-133-136 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
            }

            #tmp_headline1-37621-133-136 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
            }

            #tmp_headline1-37621-133-136 .elButtonBorder {
                border: 3px solid rgba(0, 0, 0, 0) !important;
                color: rgba(0, 0, 0, 0) !important;
            }

            #tmp_headline1-37621-133-136 .elButtonBorder:hover {
                background-color: rgba(0, 0, 0, 0) !important;
                color: #000 !important;
            }
        </style>
        <style id="button_style_tmp_headline1-37621-133">
            #tmp_headline1-37621-133 .elButtonFlat:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621-133 .elButtonBottomBorder:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621-133 .elButtonSubtle:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621-133 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
            }

            #tmp_headline1-37621-133 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
            }

            #tmp_headline1-37621-133 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
            }

            #tmp_headline1-37621-133 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
            }

            #tmp_headline1-37621-133 .elButtonBorder {
                border: 3px solid rgba(0, 0, 0, 0) !important;
                color: rgba(0, 0, 0, 0) !important;
            }

            #tmp_headline1-37621-133 .elButtonBorder:hover {
                background-color: rgba(0, 0, 0, 0) !important;
                color: #000 !important;
            }
        </style>
        <style id="button_style_tmp_headline1-37621">
            #tmp_headline1-37621 .elButtonFlat:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621 .elButtonBottomBorder:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621 .elButtonSubtle:hover {
                background-color: #000000 !important;
            }

            #tmp_headline1-37621 .elButtonGradient {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
            }

            #tmp_headline1-37621 .elButtonGradient:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
            }

            #tmp_headline1-37621 .elButtonGradient2 {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
            }

            #tmp_headline1-37621 .elButtonGradient2:hover {
                background-image: -webkit-gradient( linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
            }

            #tmp_headline1-37621 .elButtonBorder {
                border: 3px solid rgba(0, 0, 0, 0) !important;
                color: rgba(0, 0, 0, 0) !important;
            }

            #tmp_headline1-37621 .elButtonBorder:hover {
                background-color: rgba(0, 0, 0, 0) !important;
                color: #000 !important;
            }
        </style>
        <input type="hidden" name="cf-state-county-dropdown-feature-enabled" value="true">
    </div>
    <style id="custom-css">
        #tmp_button-12135 {
            width: 80%;
            margin: 0 auto;
        }

        #button-92317 {
            width: 80%;
            margin: 0 auto;
        }
    </style>
    <input type="hidden" value="58788075" id="page-id">
    <input type="hidden" value="58788075" id="root-id">
    <input type="hidden" value="core" id="variant-check">
    <input type="hidden" value="3168172" id="user-id">
    <input type="hidden" value="" id="cf-cid">
    <input type="hidden" value="false" id="cf-page-oto">
    <input type="hidden" value="false" id="ff-can-use-payment-intent-on-funnel-payments">
    <script type="text/javascript">
        window.CFAppDomain = "app.clickfunnels.com"
        window.domainIsCFInternal = "false" == "true"
    </script>
    <script src="//lenashealthylifestyle.com/assets/lander.js"></script>
    <div id="fb-root"></div>
    <script async>
        window.addEventListener(\'load\', function() {
            (function(d, s, id) {
                if ($(\'.fbCommentsPlaceholder\').size() > 0) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, \'script\', \'facebook-jssdk\'));
        });
    </script>
    <script>
        window.cfFacebookInitOptions = {
            appId: 246441615530259,
            autoLogAppEvents: false,
            status: true,
            xfbml: true,
            version: "v3.3"
        };
        window.fbAsyncInit = function() {
            FB.init(window.cfFacebookInitOptions);

            // Iterates over all .fb-comments elements on the page, and renders them using the FB SDK.
            // It only runs if we have not told the FB.init() to render XFBML on page load
            var renderFacebookComments = function(renderXFBMLAtLoadTime) {
                // If we have already marked XFBML to render at page load time, do not proceed.
                if (renderXFBMLAtLoadTime) {
                    return;
                }

                var comments = document.getElementsByClassName(\'fb-comments\');
                var i = 0;
                var len = comments.length;
                var comment = null;
                for (; i < len; i++) {
                    comment = comments[i];
                    FB.XFBML.parse(comment.parentElement); // comments need to be rendered/parsed from their parent element.
                }
            }

            renderFacebookComments(true);
        };
    </script>
    <!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->
    <div class="nodoBadge">
        <a href="https://www.clickfunnels.com/?cf_affiliate_id=3245047&amp;aff_sub2=badge" target="_blank"><img src="//lenashealthylifestyle.com/hosted/images/3d/392630953c4119a324492bb1c05778/ClickfunnelsTag.png" alt="Powered By ClickFunnels.com" onclick="ga(\'send\', \'event\', \'Free Badge\', \'Click\', \'View ClickFunnels.com\');" data-lazy-loading="false" style="width: 164px;"></a>
    </div>
    <form target="_parent" data-cf-form-action="true" action="https://lenashealthylifestyle.com/10-second" method="post" id="cfAR" style="display:none">
        <span data-cf-form-fields="true"></span>
        <input id="cf_contact_name" name="contact[name]" data-cf-form-field="name" placeholder="name" data-stripe="name">
        <input id="cf_contact_first_name" name="contact[first_name]" data-cf-form-field="first_name" placeholder="first_name" data-recurly="first_name">
        <input id="cf_contact_last_name" name="contact[last_name]" data-cf-form-field="last_name" placeholder="last_name" data-recurly="last_name">
        <input id="cf_contact_email" name="contact[email]" data-cf-form-field="email" placeholder="email">
        <input id="cf_contact_phone" name="contact[phone]" data-cf-form-field="phone" placeholder="phone" data-recurly="phone">
        <input id="cf_contact_address" name="contact[address]" data-cf-form-field="address" placeholder="address" data-stripe="address_line1" data-recurly="address1">
        <input id="cf_contact_city" name="contact[city]" data-cf-form-field="city" placeholder="city" data-stripe="address_city" data-recurly="city">
        <input id="cf_contact_state" name="contact[state]" data-cf-form-field="state" placeholder="state" data-stripe="address_state" data-recurly="state">
        <input id="cf_contact_country" name="contact[country]" data-cf-form-field="country" placeholder="country" data-stripe="address_country" data-recurly="country">
        <input id="cf_contact_zip" name="contact[zip]" data-cf-form-field="zip" placeholder="ZIP" data-stripe="address_zip" data-recurly="postal_code">
        <input id="cf_contact_shipping_address" name="contact[shipping_address]" data-cf-form-field="shipping_address" placeholder="shipping_address" data-stripe="shipping_address">
        <input id="cf_contact_shipping_city" name="contact[shipping_city]" data-cf-form-field="shipping_city" placeholder="shipping_city" data-stripe="shipping_city">
        <input id="cf_contact_shipping_state" name="contact[shipping_state]" data-cf-form-field="shipping_state" placeholder="shipping_state" data-stripe="shipping_state">
        <input id="cf_contact_shipping_country" name="contact[shipping_country]" data-cf-form-field="shipping_country" placeholder="shipping_country" data-stripe="shipping_country">
        <input id="cf_contact_shipping_zip" name="contact[shipping_zip]" data-cf-form-field="shipping_zip" placeholder="shipping_ZIP" data-stripe="shipping_zip">
        <input id="cf_contact_vat_number" name="contact[vat_number]" data-cf-form-field="vat_number" data-recurly="vat_number">
        <input id="cf_contact_affiliate_id" name="contact[affiliate_id]" data-cf-form-field="affiliate_id" data-param="affiliate_id">
        <input id="cf_contact_cf_affiliate_id" name="contact[cf_affiliate_id]" data-cf-form-field="cf_affiliate_id" data-param="cf_affiliate_id">
        <input id="cf_cf_affiliate_id" name="cf_affiliate_id" data-param="cf_affiliate_id">
        <input id="cf_contact_affiliate_aff_sub" name="contact[aff_sub]" data-cf-form-field="aff_sub" data-param="aff_sub">
        <input id="cf_contact_affiliate_aff_sub2" name="contact[aff_sub2]" data-cf-form-field="aff_sub2" data-param="aff_sub2">
        <input id="cf_contact_time_zone" name="time_zone" data-cf-form-field="time_zone" placeholder="time_zone">
        <input id="utm_source" name="utm_source" data-cf-form-field="utm_source" data-param="utm_source">
        <input id="utm_medium" name="utm_medium" data-cf-form-field="utm_medium" data-param="utm_medium">
        <input id="utm_campaign" name="utm_campaign" data-cf-form-field="utm_campaign" data-param="utm_campaign">
        <input id="utm_term" name="utm_term" data-cf-form-field="utm_term" data-param="utm_term">
        <input id="utm_content" name="utm_content" data-cf-form-field="utm_content" data-param="utm_content">
        <input id="cf_uvid" name="cf_uvid" data-cf-form-field="cf_uvid">
        <input type="text" name="webinar_delay" id="webinar_delay" placeholder="Webinar Delay">
        <span data-cf-product-template="true">
<input type="radio" name="purchase[product_id]" value="" data-storage="false">
<input type="checkbox" name="purchase[product_ids][]" value="" data-storage="false">
</span>
        <span data-cf-product-variations-template="true">
<input type="checkbox" class="pvPurchaseProductName" name="purchase[product_variants][][product_id]" value="" data-storage="false">
<input type="checkbox" class="pvPurchaseProductVariantName" name="purchase[product_variants][][product_variant_id]" value="" data-storage="false">
<input type="input" class="pvPurchaseProductVariantQuantity" name="purchase[product_variants][][quantity]" value="" data-storage="false">
</span>
        <input id="cf_contact_number" data-stripe="number" data-storage="false" data-recurly="number">
        <input id="cf_contact_month" data-stripe="exp-month" data-storage="" data-recurly="month">
        <input id="cf_contact_year" data-stripe="exp-year" data-storage="" data-recurly="year">
        <input id="cf_contact_month_year" data-stripe="exp" data-storage="">
        <input id="cf_contact_cvc" data-stripe="cvc" data-storage="false" data-recurly="cvv">
        <input type="hidden" name="purchase[payment_method_nonce]" data-storage="false">
        <input type="hidden" name="purchase[order_saas_url]" data-storage="false">
        <input type="submit">
        <input name="contact[cart_affiliate_id]" value="" type="hidden" style="display:none;" data-param="affiliate">
    </form>
    <span class="countdown-time" style="display:none;"></span>
    <span class="webinar-last-time" style="display:none;"></span>
    <span class="webinar-ext" style="display:none;"></span>
    <span class="webinar-ot" style="display:none;"></span>
    <span class="contact-created" style="display:none;"></span>
    <script>
        window.addEventListener(\'load\', function() {});
    </script>
    <div class="otoloading" style="display: none;">
        <div class="otoloadingtext">
            <h2>Working...</h2>
            <div><i class="fa fa-spinner fa-spin"></i></div>
        </div>
    </div>
    <script type="text/javascript">
        document.createElement(\'video\');
        document.createElement(\'audio\');
        document.createElement(\'track\');
    </script>
    <style>
        #IntercomDefaultWidget {
            display: none;
        }

        .selectAW-date-demo,
        .elTicketAddToCalendar,
        .elTicketAddToCalendarV2 {
            display: none;
        }

        .video-js {
            padding-top: 56.25%;
        }

        .vjs-big-play-button,
        .vjs-control-bar {
            z-index: 10 !important;
        }

        .vjs-fullscreen {
            padding-top: 0;
        }
    </style>
    <script type="text/html" id="cfx_all_canada">
        <option value="">Select Province</option>
        <option value="">------------------------------</option>
        <option value="AB">Alberta</option>
        <option value="BC">British Columbia</option>
        <option value="MB">Manitoba</option>
        <option value="NB">New Brunswick</option>
        <option value="NL">Newfoundland and Labrador</option>
        <option value="NS">Nova Scotia</option>
        <option value="ON">Ontario</option>
        <option value="PE">Prince Edward Island</option>
        <option value="QC">Quebec</option>
        <option value="SK">Saskatchewan</option>
        <option value="NT">Northwest Territories</option>
        <option value="NU">Nunavut</option>
        <option value="YT">Yukon</option>
    </script>
    <script type="text/html" id="cfx_all_states">
        <option value="">Select State</option>
        <option value="">------------------------------</option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
    </script>
    <script type="text/html" id="cfx_all_countries">
        <option value="">Select Country</option>
        <option value="">------------------------------</option>
        <option value="United States of America">United States</option>
        <option value="Canada">Canada</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Ireland">Ireland</option>
        <option value="Australia">Australia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="">------------------------------</option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
        <option value="Brunei Darussalam">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Cote D\'ivoire">Cote D\'ivoire</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea-bissau">Guinea-bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea, Democratic People\'s Republic of">Korea, Democratic People\'s Republic of</option>
        <option value="Korea, Republic of">Korea, Republic of</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Lao People\'s Democratic Republic">Lao People\'s Democratic Republic</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macao">Macao</option>
        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
        <option value="Moldova, Republic of">Moldova, Republic of</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn">Pitcairn</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russian Federation">Russian Federation</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Helena">Saint Helena</option>
        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
        <option value="Thailand">Thailand</option>
        <option value="Timor-leste">Timor-leste</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Viet Nam">Viet Nam</option>
        <option value="Virgin Islands, British">Virgin Islands, British</option>
        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
        <option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
    </script>
    <script async>
        var page_key = \'tbpxzgyx3bgxkmyu\';
        var fid = \'12778497\';
        var fspos = \'10\';
        var fvrs = \'1\';
        var cf_tracker = cf_tracker || [];
        (function() {
            cf_key = \'gf9rlqbl\';
            page_key = \'tbpxzgyx3bgxkmyu\';
            serverUrl = \'//lenashealthylifestyle.com/images/background.png\';
            var cf = document.createElement(\'script\');
            cf.type = \'text/javascript\';
            cf.async = true;
            cf.src = \'//lenashealthylifestyle.com/vendor.js\';
            var s = document.getElementsByTagName(\'script\')[0];
            s.parentNode.insertBefore(cf, s);
        })();
    </script>
    <script type="text/javascript">
        function getURLParameter(e) {
            return decodeURIComponent((RegExp(e + "=(.+?)(&|$)").exec(location.search) || [, null])[1])
        }

        function getURLParameterExact(e) {
            for (var t = window.location.search.substring(1).split("&"), n = 0; n < t.length; n++) {
                var r = t[n].split("=");
                if (r[0] == e) return r[1]
            }
        }
    </script>
    <script type="text/javascript">
        window.addEventListener("load", function() {
            $(function() {
                "null" != getURLParameter("email") && ($(\'input[name="contact[email]"]\').val(getURLParameterExact("email")), $("[name=email]").val(getURLParameterExact("email"))), "null" != getURLParameter("name") && ($(\'input[name="contact[name]"]\').val(getURLParameterExact("name")), $("[name=name]").val(getURLParameterExact("name"))), "null" != getURLParameter("first_name") && ($(\'input[name="contact[first_name]"]\').val(getURLParameter("first_name")), $("[name=first_name]").val(getURLParameter("first_name"))), "null" != getURLParameter("last_name") && ($(\'input[name="contact[last_name]"]\').val(getURLParameter("last_name")), $("[name=last_name]").val(getURLParameter("last_name"))), "null" != getURLParameter("address_1") && ($(\'input[name="contact[address_1]"]\').val(getURLParameter("address")), $("[name=address_1]").val(getURLParameter("address_1"))), "null" != getURLParameter("address_2") && ($(\'input[name="contact[address_1]"]\').val(getURLParameter("address")), $("[name=address_2]").val(getURLParameter("address_2"))), "null" != getURLParameter("city") && ($(\'input[name="contact[city]"]\').val(getURLParameter("city")), $("[name=city]").val(getURLParameter("city"))), "null" != getURLParameter("state") && ($(\'input[name="contact[state]"]\').val(getURLParameter("state")), $("[name=state]").val(getURLParameter("state"))), "null" != getURLParameter("zip") && ($(\'input[name="contact[zip]"]\').val(getURLParameter("zip")), $("[name=zip]").val(getURLParameter("zip"))), "null" != getURLParameter("phone") && ($(\'input[name="contact[phone]"]\').val(getURLParameter("phone")), $("[name=phone]").val(getURLParameter("phone")))
            })
        });
    </script>
    <script type="text/javascript" src="//lenashealthylifestyle.com/assets/pushcrew.js" async="async"></script>
    <meta name=\'can_calculate_taxes\' content=\'false\'>
    <script src="https://app.cometly.com/j"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon=\'{"rayId":"7c5a68d08dececc5","token":"405b708a9b0242e88fda34dc27903686","version":"2023.4.0","si":100}\'
        crossorigin="anonymous"></script>
</body>

</html>
';
?>