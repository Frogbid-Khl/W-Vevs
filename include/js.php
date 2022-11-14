
<script src="core/third-party/jquery/jquery.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha512-oBTprMeNEKCnqfuqKd6sbvFzmFQtlXS3e0C/RGFV0hD6QzhHV+ODfaQbAlmY6/q0ubbwlAM/nCJjkrgA3waLzg=="
        referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha512-az4PkuBkSzSY1ix9rrfmEPqzzG2q18yvwBWEKcRkt4YNwjiT8PrMHrYsvMdqzy5rHJYAsZsdL9d5Axc9/h8VXw=="
        referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.10.0/jquery.validate.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg=="
        referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
<script src="app/web/js/main.min.js"></script>
<script>
    (function (w, d) {
        var webp = d.querySelector("html").classList.contains("webp");

        function isXs() {
            return w.screen.availWidth <= 414;
        }

        function setBackground(el) {
            var url;
            if (isXs()) {
                url = el.getAttribute("data-src-xs");
            }
            if (!url) {
                url = el.getAttribute("data-src");
            }
            if (!url) {
                return false;
            }
            if (webp) {
                url = url.replace(/\.jpg$/, ".webp");
            }
            el.style.backgroundImage = "url('" + url + "')";
            return true;
        }

        if ("IntersectionObserver" in w) {
            function lazyload() {
                var lazyloadImages = d.querySelectorAll("div[data-src]");
                var imageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var div = entry.target;
                            if (setBackground(div)) {
                                div.removeAttribute("data-src");
                                div.removeAttribute("data-src-xs");
                            }
                            imageObserver.unobserve(div);
                        }
                    });
                });
                lazyloadImages.forEach(function (div) {
                    imageObserver.observe(div);
                });

                var lazyloadIcons = d.querySelectorAll(".socials");
                var iconObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var div = entry.target;
                            div.classList.add("visible");
                            iconObserver.unobserve(div);
                        }
                    });
                });
                lazyloadIcons.forEach(function (div) {
                    iconObserver.observe(div);
                });
            }

            if (d.readyState === "loading") {
                d.addEventListener("DOMContentLoaded", lazyload);
            } else {
                lazyload();
            }
        } else {
            w.addEventListener("load", function () {
                [].forEach.call(d.querySelectorAll("div[data-src]"), function (el) {
                    setBackground(el);
                });
                [].forEach.call(d.querySelectorAll(".socials"), function (el) {
                    el.classList.add("visible");
                });
            }, true);

            var fired = false;
            w.addEventListener("scroll", function () {
                if ((d.documentElement.scrollTop != 0 && fired === false) || (d.body.scrollTop != 0 && fired === false)) {
                    [].forEach.call(d.querySelectorAll("div[data-src]"), function (el) {
                        setBackground(el);
                    });
                    [].forEach.call(d.querySelectorAll(".socials"), function (el) {
                        el.classList.add("visible");
                    });
                    fired = true;
                }
            }, true);
        }
    })(window, document);
    (function () {
        function loadScript(src) {
            var script = document.createElement("script");
            script.type = 'text/javascript';
            script.async = true;
            script.src = src;
            document.getElementsByTagName("body")[0].appendChild(script);
        }

        window.fetch && loadScript("app/web/js/notifications.min.js?v=1.0.1");
    })();
</script>
