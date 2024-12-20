<?php	# terms.php
require('app.php');

$page_description = '';
$page_name = 'terms';
$page_title = 'Terms';
$page_head = '';

ob_start();
?>

<h1 class="text-body-emphasis"><?= $page_title; ?></h1>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<h2 class="text-body-emphasis">Introduction</h2>
<p>Welcome to adrian-johnson.com. ("Company", "we", "our", "us")! These Terms and Conditions ("Terms", "Terms and Conditions") govern your use of our website located at adrian-johnson.com (together or individually "Service") operated by adrian-johnson.com.</p>
<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users, and others who access or use the Service.</p>
<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>

<h2 class="text-body-emphasis">Accounts</h2>
<p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>
<p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>
<p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorised use of your account.</p>

<h2 class="text-body-emphasis">Intellectual Property</h2>
<p>The Service and its original content, features, and functionality are and will remain the exclusive property of adrian-johnson.com and its licensors.</p>

<h2 class="text-body-emphasis">Links To Other Web Sites</h2>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by adrian-johnson.com.</p>
<p>adrian-johnson.com has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third-party web sites or services. You further acknowledge and agree that adrian-johnson.com shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods, or services available on or through any such web sites or services.</p>

<h2 class="text-body-emphasis">Termination</h2>
<p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>

<h2 class="text-body-emphasis">Governing Law</h2>
<p>These Terms shall be governed and construed in accordance with the laws of United Kingdom, without regard to its conflict of law provisions.</p>
<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>

<h2 class="text-body-emphasis">Changes</h2>
<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>

<h2 class="text-body-emphasis">Contact Us</h2>
<p>If you have any questions about these Terms, please contact us through social media channels.</p>

<span class="col-3 col-md-2 mb-5">&nbsp;</span>

<p><small><strong>Last updated:</strong> 21st September 2024</small></p>


<?php
$page_output = ob_get_clean();
$page_scripts = '';

require('_layout/_layout.php');
?>
