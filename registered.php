<?php
if($_GET['action']=='registered'){
    $vmid = $_GET['id'];
    $message = 'You have successfully registered for the event.</p><p><strong>Your VM ID is : ' . $vmid . '. </strong></p><p>A copy of the ID is also sent to your mail. Please provide your VM ID when attending the event.';
    $title = 'Registration Complete';
    $typeswal = 'success';
    $messageswal = 'You have registered successfully! Your VM ID is : <strong>' .  $vmid . '</strong>';
    $titleswal = 'Good Job!';
}
elseif($_GET['action']='error'){
    $message = 'You dun goofed boy ( ͡° ͜ʖ ͡°)';
    $errorid = $_GET['message'];
    if($errorid=='1'){
        $message = "Server Error 500. Contact Site for assistance.";
            $typeswal = 'error';
    $messageswal = 'Server Error 500. Contact Site for assistance.';
    $titleswal = 'Oops!';
    }
    elseif($errorid=='2'){
        $message = "ID Already Registered. Please confirm you are not registering again. If you need to change your details contact us.";
                    $typeswal = 'error';
    $messageswal = 'ID Already Registered. Please confirm you are not registering again. If you need to change your details contact us.';
    $titleswal = 'Oops!';
    }
    elseif($errorid=='3'){
        $message = "Server Error 500. Contact Site for assistance.";
                    $typeswal = 'error';
    $messageswal = 'Server Error 500. Contact Site for assistance.';
    $titleswal = 'Oops!';
    }
    $title = 'Something went wrong';
    $typeswal = 'error';
}
else {
    $message = "You don goofed boy";
    $messageswal = 'You dun goofed boy ( ͡° ͜ʖ ͡°)';
    $titleswal = '( ͡° ͜ʖ ͡°)';
}
?>
<!DOCTYPE html>
<!--[if IE 7]> <html class="ie ie7 ltie10 ltie9 ltie8"><![endif]-->
<!--[if IE 8]> <html class="ie ie8 ltie10 ltie9"><![endif]-->
<!--[if gt IE 8]> <html class="ie ltie10 gtie8"><![endif]-->
<!--[if !IE]><!-->
<html class="  no-js flexbox cssfilters  no-js" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="">
    <meta name="description" content="Register for the event.">
    <meta property="fb:page_id" content="1859517164319298">
    <title>Registeration</title>
    <link rel="icon" type="image/png" href="./dist/img/VM_Grey-01.png">
    <link href="./dist/css/style.min.css" media="all" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.min.css" media="all" rel="stylesheet">
    <script async="" src="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.min.js"></script>
    <script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script>
        ! function (e) {
            function n(o) {
                if (t[o]) return t[o].exports;
                var r = t[o] = {
                    exports: {},
                    id: o,
                    loaded: !1
                };
                return e[o].call(r.exports, r, r.exports, n), r.loaded = !0, r.exports
            }
            var t = {};
            return n.m = e, n.c = t, n.p = "/dist/js/", n(0)
        }({
            0: function (e, n, t) {
                "use strict";
                t(191);
                var o = document.documentElement.className.indexOf("page-editor") != -1;
                document.documentElement.className = document.documentElement.className.replace(/no-js/g, "") +
                    " js",
                    setTimeout(function () {
                        window.isJsLoaded || o || (document.documentElement.className = document.documentElement
                            .className.replace(
                                /js/g, " no-js"))
                    }, 8e3)
            },
            191: function (e, n) {
                "use strict";
                window.Modernizr = function (e, n, t) {
                    function o(e) {
                        w.cssText = e
                    }

                    function r(e, n) {
                        return typeof e === n
                    }

                    function i(e, n) {
                        return !!~("" + e).indexOf(n)
                    }

                    function s(e, n) {
                        for (var o in e) {
                            var r = e[o];
                            if (!i(r, "-") && w[r] !== t) return "pfx" != n || r
                        }
                        return !1
                    }

                    function c(e, n, o) {
                        for (var i in e) {
                            var s = n[e[i]];
                            if (s !== t) return o === !1 ? e[i] : r(s, "function") ? s.bind(o || n) : s
                        }
                        return !1
                    }

                    function u(e, n, t) {
                        var o = e.charAt(0).toUpperCase() + e.slice(1),
                            i = (e + " " + E.join(o + " ") + o).split(" ");
                        return r(n, "string") || r(n, "undefined") ? s(i, n) : (i = (e + " " + N.join(o +
                                " ") + o).split(" "),
                            c(i, n, t))
                    }
                    var a, d, f, l = "2.8.3",
                        p = {},
                        m = !0,
                        v = n.documentElement,
                        x = "modernizr",
                        y = n.createElement(x),
                        w = y.style,
                        j = ({}.toString, " -webkit- -moz- -o- -ms- ".split(" ")),
                        b = "Webkit Moz O ms",
                        E = b.split(" "),
                        N = b.toLowerCase().split(" "),
                        h = {},
                        T = [],
                        g = T.slice,
                        z = {}.hasOwnProperty;
                    f = r(z, "undefined") || r(z.call, "undefined") ? function (e, n) {
                        return n in e && r(e.constructor.prototype[n], "undefined")
                    } : function (e, n) {
                        return z.call(e, n)
                    }, Function.prototype.bind || (Function.prototype.bind = function (e) {
                        var n = this;
                        if ("function" != typeof n) throw new TypeError;
                        var t = g.call(arguments, 1),
                            o = function r() {
                                if (this instanceof r) {
                                    var o = function () {};
                                    o.prototype = n.prototype;
                                    var i = new o,
                                        s = n.apply(i, t.concat(g.call(arguments)));
                                    return Object(s) === s ? s : i
                                }
                                return n.apply(e, t.concat(g.call(arguments)))
                            };
                        return o
                    }), h.flexbox = function () {
                        return u("flexWrap")
                    };
                    for (var M in h) f(h, M) && (d = M.toLowerCase(), p[d] = h[M](), T.push((p[d] ? "" :
                        "no-") + d));
                    return p.addTest = function (e, n) {
                            if ("object" == typeof e)
                                for (var o in e) f(e, o) && p.addTest(o, e[o]);
                            else {
                                if (e = e.toLowerCase(), p[e] !== t) return p;
                                n = "function" == typeof n ? n() : n, "undefined" != typeof m && m && (v.className +=
                                    " " + (n ?
                                        "" : "no-") + e), p[e] = n
                            }
                            return p
                        }, o(""), y = a = null, p._version = l, p._prefixes = j, p._domPrefixes = N, p._cssomPrefixes =
                        E, p.testProp =
                        function (e) {
                            return s([e])
                        }, p.testAllProps = u, v.className = v.className.replace(/(^|\s)no-js(\s|$)/,
                            "$1$2") + (m ? " js " +
                            T.join(" ") : ""), p
                }(window, window.document), Modernizr.addTest("cssfilters", function () {
                    var e = document.createElement("div");
                    return e.style.cssText = Modernizr._prefixes.join("filter:blur(2px); "), !!e.style.length &&
                        (void 0 ===
                            document.documentMode || document.documentMode > 9)
                })
            }
        });
    </script>
    <noscript>
        &lt;style type="text/css"&gt; .image { display: none; } &lt;/style&gt;
    </noscript>
    <script>
        window.activePage = "7456b6a9-b67b-4ead-bca0-e1bb8db06953";
        window.activeSection = "1ca4f2a1-7ce8-4270-aef9-b9bf5a4c48c2";
    </script>
    <script>
        window.currency = '£';
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        &lt;iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQML8Z9" height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google Tag Manager -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-89694180-1', 'auto');
        ga('send', 'pageview');
    </script>
    <style>
        #randomlist {
            width: 100%;
            border-radius: 6px;
            padding: 16px;
            border: 1px solid #9f9f9f;
            font-size: 1.25em;
            background: #fff;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url(./dist/img/arrow.png) no-repeat right;
            background-size: 25px 25px;
        }
        
        #artherlist {
            margin-bottom: 32px;
        }
    </style>
    <!-- End Google Tag Manager -->
    <meta name="VIcurrentDateTime" content="636183614432700155">
