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
$slide_text = array(
  "Hacking off existing pebble dash",
  "Waterproof sand and cement scratch coat",
  "Finished pebble dashing",
  "Waterproof sand and cement render",
  "Curved wall in waterproof sand and cement render",
  "Waterproof sand and cement render",
  "Waterproof sand and cement rendering",
  "Waterproof rendered plinth",
  "Restoring the original features",
  "Restoration of original features",
  "Restoring of the original features",
  "Restoring original features",
  "Flower bed",
  "Flower bed",
  "Smoothly finished render",
  "Rendered flower bed",
  "Plastered angled ceiling",
  "Plastering a newly built kitchen",
  "Plastering a new extension",
  "Plastering lots of skylights and corners",
  "Restoring original ceiling",
  "Finish coat of insulated render",
  "Insulated render",
  "Insulated render",
  "Insulated render",
  "Restoring original Victorian ceiling",
  "Keeping the original coving and ceiling rose",
  "Front of the house finishing rendering",
  "Sharp and neat render finish",
  "Rendering",
  "Pebble dashing with render finished corner",
  "Rendering",
  "Plastering ceiling with skylights",
  "Side of house rendering",
  "Entire property lime render",
  "Entire property waterproof sand and cement render",
  "Rendering",
  "Rendering",
  "Curved wall plastering",
  "Original coving kept while ceiling replaced",
  "Plastered ceiling",
  "Waterproof sand and cement render",
  "Waterproof sand and cement render",
  "Entire property lime render",
  "Lime render"
);
for ($i = 0; $i < 45; $i++) {
  if ($i == 0) {
    echo '<div class="item active">';
  } else {
    echo '<div class="item">';
  }
  $next_slide = 'slide-'.$i.'.jpg';
  img_tag($next_slide);
    echo '<div class="carousel-caption">';
    echo "<p>$slide_text[$i]</p>";
    echo '</div>';
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
