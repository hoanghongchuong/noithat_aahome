	</div>
    <!--./main-wrapper-->

    <!-- BEGIN: SCRIPT -->

    <script>
        var loadDeferredStyles = function() {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
        else window.addEventListener('load', loadDeferredStyles);
    </script>
    <script src="plugin/jquery/jquery-3.2.1.min.js" defer></script>
    <script src="plugin/jquery/jquery-migrate-3.0.0.min.js" defer></script>
    <script src="plugin/popper/popper.min.js" defer></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js" defer></script>
    <script src="plugin/mmenu/jquery.mmenu.all.min.js" defer></script>
    <script src="plugin/slick/slick.min.js" defer></script>
    <script src="plugin/isotope/isotope.pkgd.min.js" defer></script>
    <script src="plugin/masonry/masonry.pkgd.min.js" defer></s defercript>
    <script src="plugin/scrollup/jquery.scrollUp.min.js"></script>
    <script src="plugin/stickOnScroll/jquery.stickOnScroll.min.js" defer></script>
    <script src="plugin/fancybox/dist/jquery.fancybox.min.js" defer></script>


    <script src="plugin/main.min.js" defer></script>
	<!-- END: SCRIPT -->
</body>
</html>