</head>

<body>
    <nav class="mobile-header" data-component="mobile-header">
        <div class="mobile-header__inner">
            <div class="mobile-header__logo-container">
                <a class="mobile-header__logo" href="./index.html">Verba Maximus</a>
            </div>
            <div class="mobile-header__center">
            </div>
            <div class="mobile-header__menu">
                <svg class="mobile-header__button" version="1.1" x="0" y="0" width="30" height="25" viewBox="0 0 30 25" data-reactid=".0.$provider.0.2.0.0.1.2.1">
                    <path d="M0 14h30v-3H0V14zM0 25h30v-3H0V25zM0 0v3h30V0H0z" data-reactid=".0.$provider.0.2.0.0.1.2.1.0"></path>
                </svg>
            </div>
        </div>
    </nav>
    <div class="site" data-component="site">
        <div class="site__content">
            <div class="site__content-inner">
                <section class="header-banner header-banner--standard" data-component="header-banner">
                    <div class="header-banner__image-container">
                        <noscript class="noscript-image">
                            &lt;div role="img" aria-label="" title="" class="header-banner__image" style="background-image: url('./dist/img/background/clock5.jpg');"&gt;&lt;/div&gt;
                        </noscript>
                        <div role="img" aria-label="" title="" class="header-banner__image image image--loaded" data-src="./dist/img/background/clock5.jpg?mw=1280"
                            data-max-width="1649" data-viewport="0.80" data-aspect="2.75" data-aspect-target="1.00" style="background-image: url(&quot;./dist/img/background/clock5.jpg?mw=1280&quot;);"></div>
            </div>
            <div class="header-banner__inner">
                <span class="header-banner__pin"></span>
                <span class="header-banner__section">Event and Proshow Registeration</span>
                <h1 class="header-banner__title header-banner__title--small ">Registeration</h1>
                <div class="header-banner__path-start"></div>
            </div>
            </section>
            <section class="breadcrumb" data-component="breadcrumb">
                <ul class="breadcrumb__items">
                    <li class="breadcrumb__item">
                        <a class="breadcrumb__link" href="./index.html">Home</a>
                    </li>
                    <li class="breadcrumb__item">
                        <a class="breadcrumb__link" href="./register.html">Registeration</a>
                    </li>
                </ul>
            </section>
            <section class="body-text body-text--visible" data-component="body-text">
                <div class="body-text__inner">
                    <h2 class="body-text__title">
                        <?php echo $title; ?>
                    </h2>
                    <div class="body-text__wysiwyg">
                        <p>
                            <?php echo $message; ?>
                        </p>
                    </div>
                    <a href="./register.html" class="inpage-cta__link">Register Again</a>
                    <script>
                        swal({
                            title: '<b>' + '<?php echo $titleswal ?>' + '</b>',
                            type: '<?php echo $typeswal ?>',
                            html: '<?php echo $messageswal ?>'
                        })
                    </script>
            </section>
            <footer class="page-footer">
                <div class="page-footer__inner">
                    <div class="page-footer__our-address">
                        <h5 class="page-footer__title">Our Address</h5>
                        <ul class="page-footer__addresses">
                            <li class="page-footer__address">
                                <span class="page-footer__key">Our Campus</span>
                                <span class="page-footer__value">BITS, Pilani - Hyderabad Campus, Jawahar Nagar, Shameerpet Mandal,Hyderabad-500078, Telangana, India</span>
                            </li>
                            <li class="page-footer__address">
                                <span class="page-footer__key">Email</span>
                                <span class="page-footer__value">verbamaximus@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="page-footer__contact">
                        <h5 class="page-footer__title">GET IN TOUCH</h5>
                        <ul class="page-footer__numbers">
                            <li class="page-footer__number">
                                <span class="page-footer__key">Official</span>
                                <a class="page-footer__value" href="tel:01273691642">80960 63146</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <aside class="page-footer__footer">
                    <div class="page-footer__awards">
                        <a href="./index.html" class="page-footer__award"><img src="./dist/img/VM_Grey-01.png" alt="VM Logo" height="32" width="32" hspace="7" class="page-footer__award-image"></a>
                        <a href="http://www.bits-finnovate.org/" class="page-footer__award"><img src="./dist/img/finnovate.png" alt="Finnovate" height="32" width="32" hspace="7" class="page-footer__award-image"></a>
                    </div>
                    <div class="page-footer__center">
                        <span class="page-footer__copyright">© 2017 Verba Maximus 2017</span>
                        <a class="page-footer__link" href="./events.html">Events</a>
                        <a class="page-footer__link" href="./team.html">The Team</a>
                        <a class="page-footer__link" href="./teamoc.html">The Team (OC)</a>
                        <a class="page-footer__link" href="./contact-us.html">Contact Us</a>
                        <a class="page-footer__link" href="./terms.html">Terms and Conditions</a>
                        <a class="page-footer__link" href="http://www.bits-finnovate.org/">Bits Finnovate</a>
                    </div>
                    <div class="page-footer__social">
                        <span class="page-footer__follow">Follow us</span>
                        <a href="https://www.facebook.com/verbamaximus" class="page-footer__social-link" target="_blank"></a>
                        <a href="https://twitter.com/verbamaximus" target="_blank" class="page-footer__social-link" title="Twitter link"></a>
                        <a href="https://www.youtube.com/channel/UCftyIPGFyJ6y3LnYvWHx4SA" class="page-footer__social-link" target="_blank"></a>
                        <a href="https://www.instagram.com/vm.bitsh/" class="page-footer__social-link" target="_blank"></a>
                    </div>
                </aside>
            </footer>
            </div>
        </div>
        <div class="site__navigation">
            <div class="site__navigation-inner">
                <aside class="sticky" data-component="sticky">
                    <div class="sticky__closed">
                        <div class="sticky__closed-outer">
                            <div class="sticky__closed-inner">
                                <div class="sticky__button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky__open">
                        <div class="sticky__open-inner">
                        </div>
                    </div>
                </aside>
                <nav class="navigation navigation--uninitialized" data-component="navigation" data-sections="[{&quot;title&quot;:&quot;Home&quot;,&quot;url&quot;:&quot;./index&quot;,&quot;id&quot;:&quot;47a2e2da-bebc-4873-af5c-531dc0ef43bf&quot;,&quot;type&quot;:null,&quot;parent&quot;:null,&quot;primaryLinks&quot;:[],&quot;secondaryLinks&quot;:[],&quot;popoutMenu&quot;:true,&quot;hasChildren&quot;:true,&quot;hasPrimaryLinks&quot;:true,&quot;hasSecondaryLinks&quot;:true,&quot;target&quot;:&quot;47a2e2da-bebc-4873-af5c-531dc0ef43bf&quot;}]">
                    <a class="navigation__logo" href="./index.html">Verba Maximus</a>
                    <div class="navigation__nano nano">
                        <div class="navigation__nano-content nano-content">
                            <ul class="navigation__sections"></ul>
                            <li class="navigation__section navigation__section--active" data-id="1ca4f2a1-7ce8-4270-aef9-b9bf5a4c48c2" data-type="">
                                <div class="navigation__back">
                                    <a class="navigation__link" href="./index.html" data-target="47a2e2da-bebc-4873-af5c-531dc0ef43bf" data-back-link="">Home</a>
                                </div>
                                <div class="navigation__browse">
                                    <a class="navigation__link" href="./register.html" data-id="1ca4f2a1-7ce8-4270-aef9-b9bf5a4c48c2">Register</a>
                                </div>
                                <div class="navigation__separator"></div>
                            </li>
                            <footer class="navigation__footer">
                                <a class="navigation__phone" href="tel:80960 63146">
                                    <span class="navigation__phone-label">Tel</span>
                                    <span class="navigation__phone-number">80960 63146</span>
                                </a>
                                <a class="navigation__email" href="mailto:verbamaximus@gmail.com">
                                    <span class="navigation__email-text">verbamaximus@gmail.com</span>
                                </a>
                            </footer>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script>
        ! function (e) {
            function t(r) {
                if (a[r]) return a[r].exports;
                var i = a[r] = {
                    exports: {},
                    id: r,
                    loaded: !1
                };
                return e[r].call(i.exports, i, i.exports, t), i.loaded = !0, i.exports
            }
            var a = {};
            return t.m = e, t.c = a, t.p = "/dist/js/", t(0)
        }({
            0: function (e, t, a) {
                "use strict";
                var r = a(2)["default"],
                    i = a(61),
                    o = r(i);
                (0, o["default"])()
            },
            2: function (e, t) {
                t["default"] = function (e) {
                    return e && e.__esModule ? e : {
                        "default": e
                    }
                }, t.__esModule = !0
            },
            61: function (e, t, a) {
                "use strict";

                function r(e) {
                    var t = (0, s.getImageWidth)(e),
                        a = l[e.url.toLowerCase()];
                    a || (a = l[e.url.toLowerCase()] = []), a.indexOf(t) == -1 && a.push(t)
                }

                function i(e, t) {
                    var a = l[e.url.toLowerCase()].reduce(function (e, t) {
                            return e > t ? e : t
                        }),
                        r = (0, s.responsiveUrl)(e, a);
                    (0, s.loadImage)(r, v(e, r))
                }

                function o() {
                    c.forEach(r), c.forEach(i), c = []
                }

                function n(e) {
                    var t = parseFloat(e.getAttribute("data-viewport")),
                        a = parseFloat(e.getAttribute("data-aspect-target")),
                        r = e.offsetWidth,
                        i = e.offsetHeight;
                    return r && i && (t = r / window.innerWidth, a = r / i), {
                        viewport: t,
                        aspectTarget: a
                    }
                }

                function u(e, t, a) {
                    if (void 0 === t && (t = !0), e && e.className && e.className.indexOf("image--loaded") == -
                        1) {
                        var o = e.getAttribute("data-src"),
                            u = n(e),
                            d = u.viewport,
                            s = u.aspectTarget,
                            l = parseInt(e.getAttribute("data-max-width")),
                            v = parseInt(e.getAttribute("data-min-width")),
                            f = parseFloat(e.getAttribute("data-aspect")),
                            p = parseFloat(e.getAttribute("data-focal-x")),
                            g = parseFloat(e.getAttribute("data-focal-y"));
                        0 == p || isNaN(p) || 0 == g || isNaN(g) || (e.style.backgroundPositionX = 100 * p +
                            "%", e.style.backgroundPositionY =
                            100 * g + "%");
                        var m = {
                            element: e,
                            url: o,
                            viewport: d,
                            maxWidth: l,
                            minWidth: v,
                            aspectSource: f,
                            aspectTarget: s,
                            callback: a
                        };
                        t ? c.push(m) : (r(m), i(m))
                    }
                }

                function d() {
                    var e = arguments.length <= 0 || void 0 === arguments[0] ? document : arguments[0];
                    c = [];
                    for (var t = e.getElementsByClassName("image"), a = 0; a < t.length; ++a) {
                        for (var r = t[a], i = r.parentElement, n = !0; i;) {
                            if (i.className.indexOf("image-no-load") != -1) {
                                n = !1;
                                break
                            }
                            i = i.parentElement
                        }
                        n && u(r)
                    }
                    o()
                }
                Object.defineProperty(t, "__esModule", {
                    value: !0
                }), t.resolveImage = u, t["default"] = d;
                var s = a(62),
                    l = {},
                    c = [],
                    v = function (e, t) {
                        return function (a, r, i) {
                            var o = e.element;
                            return a ? (o.className += " image--error", i()) : (o.setAttribute("data-src",
                                    t), o.style.backgroundImage =
                                "url('" + t + "')", o.className += " image--loaded", (0, s.preRenderImage)
                                (t, i), void(e.callback &&
                                    e.callback()))
                        }
                    }
            },
            62: function (e, t) {
                "use strict";

                function a(e) {
                    var t = e.viewport,
                        a = void 0 === t ? 1 : t,
                        r = e.maxWidth,
                        i = void 0 === r ? 0 : r,
                        o = e.minWidth,
                        d = void 0 === o ? 0 : o,
                        s = e.usePixelDensity,
                        l = void 0 !== s && s,
                        c = e.aspectSource,
                        v = void 0 === c ? 1 : c,
                        f = e.aspectTarget,
                        p = void 0 === f ? 1 : f,
                        g = window.innerWidth * a,
                        m = g;
                    return v > p && (g = g * v / p, g += (m - g) * (1 - u)), l && (g *= window.devicePixelRatio ||
                            1), g =
                        Math.ceil(g / n) * n, i > 0 && g >= i && (g = i), d > 0 && g < d && (g = d), g
                }

                function r(e) {
                    var t = e.url,
                        r = e.viewport,
                        i = void 0 === r ? 1 : r,
                        o = e.maxWidth,
                        n = void 0 === o ? 0 : o,
                        u = e.minWidth,
                        d = void 0 === u ? 0 : u,
                        s = e.usePixelDensity,
                        l = void 0 !== s && s,
                        c = e.aspectSource,
                        v = void 0 === c ? 1 : c,
                        f = e.aspectTarget,
                        p = void 0 === f ? 1 : f,
                        g = arguments.length <= 1 || void 0 === arguments[1] ? null : arguments[1],
                        m = /(.*)\?.*/g.exec(t);
                    m && (t = m[1]);
                    var h = g ? g : a({
                        viewport: i,
                        maxWidth: n,
                        minWidth: d,
                        usePixelDensity: l,
                        aspectSource: v,
                        aspectTarget: p
                    });
                    return t + ("?mw=" + h)
                }

                function i(e, t) {
                    var a = !(arguments.length <= 2 || void 0 === arguments[2]) && arguments[2],
                        r = new window.Image;
                    r.onload = function (e) {
                        t(null, r, d(r)), a || d(r)
                    }, r.onerror = function (e) {
                        t(e, r, d(r)), a || d(r)
                    }, r.src = e
                }

                function o(e, t) {
                    t()
                }
                Object.defineProperty(t, "__esModule", {
                    value: !0
                }), t.getImageWidth = a, t.responsiveUrl = r, t.loadImage = i, t.preRenderImage = o;
                var n = 128,
                    u = .75,
                    d = function (e) {
                        return function (t) {
                            t || (e.onload = null, e.onerror = null, e = null)
                        }
                    }
            }
        });
    </script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1859517164319298',
                xfbml: true,
                version: 'v2.7'
            });
            FB.AppEvents.logPageView();
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>