<?php
// -- testimonials.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<h2>Comments and Feedback from previous clients</h2>
<div class="comments container">
  <div class="panel panel-default col-sm-7 col-sm-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Pat Wheeler, Bromley</h3>
  </div>
  <div class="panel-body">
    HB Plastering did a fantastic job and very quickly too. They beat other local plasterers on price and quality of service. Would highly recommend them.
  </div>
</div>
  <div class="panel panel-default col-sm-7 col-sm-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Duncan Rimmer, Beckenham</h3>
  </div>
  <div class="panel-body">We couldn't have asked for more really. They arrived on time, did the job quickly and I am very pleased with the results. Can't go wrong with these guys.</div>
</div>
</div>
<form class="form-horizontal" role="form">
<h3>Post your own comment</h3>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
<label for="inputComment" class="col-sm-2 control-label">Comment</label>
    <div class="col-sm-offset-2 col-sm-10">
      <textarea class="form-control" rows="9" placeholder="Comment" id="inputComment"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Post comment</button>
    </div>
  </div>
</form>


<?php footer(); ?>
