<?php	# privacy.php
require('app.php');

$page_description = '';
$page_name = 'privacy';
$page_title = 'Privacy policy';
$page_head = '';

ob_start();
?>

<h1 class="text-body-emphasis"><?= $page_title; ?></h1>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<h2 class="text-body-emphasis">Introduction</h2>

<p>Welcome to adrian-johnson.com ("Company", "we", "our", "us")! We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy notice or our practices with regard to your personal information, please contact me through social media channels.</p>

<h2 class="text-body-emphasis">Information We Collect</h2>

<p>We collect personal information that you voluntarily provide to us when you register on the website, express an interest in obtaining information about us or our products and services, when you participate in activities on the website, or otherwise when you contact us.</p>

<h2 class="text-body-emphasis">How We Use Your Information</h2>

<p>We use personal information collected via our website for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests, in order to enter into or perform a contract with you, with your consent, and/or for compliance with our legal obligations.</p>

<h2 class="text-body-emphasis">Sharing Your Information</h2>

<p>We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfil business obligations.</p>

<h2 class="text-body-emphasis">Cookies and Tracking Technologies</h2>

<p>We may use cookies and similar tracking technologies to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Policy.</p>

<h2 class="text-body-emphasis">Data Security</h2>

<p>We have implemented appropriate technical and organisational security measures designed to protect the security of any personal information we process. However, please also remember that we cannot guarantee that the internet itself is 100% secure.</p>

<h2 class="text-body-emphasis">Your Privacy Rights</h2>

<p>In some regions, such as the European Economic Area (EEA), you have rights that allow you greater access to and control over your personal information. You may review, change, or terminate your account at any time.</p>

<h2 class="text-body-emphasis">Updates to This Policy</h2>

<p>We may update this privacy notice from time to time in order to stay compliant with relevant laws. We will notify you of any changes by posting the new privacy policy on this page.</p>

<h2 class="text-body-emphasis">Contact Us</h2>

<p>If you have questions or comments about this policy, you may contact us through social media channels.</p>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<p><small><strong>Last updated:</strong> 21st September 2024</small></p>




<?php
$page_output = ob_get_clean();
$page_scripts = '';

require('_layout/_layout.php');
?>
