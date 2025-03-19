

$(function () {
    var e = {
        inited: !1,
        curWidth: 0,
        enableOn: 0,
        initialProgress: 0,
        cssClass: "animation-init",
        offsetScreen: {},
        anims: [],
        animsCount: 0,
        animOptsDefault: { duration: 1, easing: "linear", autoplay: !1 },
        setSettings: function () {
            (this.offsetScreen.top = $("header").outerHeight()), (this.curWidth = window.innerWidth), inView.offset(this.offsetScreen);
        },
        setAnimProgress: function (e) {
            var n = $(window),
                a = n.height() - this.offsetScreen.top,
                t = e.data("scroll-id"),
                n = e.offset().top - n.scrollTop() - this.offsetScreen.top,
                i = 0;
            return (i = this.anims[t].viewportFull ? 1 - (n + (e = e.outerHeight())) / (a + e) : 1 - n / a), 1 < (i /= this.anims[t].distance) ? 1 : i < 0 ? 0 : i;
        },
        setAnim: function (e, n, t) {
            var a,
                i,
                s = this,
                o = ("enableOn" in t ? t : s).enableOn,
                r = ("initialProgress" in t ? t : s).initialProgress,
                l = "viewportFull" in t && !0 === t.viewportFull,
                d = "distance" in t && 0 <= t.distance && t.distance <= 1 ? t.distance : 1;
            "scrollDynamic" === n
                ? ($(e).each(function () {
                    var e = $(this),
                        n = s.animsCount++,
                        a = $.extend({}, s.animOptsDefault, t.options, { targets: e[0] });
                    e.data("scroll-id", n),
                        (s.anims[n] = {}),
                        (s.anims[n].el = e),
                        (s.anims[n].enableOn = o),
                        (s.anims[n].initialProgress = r),
                        (s.anims[n].viewportFull = l),
                        (s.anims[n].distance = d),
                        (s.anims[n].opts = a),
                        (s.anims[n].anim = anime(a)),
                        s.curWidth >= o ? ((a = s.setAnimProgress(e)), s.anims[n].anim.seek(a)) : s.anims[n].anim.seek(r);
                }),
                    inView(e)
                        .on("enter", function (e) {
                            s.triggerAnim(e, "enter");
                        })
                        .on("exit", function (e) {
                            s.triggerAnim(e, "exit");
                        }))
                : "scrollClass" === n &&
                ((a = ("cssClass" in t ? t : s).cssClass),
                    (i = "triggerElement" in t && t.triggerElement),
                    s.curWidth >= o
                        ? inView(e).once("enter", function (e) {
                            (!1 !== i ? i : $(e)).addClass(a);
                        })
                        : (!1 !== i ? i : $(e)).addClass(a));
        },
        progressAnim: function (e) {
            var n = e.data("scroll-id");
            this.curWidth >= this.anims[n].enableOn && this.anims[n].anim.seek(this.setAnimProgress(e));
        },
        triggerAnim: function (e, n) {
            var a = this,
                t = $(e),
                e = $(window);
            "enter" === n
                ? e
                    .on("scroll." + t.data("scroll-id"), function () {
                        a.progressAnim(t);
                    })
                    .trigger("scroll")
                : "exit" === n && e.off("scroll." + t.data("scroll-id"));
        },
        updateAnims: function () {
            var n = this;
            n.setSettings(),
                n.anims.forEach(function (e) {
                    n.curWidth >= e.enableOn ? (e.anim.seek(e.initialProgress), (e.anim = anime(e.opts)), n.progressAnim(e.el)) : e.anim.seek(e.initialProgress);
                });
        },
        init: function () {
            var e = this;
            (e.inited = !0),
                e.setSettings(),
                $(window).on("resize", function () {
                    e.updateAnims();
                });
        },
    };
    e.init(),
        e.setAnim(".card-element-wrap", "scrollClass", {}),
        e.setAnim(".card-element-decor", "scrollDynamic", {
            viewportFull: !0,
            enableOn: 640,
            options: {
                translateY: function (e) {
                    var n = 1;
                    return "-" + 9.5 * (n = $(e).hasClass("ced-second") ? 2 : n) + "%";
                },
                translateX: function (e) {
                    var n = 1;
                    return "-" + 9.5 * (n = $(e).hasClass("ced-second") ? 2 : n) + "%";
                },
            },
        }),
        e.setAnim(".svp-card-wrap", "scrollDynamic", { viewportFull: !0, enableOn: 640, options: { translateY: "47%", rotate: "-12deg" } }),
        e.setAnim(".additional-info", "scrollDynamic", { distance: 0.8, enableOn: 992, initialProgress: 1, options: { translateX: ["-14.5%", 0], opacity: [0, 1] } }),
        e.setAnim(".tsw-anim .tile-service-info", "scrollDynamic", {
            viewportFull: !0,
            enableOn: 640,
            options: {
                translateY: function (e) {
                    window.innerWidth;
                    var e = $(e),
                        n = e.closest(".tile-service").outerHeight(),
                        a = e.outerHeight();
                    return -(n - 2 * parseInt(e.css("bottom"), 10) - a);
                },
            },
        }),
        e.setAnim(".bdr-wrap", "scrollClass", { enableOn: 640 }),
        e.setAnim("#animation-tile-card-info", "scrollClass", { triggerElement: $(".tile-card-info-wrap") }),
        e.setAnim(".tile-card-decor", "scrollDynamic", {
            viewportFull: !0,
            enableOn: 992,
            options: {
                translateX: function (e) {
                    var n = 1;
                    return "+" + 6 * (n = $(e).hasClass("tcd-second") ? 2 : n) + "%";
                },
            },
        }),
        e.setAnim(".block-brand #svg-inline-brand", "scrollClass", {}),
        e.setAnim(".tile-decor-substrate-anim > div", "scrollDynamic", { viewportFull: !0, enableOn: 768, initialProgress: 0.5, options: { translateY: ["20%", "-20%"] } }),
        e.setAnim("#tiles-cascade-init", "scrollClass", { enableOn: 480 }),
        e.setAnim(".tntd-decor-wrap .tntd-decor-item", "scrollDynamic", { distance: 0.7, enableOn: 768, initialProgress: 1, options: { easing: "easeOutQuad", translateX: "-100%" } }),
        e.setAnim("#compare-table-highlight", "scrollClass", { enableOn: 992, triggerElement: $(".tile-table-column-highlight") }),
        e.setAnim("#cta-anim", "scrollClass", { triggerElement: $(".section-cta") });
}), $(function () {
    var e, a, t;
    $("#money-slider").length &&
        ((e = document.getElementById("money-slider")),
            noUiSlider.create(e, {
                start: 25e4,
                connect: [!0, !1],
                range: { min: [1e5, 5e3], "25%": [25e4, 5e3], "50%": [5e5, 1e4], "75%": [1e6, 5e4], max: 5e6 },
                format: wNumb({ decimals: 0, thousand: " ", prefix: "$" }),
                pips: { mode: "range", density: 100, format: wNumb({ decimals: 0, prefix: "$", thousand: " " }) },
            }),
            (a = document.getElementById("amount-value")),
            (t = document.getElementById("calculator-result")),
            e.noUiSlider.on("update", function (e, n) {
                (a.value = e[n]), (t.innerHTML = 0.03 * parseInt(e[n].replace(/\D/g, ""), 10));
                e = ((parseInt(e[n].replace(/\D/g, ""), 10) - 1e5) / 5e6) * 100 * 5.5;
                100 < e && (e = 100), anime({ targets: $(".tile-card-info-bg")[0], top: -e + "%", duration: 0 });
            }),
            a.addEventListener("change", function () {
                e.noUiSlider.set(this.value);
            }));
});