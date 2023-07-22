(function(d) {
	var i = function() {
		function t(t, e) {
			this.settings = d.extend(true, d.fn.PicCarousel.defaults, e || {});
			this.element = t;
			this.init()
		}
		t.prototype = {
			init: function() {
				var t = this;
				t.poster = t.element;
				t.posterItemMain = t.poster.find("ul.poster-list");
				t.nextBtn = t.poster.find("div.poster-next-btn");
				t.prevBtn = t.poster.find("div.poster-prev-btn");
				t.posterItems = t.poster.find("li.poster-item");
				if(t.posterItems.size() % 2 == 0) {
					t.posterItemMain.append(t.posterItems.ep(0).clone());
					t.posterItems = t.posterItemMain.children
				}
				t.posterFirstItem = t.posterItems.first();
				t.posterLastItem = t.posterItems.last();
				t.rotateFlag = true;
				t.setSettingValue();
				t.setPosterPost();
				t.nextBtn.click(function() {
					if(t.rotateFlag) {
						t.rotateFlag = false;
						t.carouseRotate("left")
					}
				});
				t.prevBtn.click(function() {
					if(t.rotateFlag) {
						t.rotateFlag = false;
						t.carouseRotate("right")
					}
				});
				if(t.settings.autoPlay) {
					t.autoPlay();
					t.poster.hover(function() {
						window.clearInterval(t.timer)
					}, function() {
						t.autoPlay()
					})
				}
			},
			autoPlay: function() {
				var t = this;
				t.timer = window.setInterval(function() {
					t.nextBtn.click()
				}, t.settings.delay)
			},
			carouseRotate: function(t) {
				var h = this;
				var c = [];
				if(t === "left") {
					h.posterItems.each(function() {
						var t = d(this),
							e = t.prev().get(0) ? t.prev() : h.posterLastItem,
							s = e.width(),
							i = e.height(),
							n = e.css("zIndex"),
							o = e.css("opacity"),
							r = e.css("left"),
							a = e.css("top");
						c.push(n);
						t.animate({
							width: s,
							height: i,
							opacity: o,
							left: r,
							top: a
						}, h.settings.speed, function() {
							h.rotateFlag = true
						})
					});
					h.posterItems.each(function(t) {
						d(this).css("zIndex", c[t])
					})
				} else if(t === "right") {
					h.posterItems.each(function() {
						var t = d(this),
							e = t.next().get(0) ? t.next() : h.posterFirstItem,
							s = e.width(),
							i = e.height(),
							n = e.css("zIndex"),
							o = e.css("opacity"),
							r = e.css("left"),
							a = e.css("top");
						c.push(n);
						t.animate({
							width: s,
							height: i,
							opacity: o,
							left: r,
							top: a
						}, h.settings.speed, function() {
							h.rotateFlag = true
						})
					});
					h.posterItems.each(function(t) {
						d(this).css("zIndex", c[t])
					})
				}
			},
			setPosterPost: function() {
				var s = this;
				var t = s.posterItems.slice(1),
					e = t.size() / 2,
					i = t.slice(0, e),
					n = Math.floor(s.posterItems.size() / 2),
					o = t.slice(e);
				var r = s.settings.posterWidth,
					a = s.settings.posterHeight,
					h = (s.settings.width - s.settings.posterWidth) / 2 / n;
				var c = (s.settings.width - s.settings.posterWidth) / 2;
				var l = c + r;
				i.each(function(t) {
					n--;
					r = r * s.settings.scale;
					a = a * s.settings.scale;
					var e = t;
					d(this).css({
						zIndex: n,
						width: r,
						height: a,
						opacity: 1 / ++e,
						left: l + ++t * h - r,
						top: s.setVertucalAlign(a)
					})
				});
				var p = i.last().width(),
					g = i.last().height(),
					f = Math.floor(s.posterItems.size() / 2);
				o.each(function(t) {
					d(this).css({
						zIndex: t,
						width: p,
						height: g,
						opacity: 1 / f,
						left: t * h,
						top: s.setVertucalAlign(g)
					});
					p = p / s.settings.scale;
					g = g / s.settings.scale;
					f--
				})
			},
			setVertucalAlign: function(t) {
				var e = this;
				var s = e.settings.verticalAlign,
					i = 0;
				if(s === "middle") {
					i = (e.settings.height - t) / 2
				} else if(s === "top") {
					i = 0
				} else if(s === "bottom") {
					i = e.settings.height - t
				} else {
					i = (e.settings.height - t) / 2
				}
				return i
			},
			setSettingValue: function() {
				var t = this;
				t.poster.css({
					width: t.settings.width,
					height: t.settings.height
				});
				t.posterItemMain.css({
					width: t.settings.width,
					height: t.settings.height
				});
				var e = (t.settings.width - t.settings.posterWidth) / 2;
				t.nextBtn.css({
					width: e,
					height: t.settings.height,
					zIndex: Math.ceil(t.posterItems.size() / 2)
				});
				t.prevBtn.css({
					width: e,
					height: t.settings.height,
					zIndex: Math.ceil(t.posterItems.size() / 2)
				});
				t.posterFirstItem.css({
					width: t.settings.posterWidth,
					height: t.settings.posterHeight,
					top: t.setVertucalAlign(t.settings.posterHeight),
					left: e,
					zIndex: Math.floor(t.posterItems.size() / 2)
				})
			}
		};
		return t
	}();
	d.fn.PicCarousel = function(s) {
		return this.each(function() {
			var t = d(this),
				e = t.data("PicCarousel");
			if(!e) {
				e = new i(t, s);
				t.data("PicCarousel", e)
			}
		})
	};
	d.fn.PicCarousel.defaults = {
		width: 1183,
		height: 560,
		posterWidth: 430,
		posterHeight: 560,
		scale: .9,
		speed: 300,
		autoPlay: false,
		delay: 500,
		verticalAlign: "middle"
	}
})(jQuery);