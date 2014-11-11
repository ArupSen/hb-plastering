<?php
// -- quote.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<h2>Request a Quote</h2>
<p>At H B Plastering, we understand the need for additional financial information and the importance of knowing the costs before requesting service. We are happy to offer a free no-obligation quote on any of our work.</p>
<p>Please fill out and submit the form below to describe your project or specific needs. You will receive a confirmation from us and a member of our team will call you to arrange to see your job and make a quote.</p>
<p>Contact our skilled and reliable plasterers based in Sydenham, London, for a wide range of plastering services.</p>
<?php
// dd-formmailer will go here
include_once ('dd-formmailer/dd-formmailer.php');
?>


<?php footer(); ?>
