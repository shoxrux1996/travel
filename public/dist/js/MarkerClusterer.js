/**
 * @name MarkerClusterer for Google Maps v3
 * @version version 1.0
 * @author Luke Mahe
 * @fileoverview
 * The library creates and manages per-zoom-level clusters for large amounts of
 * markers.
 * <br/>
 * This is a v3 implementation of the
 * <a href="http://gmaps-utility-library-dev.googlecode.com/svn/tags/markerclusterer/"
 * >v2 MarkerClusterer</a>.
 */


function d(a) {
    return function (b) {
        this[a] = b
    }
}
function f(a) {
    return function () {
        return this[a]
    }
}
var h;
function i(a, b, c) {
    this.extend(i, google.maps.OverlayView);
    this.b = a;
    this.a = [];
    this.l = [];
    this.V = [53, 56, 66, 78, 90];
    this.j = [];
    this.v = false;
    c = c || {};
    this.f = c.gridSize || 60;
    this.R = c.maxZoom || 30;
    this.j = c.styles || [];
    this.Q = c.imagePath || this.J;
    this.P = c.imageExtension || this.I;
    this.W = c.zoomOnClick || true;
    l(this);
    this.setMap(a);
    this.D = this.b.getZoom();
    var e = this;
    google.maps.event.addListener(this.b, "zoom_changed", function () {
        var g = e.b.mapTypes[e.b.getMapTypeId()].maxZoom, k = e.b.getZoom();
        if (!(k < 0 || k > g))if (e.D != k) {
            e.D = e.b.getZoom();
            e.m()
        }
    });
    google.maps.event.addListener(this.b, "bounds_changed", function () {
        e.i()
    });
    b && b.length && this.z(b, false)
}
h = i.prototype;
h.J = "http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/images/m";
h.I = "png";
h.extend = function (a, b) {
    return function (c) {
        for (property in c.prototype)this.prototype[property] = c.prototype[property];
        return this
    }.apply(a, [b])
};
h.onAdd = function () {
    if (!this.v) {
        this.v = true;
        m(this)
    }
};
h.O = function () {
};
h.draw = function () {
};
function l(a) {
    for (var b = 0, c; c = a.V[b]; b++)a.j.push({url: a.Q + (b + 1) + "." + a.P, height: c, width: c})
}
h = i.prototype;
h.u = f("j");
h.L = f("a");
h.N = f("a");
h.C = function () {
    return this.R || this.b.mapTypes[this.b.getMapTypeId()].maxZoom
};
h.A = function (a, b) {
    for (var c = 0, e = a.length, g = e; g !== 0;) {
        g = parseInt(g / 10, 10);
        c++
    }
    c = Math.min(c, b);
    return {text: e, index: c}
};
h.T = d("A");
h.B = f("A");
h.z = function (a, b) {
    for (var c = 0, e; e = a[c]; c++)n(this, e);
    b || this.i()
};
function n(a, b) {
    b.setVisible(false);
    b.setMap(null);
    b.q = false;
    b.draggable && google.maps.event.addListener(b, "dragend", function () {
        b.q = false;
        a.m();
        a.i()
    });
    a.a.push(b)
}
h = i.prototype;
h.o = function (a, b) {
    n(this, a);
    b || this.i()
};
h.S = function (a) {
    var b = -1;
    if (this.a.indexOf) b = this.a.indexOf(a); else for (var c = 0, e; e = this.a[c]; c++)if (e == a) b = c;
    if (b == -1)return false;
    this.a.splice(b, 1);
    a.setVisible(false);
    a.setMap(null);
    this.m();
    this.i();
    return true
};
h.M = function () {
    return this.l.length
};
h.getMap = f("b");
h.setMap = d("b");
h.t = f("f");
h.U = d("f");
function o(a, b) {
    var c = a.getProjection(), e = new google.maps.LatLng(b.getNorthEast().lat(), b.getNorthEast().lng()),
        g = new google.maps.LatLng(b.getSouthWest().lat(), b.getSouthWest().lng());
    e = c.fromLatLngToDivPixel(e);
    e.x += a.f;
    e.y -= a.f;
    g = c.fromLatLngToDivPixel(g);
    g.x -= a.f;
    g.y += a.f;
    e = c.fromDivPixelToLatLng(e);
    c = c.fromDivPixelToLatLng(g);
    b.extend(e);
    b.extend(c);
    return b
}
i.prototype.K = function () {
    this.m();
    this.a = []
};
i.prototype.m = function () {
    for (var a = 0, b; b = this.l[a]; a++)b.remove();
    for (a = 0; b = this.a[a]; a++) {
        b.q = false;
        b.setMap(null);
        b.setVisible(false)
    }
    this.l = []
};
i.prototype.i = function () {
    m(this)
};
function m(a) {
    if (a.v)for (var b = o(a, new google.maps.LatLngBounds(a.b.getBounds().getSouthWest(), a.b.getBounds().getNorthEast())), c = 0, e; e = a.a[c]; c++) {
        var g = false;
        if (!e.q && b.contains(e.getPosition())) {
            for (var k = 0, j; j = a.l[k]; k++)if (!g && j.getCenter() && j.s.contains(e.getPosition())) {
                g = true;
                j.o(e);
                break
            }
            if (!g) {
                j = new p(a);
                j.o(e);
                a.l.push(j)
            }
        }
    }
}
function p(a) {
    this.h = a;
    this.b = a.getMap();
    this.f = a.t();
    this.d = null;
    this.a = [];
    this.s = null;
    this.k = new q(this, a.u(), a.t())
}
p.prototype.o = function (a) {
    var b;
    a:if (this.a.indexOf) b = this.a.indexOf(a) != -1; else {
        b = 0;
        for (var c; c = this.a[b]; b++)if (c == a) {
            b = true;
            break a
        }
        b = false
    }
    if (b)return false;
    if (!this.d) {
        this.d = a.getPosition();
        r(this)
    }
    if (this.a.length == 0) {
        a.setMap(this.b);
        a.setVisible(true)
    } else if (this.a.length == 1) {
        this.a[0].setMap(null);
        this.a[0].setVisible(false)
    }
    a.q = true;
    this.a.push(a);
    if (this.b.getZoom() > this.h.C())for (a = 0; b = this.a[a]; a++) {
        b.setMap(this.b);
        b.setVisible(true)
    } else if (this.a.length < 2) s(this.k); else {
        a = this.h.u().length;
        b = this.h.B()(this.a, a);
        this.k.setCenter(this.d);
        a = this.k;
        a.w = b;
        a.ba = b.text;
        a.X = b.index;
        if (a.c) a.c.innerHTML = b.text;
        b = Math.max(0, a.w.index - 1);
        b = Math.min(a.j.length - 1, b);
        b = a.j[b];
        a.H = b.url;
        a.g = b.height;
        a.n = b.width;
        a.F = b.Z;
        a.anchor = b.Y;
        a.G = b.$;
        this.k.show()
    }
    return true
};
p.prototype.getBounds = function () {
    r(this);
    return this.s
};
p.prototype.remove = function () {
    this.k.remove();
    delete this.a
};
p.prototype.getCenter = f("d");
function r(a) {
    a.s = o(a.h, new google.maps.LatLngBounds(a.d, a.d))
}
p.prototype.getMap = f("b");
function q(a, b, c) {
    a.h.extend(q, google.maps.OverlayView);
    this.j = b;
    this.aa = c || 0;
    this.p = a;
    this.d = null;
    this.b = a.getMap();
    this.w = this.c = null;
    this.r = false;
    this.setMap(this.b)
}
q.prototype.onAdd = function () {
    this.c = document.createElement("DIV");
    if (this.r) {
        this.c.style.cssText = t(this, u(this, this.d));
        this.c.innerHTML = this.w.text
    }
    this.getPanes().overlayImage.appendChild(this.c);
    var a = this;
    google.maps.event.addDomListener(this.c, "click", function () {
        var b = a.p.h;
        google.maps.event.trigger(b, "clusterclick", [a.p]);
        if (b.W) {
            a.b.panTo(a.p.getCenter());
            a.b.fitBounds(a.p.getBounds())
        }
    })
};
function u(a, b) {
    var c = a.getProjection().fromLatLngToDivPixel(b);
    c.x -= parseInt(a.n / 2, 10);
    c.y -= parseInt(a.g / 2, 10);
    return c
}
q.prototype.draw = function () {
    if (this.r) {
        var a = u(this, this.d);
        this.c.style.top = a.y + "px";
        this.c.style.left = a.x + "px"
    }
};
function s(a) {
    if (a.c) a.c.style.display = "none";
    a.r = false
}
q.prototype.show = function () {
    if (this.c) {
        this.c.style.cssText = t(this, u(this, this.d));
        this.c.style.display = ""
    }
    this.r = true
};
q.prototype.remove = function () {
    this.setMap(null)
};
q.prototype.onRemove = function () {
    if (this.c && this.c.parentNode) {
        s(this);
        this.c.parentNode.removeChild(this.c);
        this.c = null
    }
};
q.prototype.setCenter = d("d");
function t(a, b) {
    var c = [];
    document.all ? c.push('filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="' + a.H + '");') : c.push("background:url(" + a.H + ");");
    if (typeof a.e === "object") {
        typeof a.e[0] === "number" && a.e[0] > 0 && a.e[0] < a.g ? c.push("height:" + (a.g - a.e[0]) + "px; padding-top:" + a.e[0] + "px;") : c.push("height:" + a.g + "px; line-height:" + a.g + "px;");
        typeof a.e[1] === "number" && a.e[1] > 0 && a.e[1] < a.n ? c.push("width:" + (a.n - a.e[1]) + "px; padding-left:" + a.e[1] + "px;") : c.push("width:" + a.n + "px; text-align:center;")
    } else c.push("height:" + a.g + "px; line-height:" + a.g + "px; width:" + a.n + "px; text-align:center;");
    c.push("cursor:pointer; top:" + b.y + "px; left:" + b.x + "px; color:" + (a.F ? a.F : "black") + "; position:absolute; font-size:" + (a.G ? a.G : 16) + "px;");
    return c.join("")
}
window.MarkerClusterer = i;
i.prototype.addMarker = i.prototype.o;
i.prototype.addMarkers = i.prototype.z;
i.prototype.clearMarkers = i.prototype.K;
i.prototype.getCalculator = i.prototype.B;
i.prototype.getGridSize = i.prototype.t;
i.prototype.getMap = i.prototype.getMap;
i.prototype.getMarkers = i.prototype.L;
i.prototype.getMaxZoom = i.prototype.C;
i.prototype.getStyles = i.prototype.u;
i.prototype.getTotalClusters = i.prototype.M;
i.prototype.getTotalMarkers = i.prototype.N;
i.prototype.redraw = i.prototype.i;
i.prototype.removeMarker = i.prototype.S;
i.prototype.resetViewport = i.prototype.m;
i.prototype.setCalculator = i.prototype.T;
i.prototype.setGridSize = i.prototype.U;
i.prototype.onAdd = i.prototype.onAdd;
i.prototype.draw = i.prototype.draw;
i.prototype.idle = i.prototype.O;
q.prototype.onAdd = q.prototype.onAdd;
q.prototype.draw = q.prototype.draw;
q.prototype.onRemove = q.prototype.onRemove;

