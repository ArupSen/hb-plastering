<?php
// included header file which also inserts meta tags
// // the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php // leave in during development and remove once live ?>
  <meta name="robots" content="noindex, nofollow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php echo ${$filename}['description']; ?>" />
  <meta name="keywords" content="<?php echo ${$filename}['keywords']; ?>" />
  <title><?php echo ${$filename}['title']; ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
<!-- <link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" /> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="<?php echo $filename; ?>">
  <div id="wrap">
<header>
  <h1><a href="index.php">HB Plastering</a></h1>
<address>
<span class="phone">call: 07974 295601</span><br>
22 Champion Crescent<br>
Sydenham, London SE26 4HH<br>
Tel: 0208 6760606
</address>
<?php
img_tag('trowel.png','plastering trowel');
?>
<button class="btn btn-lg btn-warning"><a href="quote.php">Request Quote >>></a></button>
</header>
