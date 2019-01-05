<!-- Footer -->
<footer class="footer bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 h-50 text-center text-lg-left my-auto">
				<p class="text-muted small mb-4 mb-lg-0">&copy; Diminuo <?= date('Y') ?>. All Rights Reserved.</p>
			</div>
			<div class="col-lg-6 h-50 text-center text-lg-right my-auto">
				<ul class="list-inline mb-0">
					<li class="list-inline-item mr-3">
						<a href="../">
							<i class="icon-screen-desktop m-auto text-primary"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?=PATH_JS?>jquery.min.js"></script>
<script src="<?=PATH_JS?>bootstrap.bundle.min.js"></script>
<script src="<?=PATH_JS?>clipboard.min.js"></script>

<script>
		$(function () {
			$('[data-toggle="popover"]').popover()
		})
    var btn = document.getElementById('copybutton');
    var clipboard = new ClipboardJS(btn);

		clipboard.on('success', function(e) {
        $(btn).popover('show');
				setTimeout(function () {
				  $(btn).popover('hide');
				}, 1500);
    });
		clipboard.on('error', function(e) {
        $(btn).popover('hide');
    });
</script>

</body>

</html>
