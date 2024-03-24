<article>
			<header class="post-header">
				<div class="container">
					<h1 class="post-title">Portfólio našich prác</h1>
				</div>
			</header>
			<div class="post-content">
				<div class="container">

					<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

	<?php if ($page_name == 'index') {
		echo '
		<ul class="menu controls">
		<li data-from="left" class=""><a href="#">Všetko</a></li>
		<li data-from="right"><a href="web.php">Web</a></li>
		<li data-from="left"><a href="branding.php">Branding</a></li>
		<li data-from="right"><a href="fotografia.php">Fotografia</a></li>
		<li data-from="left"><a href="video.php">Video</a></li>
		</ul>
		';
	} else {
		echo '
		<ul class="menu controls">
		<li data-from="left" class=""><a href="../index.php">Všetko</a></li>
		<li data-from="right"><a href="web.php">Web</a></li>
		<li data-from="left"><a href="branding.php">Branding</a></li>
		<li data-from="right"><a href="fotografia.php">Fotografia</a></li>
		<li data-from="left"><a href="video.php">Video</a></li>
		</ul>
		';
	} ?>

					<!-- <ul class="menu controls">
						<li data-from="left" class="selected"><a href="#vsetko">Všetko</a></li>
						<li data-from="right"><a href="partials/web.php">Web</a></li>
						<li data-from="left"><a href="branding.php">Branding</a></li>
						<li data-from="right"><a href="fotografia.php">Fotografia</a></li>
						<li data-from="left"><a href="video.php">Video</a></li>
					</ul> -->

				</div>
	<?php
		if ($page_name == 'index') {
			include 'gallery/gallery-vsetko.php';
		} elseif ($page_name == 'web') {
			include 'gallery/gallery-web.php';
		} elseif ($page_name == 'branding') {
			include 'gallery/gallery-branding.php';
		} elseif ($page_name == 'fotografia') {
			include 'gallery/gallery-fotografia.php';
		} else {
			include 'gallery/gallery-video.php';
		}
	?>

			</div>
		</article>
	</main>