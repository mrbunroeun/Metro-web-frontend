(function () {
    "use strict";

    const loader = document.getElementById("page-loader");
    const MIN_DISPLAY_TIME = 500;

    function isInternalLink(href) {
        if (!href || href.startsWith("#") || href.startsWith("javascript:")) {
            return false;
        }
        try {
            const url = new URL(href, window.location.origin);
            return url.origin === window.location.origin;
        } catch {
            return false;
        }
    }


    function showLoader() {
        if (!loader) return;
        loader.style.transition = "none";
        loader.classList.remove("opacity-0", "pointer-events-none");
        loader.classList.add("opacity-100");
    }

    function hideLoader() {
        if (!loader) return;
        loader.style.transition = "opacity 0.4s ease-out";
        loader.classList.add("opacity-0", "pointer-events-none");
        loader.classList.remove("opacity-100");
        document.body.style.backgroundColor = "";
    }

    document.addEventListener("DOMContentLoaded", function () {
        const wasNavigating =
            sessionStorage.getItem("metro-page-transition") === "1";
        sessionStorage.removeItem("metro-page-transition");

        if (wasNavigating && loader) {
            showLoader();

            let hidden = false;
            function finish() {
                if (hidden) return;
                hidden = true;
                hideLoader();
            }

            window.addEventListener("load", function () {
                setTimeout(finish, MIN_DISPLAY_TIME);
            });

            setTimeout(finish, 800);
        }

        const links = document.querySelectorAll("a[href]");
        links.forEach(function (link) {
            link.addEventListener("click", function (e) {
                const href = link.getAttribute("href");
                const target = link.getAttribute("target");

                if (!isInternalLink(href) || target === "_blank") {
                    return;
                }

                e.preventDefault();
                sessionStorage.setItem("metro-page-transition", "1");
                showLoader();
                window.location.href = href;
            });
        });
    });
})();
