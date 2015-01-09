<?php
// -- footer.php --
?>

</div><!-- end of contents -->
<div id="footer">
  <!-- <a href="http://arupdesigns.co.uk" onclick="window.open('http://arupdesigns.co.uk');return false"><?php // img_tag('ad_icon.png','site by arup designs'); ?></a> -->
</div>
</div> <!-- end of wrap -->
<!-- the Google Analytics tracker -->
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  try {
  var pageTracker = _gat._getTracker(""); // add the tracker ID
  pageTracker._trackPageview();
  } catch(err) {}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
// site specific non library stuff
  jQuery(document).ready(function($){
    // quote page contact form
    var $form = $('form');
    var $form_input = $('form input');
    var $item = $('.item');

    $form.addClass('form-horizontal');
    $form.attr('role','form');
    $('form p').wrap('<div class="form-group">');
    $('form .submit').wrap('<div class="form-group">');
    $('form label').addClass('col-sm-2 control-label');
    $form_input.addClass('form-control');
    $('form textarea').addClass('form-control');
    $('form textarea').wrap('<div class="col-sm-10">');
    $form_input.eq(0).wrap('<div class="col-sm-10">');
    $form_input.eq(1).wrap('<div class="col-sm-10">');
    $form_input.eq(2).wrap('<div class="col-sm-10">');
    $form_input.eq(3).wrap('<div class="col-sm-2">');
    $('.submit').addClass('col-sm-2 col-sm-offset-2');
    $('.submit input').addClass('btn btn-default');
    $('.submit input').attr('value', 'Request Quote');
    $('.errorlist').addClass('alert alert-danger col-sm-10 col-sm-offset-2');
    // animated trowel
    $('header img').animate({left: '584px'}, 'slow');
    // add caption text as alt attribute on gallery page
    $item.each(function() {
      $(this).find('img').attr('alt', $(this).find('p').text());
    });
    // testimonials
    $('.credit').remove();
    $('.timestamp').remove();
    $('.form-group input.submit').removeClass('col-sm-offset-2');
    $('.testimonials .nav li').find('a').each(function() {
      $(this).attr('href', "../" + $(this).attr('href'));
    });
    var $quote_link = $('.testimonials header button a');
    $quote_link.attr('href', "../" + $quote_link.attr('href'));
    $('.testimonials #nav-testimonials a').attr('href', 'index.php');
    // password hidden but revealed by clicking a secret spot
    $('.challengeImage').hide();
    $('legend').append('<span>');
    $('legend span').on('click', function() {
      $('.challengeImage').show();
    });
});
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
