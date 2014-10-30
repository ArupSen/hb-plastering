<?php
// -- gallery.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
<?php
for ($i = 1; $i < 27; $i++) {
  if ($i == 1) {
    echo '<div class="item active">';
  } else {
    echo '<div class="item">';
  }
  $next_slide = 'slide-'.$i.'.jpg';
  img_tag($next_slide);
  echo '</div>';
}
?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<?php footer(); ?>
