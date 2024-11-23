<?php	# joy/index.php
require('../app.php');

$page_description = 'In memoriam of Joy Johnson, previously known as Mandy Johnson (Baker).';
$page_name = 'joy';
$page_title = 'In memoriam of Joy Johnson';

ob_start();
?>
<link rel="stylesheet" href="<?= MAINSITE_TEMPLATE; ?>css/carousel.css">
<?php
$page_head = ob_get_clean();

ob_start();
?>

<h1 class="text-body-emphasis"><?= $page_title; ?></h1>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<p>On 29th June 2021 my beautiful wife Joy passed away. She was born as Mandy on 8th June 1972 to Don and Janet Baker. Her dad was a loving man of integrity. We got married on 1st May 1999 and had a very happy marriage. We conceived twins on 29th April 2006: Daniel and Elisabeth who went on ahead.</p>

<p>For the last few years Joy struggled with her mental health followed by cancer. She had been ready to go for a while. Don&rsquo;t think she lost a battle or given up. It&rsquo;s more that God saw she truly couldn&rsquo;t take any more pain and carried her Home.</p>

<p>In 2013 God set her free from a lot of life-changing things like fear. He poured joy into her life, prompting her to change her name to Joy. We will always be grateful to Him for what He did for her. She loved her new name: Joy because of her history of joy with God, Louise because her dad chose it and Elisabeth because it&rsquo;s our daughter&rsquo;s name.</p>

<p>We never expected her life to end this way at this time but it hasn&rsquo;t taken God by surprise. She will always be remembered for the joy that she had and her love for people. I miss her loads.</p>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
	<div class="carousel-indicators">
	  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Desert"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Park"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Joy with Scamper"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Joy in the countryside"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Joy in the countryside with Scamper"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Ever After Garden"></button>
	</div>
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="<?= BASE_URL; ?>images/joy-johnson.jpg" class="img-fluid" alt="Joy Johnson" />
	  </div>
	  <div class="carousel-item">
		  <img src="<?= BASE_URL; ?>images/desert.jpeg" class="img-fluid" alt="Joy Johnson in Sahara Desert" />
	  </div>
		<div class="carousel-item">
			<img src="<?= BASE_URL; ?>images/park.jpeg" class="img-fluid" alt="Bestwood Country Park" />
		</div>
		<div class="carousel-item">
			<img src="<?= BASE_URL; ?>images/joy-with-scamper.jpeg" class="img-fluid" alt="Joy with Scamper" />
		</div>
		<div class="carousel-item">
			<img src="<?= BASE_URL; ?>images/countryside.jpeg" class="img-fluid" alt="Joy in the countryside" />
		</div>
		<div class="carousel-item">
			<img src="<?= BASE_URL; ?>images/countryside-with-scamper.jpeg" class="img-fluid" alt="Joy in the countryside with Scamper" />
		</div>
		<div class="carousel-item">
			<img src="<?= BASE_URL; ?>images/ever-after-garden.jpeg" class="img-fluid" alt="Dedicated rose in the Ever After Garden" />
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Next</span>
	</button>
  </div>
  
  
<?php
$page_output = ob_get_clean();
$page_scripts = '';

require('../_layout/_layout.php');
?>
