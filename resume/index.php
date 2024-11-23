<?php	# resume/index.php
require('../app.php');

$page_description = "Adrian Johnson's resume.";
$page_name = 'resume';
$page_title = 'Resume';
$page_head = '';

ob_start();
?>

<h1 class="text-body-emphasis">Resume</h1>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<h2 class="text-body-emphasis">Experience</h2>

<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3" style="margin-top: 30px;">
		  <div class="card-body">
			<h5 class="card-title">August 2015 to present</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">Developer</h6>
			<p class="card-text">iSite</p>
		  </div>
		</div>
	</div>
	<div class="col-md-7">
		<p>Continued development of ASP.NET MVC application, including bug fixes and new features.<br />
			Implementation of Azure Application Insights for debugging and logging.<br />
			Upgrade of reporting module within iSite to use Stimulsoft.<br />
			Development of application to manage daily import of data for Nationwide from third party Web Service to CSV or XML, through middleware developed in C# and SQL Server.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3">
		  <div class="card-body">
			<h5 class="card-title">April 2014 to August 2015</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">Senior Web Developer</h6>
			<p class="card-text">ChurchApp</p>
		  </div>
		</div>
	</div>
	<div class="col-md-7">
		<p>Part of a small team working on a web application used by churches to record membership, rota details and events.<br />
			Developed the ability for churches to have separate access to data for users depending on site allocation, plus addition of podcast feed and integration with BulkSMS so international churches can use a competitively priced product to send text messages.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3" style="margin-top: 30px;">
		  <div class="card-body">
			<h5 class="card-title">October 2009 to March 2014</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">Senior Web Developer</h6>
			<p class="card-text">Rare Creative Group</p>
		  </div>
		</div>
	</div>
	<div class="col-md-7">
		<p>Online Quotation Tool for major building suppliers. Uses PHP, MySQL, AJAX and JQuery to produce and save quotes for Registered Installers.<br />
			Web interface for mobile client to manage a system that controls piped music within hotels, restaurants and conference centres.
			<br />
			Web application to allow students to enter a national competition to design homes eligible for the Passiv House scheme.<br />
			These projects enabled Rare to win the Digital Industries, Innovation and Technology Award at the Sheffield Business Awards in February 2013.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3" style="margin-top: 30px;">
		  <div class="card-body">
			<h5 class="card-title">2004 to 2009</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">Freelance</h6>
		  </div>
		</div>
	</div>
	<div class="col-md-7">
		<p>Arab World Ministries – development of a C# program to replace an Excel spreadsheet which calculates financial support requirements for staff. Included an export facility to Microsoft Word and Excel.<br />
			Bemrose Booth – development of online e-commerce store in VB.NET 2.0 for business promotional products.<br />
			Luxfer Gas Cylinders – update to their sales intranet to reflect changes in their internal processes. Addition of a facility to produce and monitor quotes to external customers.<br />
			ScriptSwitch – modification of Central Reporting System to allow PCTs to group practices together and reflect the new organisations in the generated reports. Improved the overall security of the system.<br />
			i2d2 – development of Crystal Reports and data access components for an eLearning project developed in ASP.NET (C#).<br />
			Parker Plant – development of Data Transfer application to allow IT staff to monitor records on Informix, Opera and SQL Server 200 database platforms and perform simple queries. Followed by the transfer of data between Informix and Opera to SQL Server 2000 using Data Transformation Services, stored procedures, views and triggers within SQL Server.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3">
		  <div class="card-body">
			<h5 class="card-title">April to November 2003</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">Developer</h6>
			<p class="card-text">Reynolds Computing</p>
		  </div>
		</div>
	</div>
	<div class="col-md-7" style="margin-top: 60px;">
		<p>E-commerce web site and online help desk system.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3">
		  <div class="card-body">
			<h5 class="card-title">April 2002 to April 2003</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">Programmer / Analyst</h6>
			<p class="card-text">Nottinghamshire County Council</p>
		  </div>
		</div>
	</div>
	<div class="col-md-7" style="margin-top: 60px;">
		<p>Development of software to be distributed to primary schools within the Nottinghamshire area, using Microsoft Access and VB6.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3">
		  <div class="card-body">
			<h5 class="card-title">1999 to March 2002</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">IT Assistant</h6>
			<p class="card-text">Direct Valuations</p>
		  </div>
		</div>
	</div>
	<div class="col-md-7">
		<p>Development of in-house software using VB6 and SQL Server v7 to record mortgage valuations and correspondence between Direct Valuations and surveyors.<br />
			Front-line help desk providing support to Direct Valuations (100 users) and staff from franchise companies.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<hr class="col-3 col-md-2 mb-5">

<h2 class="text-body-emphasis" style="margin: 30px 0;">Education</h2>
<div class="row g-5">
	<div class="col-md-5 text-center">
		<div class="card bg-transparent text-center mb-3">
		  <div class="card-body">
			<h5 class="card-title">1993 - 1998</h5>
			<h6 class="card-subtitle mb-2 text-body-secondary">Nottingham Trent University</h6>
			<p class="card-text">BSc (Hons) 2.2<br />Computer Studies</p>
		  </div>
		</div>
	</div>
	<div class="col-md-7">
		<p>Included Year Placement at small charity working on a bespoke database application. <br />Final Year Project: A Graphic Interface for the Management of Real-Time Bus Stop Information.</p>
	</div>
</div>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<hr class="col-3 col-md-2 mb-5">

<h2 class="text-body-emphasis" style="margin: 30px 0;">Professional Skills</h2>

<div class="mb-5">
	<div class="row row-cols-1 row-cols-md-3 mb-4">
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Solutions focused</div></div>
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
		<div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Database design</div></div>
	</div>
	<div class="row row-cols-1 row-cols-md-3">
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Documentation</div></div>
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Technical Documentation</div></div>
		<div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Clear Communicator</div></div>
	</div>
</div>
<!-- 
<span class="col-3 col-md-2 mb-5">&nbsp;</span> -->

<h2 class="text-body-emphasis" style="margin: 30px 0;">Languages</h2>

<div class="mb-0">
	<div class="row row-cols-1 row-cols-md-3 mb-4">
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">C#</div></div>
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SQL Server</div></div>
		<div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP/MySQL</div></div>
	</div>
	<div class="row row-cols-1 row-cols-md-3 mb-4">
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
		<div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
	</div>
	<div class="row row-cols-1 row-cols-md-3 mb-4">
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">ASP.NET MVC</div></div>
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">VB.NET</div></div>
		<div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">VB6</div></div>
	</div>
	<div class="row row-cols-1 row-cols-md-3">
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MS Access</div></div>
		<div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">WPF</div></div>
		<div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">UWP</div></div>
	</div>
</div>


<?php
$page_output = ob_get_clean();
$page_scripts = '';

require('../_layout/_layout.php');
?>
