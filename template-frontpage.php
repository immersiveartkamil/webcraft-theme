<?php /* Template Name: Strona Główna */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area ">
	<section class="container w-section hero">
		<div class="hero-text">Zabudowy meblowe dla Twojej inwestycji.</div>
		<div class="slider">
			<div class="slide"></div>
			<div class="slide"></div>
			<div class="slide"></div>
			<div class="slide"></div>
			<div class="slide"></div>
		</div>
	</section>

	<section id="o-nas" class="w-section about-us">
		<div class="container about_us">
			<div class="about-us-header">
				<h2>O nas</h2>
			</div>
			<div class="row quote about_us__wrapper">
				<div class="col-lg-6 col-md-6 col-sm-12 about_us__col">
					<div class="">
						<h3 class="about_us__heading">Zabudowa meblowa dla inwestycji</h3>
						<p>Kompleksowo zajmujemy się produkcją mebli do powierzchni komercyjnych takich jak biurowce, kancelarie, sklepy, salony optyczne, banki, biura i fabryki. Od projektu po wykonanie.</p>
					</div>
					<div class="">
						<h3 class="about_us__heading">Stawiamy na profesjonalizm</h3>
						<p>Jesteśmy zespołem fachowców, których łączy kilkunastoletnie doświadczenie, znajomość branży i pasja. Nie zdarzyło nam się dwa razy zrobić takiej samej realizacji - każde zlecenie wymaga indywidualnego podejścia i szukania innowacyjnych rozwiązań. Stawiamy na rzetelność wykonania i terminowość. </p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 about_us__col">
					<h3 class="about_us__heading">Spacer 3D</h3>
					<iframe src="https://www.youtube.com/embed/lVdYDLwM8HI?si=ePQYRT0bWxX5NUQp" class="video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	<section id="services" class="w-section services">
		<div class="services-container row"></div>
		<div class="col-lg-12 services-header">
			<h3>Usługi</h3>
		</div>
		<div class="col-lg-12 services-row">
			<div class="services-row-number">01</div>
			<div class="services-row-name">Mebel kuchenny na wymiar</div>
			<div class="services-row-description">Projektujemy i wykonujemy meble kuchenne dostosowane do Twoich potrzeb i preferencji. Oferujemy szeroki wybór materiałów i wzorów, aby stworzyć idealną kuchnię dla Ciebie.</div>
		</div>
		<div class="col-lg-12 services-row">
			<div class="services-row-number">02</div>
			<div class="services-row-name">Szafy wnękowe</div>
			<div class="services-row-description">Zajmujemy się produkcją szaf wnękowych, które optymalnie wykorzystują przestrzeń Twojego domu. Dzięki indywidualnemu podejściu zapewniamy idealne dopasowanie do wymiarów i stylu wnętrza.</div>
		</div>
		<div class="col-lg-12 services-row">
			<div class="services-row-number">03</div>
			<div class="services-row-name">Meble do salonu</div>
			<div class="services-row-description">Tworzymy eleganckie i funkcjonalne meble do salonu, które dodadzą charakteru Twojemu wnętrzu. Nasze projekty są starannie wykonane, aby spełnić oczekiwania nawet najbardziej wymagających klientów.</div>
		</div>
	</section>
	<section id="portfolio" class="w-section portfolio">
		<div class="portfolio-container">
			<div class="portfolio-header">
				<h3>Realizacje</h3>
			</div>
			<div class="slider-container">
				<div class="empty-space" onclick="previousImage()">
					<svg id="previous-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" opacity="0.7">
						<rect width="46" height="46" rx="4" ry="4" transform="translate(48, 48) rotate(180)" fill="none" stroke="#fff" stroke-width="2" stroke-linejoin="round" />
						<polyline points="32,12 16,24 32,36" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div class="empty-space" onclick="nextImage()">
					<svg id="next-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" opacity="0.7">
						<rect width="46" height="46" rx="4" ry="4" transform="matrix(0 1-1 0 47 1)" fill="none" stroke="#fff" stroke-width="2" stroke-linejoin="round" />
						<polyline points="16,12 32,24 16,36" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div class="portfolio-image"><img src="http://izi-design.local/wp-content/uploads/2024/04/IMG_1661photo.jpg"></div>
				<div class="portfolio-image"><img src="http://izi-design.local/wp-content/uploads/2024/04/IMG_1642photo.jpg"></div>
				<div class="portfolio-image"><img src="http://izi-design.local/wp-content/uploads/2024/04/IMG_1555photo.jpg"></div>
			</div>
		</div>
	</section>



	<?php get_footer(); ?>


</div>