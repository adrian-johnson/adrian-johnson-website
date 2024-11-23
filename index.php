<?php	# index.php
require('app.php');

$page_description = 'Adrian Johnson is a web developer from Nottingham, UK.';
$page_name = 'home';
$page_title = 'Home';
$page_head = '';

ob_start();
?>

<div class="row g-5">
	<div class="col-md-8">
		<h1 class="text-body-emphasis">I build web applications</h1>
		<p class="fs-5 col-md-8">I am a software engineer, building applications for the web.</p>
		
		<div class="mb-5">
			<a href="<?= BASE_URL; ?>projects" class="btn btn-sm btn-light px-4 text-primary">Projects</a>
			<a href="<?= BASE_URL; ?>resume" class="btn btn-sm btn-light px-4 text-primary">Resume</a>
		</div>
	</div>
	<div class="col-md-4">
		<img src="<?= BASE_URL; ?>images/adrian-johnson-website-portrait-bw.png" class="img-fluid" alt="Adrian Johnson" />
	</div>
</div>

<hr class="col-3 col-md-2 mb-5">


<div class="row g-5">
  <div class="col-md-6">
	<h2 class="text-body-emphasis">About me</h2>
	<p>Hello, my name is Adrian Johnson and I make applications for the web.</p>
	<p>I currently work as a web developer on a #proptech application in Nottingham, UK. In my spare time I enjoy building websites, and travelling. You can follow the progress of those projects on this site.</p>
	<ul class="list-unstyled ps-0">
	  <li>
		<a class="icon-link mb-1" href="<?= BASE_URL; ?>projects" rel="noopener">
		  <i class="bi bi-arrow-right-circle"></i>
		  Projects
		</a>
	  </li>
	  <li>
		<a class="icon-link mb-1" href="<?= BASE_URL; ?>resume" rel="noopener">
			  <i class="bi bi-arrow-right-circle"></i>
		  Resume
		</a>
	  </li>
	  <li>
		<a class="icon-link mb-1" href="<?= BASE_URL; ?>joy" rel="noopener">
			  <i class="bi bi-arrow-right-circle"></i>
		  In memoriam of Joy Johnson
		</a>
	  </li>
	</ul>
  </div>

  <div class="col-md-6">
	<h2 class="text-body-emphasis">Stay in touch</h2>
	<p>The best way to get in touch with me is using <a href="https://twitter.com/adrianjohnson" title="Adrian Johnson on twitter" target="twitter">twitter @adrianjohnson</a>.</p>
	<p>Other social media links are below:</p>
	<ul class="list-unstyled ps-0">
	  <li>
		<a class="icon-link mb-1" href="https://twitter.com/adrianjohnson" target="twitter">
			<i class="bi bi-twitter-x"></i>
		  @adrianjohnson
		</a>
	  </li>
	  <li>
		<a class="icon-link mb-1" href="https://facebook.com/iamadrianjohnson" target="facebook">
			<i class="bi bi-facebook"></i>
		  facebook
		</a>
	  </li>
	  <li>
		<a class="icon-link mb-1" href="https//linkedin.com/adrianjohnson" target="linkedin">
			<i class="bi bi-linkedin"></i>
		  linkedin
		</a>
	  </li>
	  <li>
		<a class="icon-link mb-1" href="https://github.com/adrian-johnson" target="github">
			<i class="bi bi-github"></i>
		  github
		</a>
	  </li>
	</ul>
  </div>
</div>

<?php
$page_output = ob_get_clean();
$page_scripts = '';

require('_layout/_layout.php');
?>