<!DOCTYPE html>
<html>
<head>
<?php
    $title          = "";
    $keyword        = "";
    $description    = "";
    $thumbs         = "";
    $favicon        = "";
?>
<meta charset="UTF-8">
<meta content="text/css" http-equiv="Content-Style-Type" />
<meta content="text/javascript" http-equiv="Content-Script-Type" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="expires" content="86400">
<meta http-equiv="Content-Language" content="ja">
<meta name="Robots" content="noodp">
<meta name="Author" content="">
<meta name="copyright" content="" />
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyword; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<link rel="icon" href="<?php echo $favicon; ?>" sizes="32x32" />
<link rel="icon" href="<?php echo $favicon; ?>" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo $favicon; ?>" />
<meta name="msapplication-TileImage" content="<?php echo $favicon; ?>" />
<link rel="canonical" href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:site_name" content="<?php echo $title; ?>" />
<meta property="og:image" content="<?php echo $thumbs ; ?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $title; ?>" />
<meta name="twitter:description" content="<?php echo $description; ?>" />
<meta name="twitter:image" content="<?php echo $thumbs ; ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src="//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<link rel='stylesheet' id='theme_base_css'  href='css/basestyle.css?ver=<?php echo date('Y-m-d-H-i-s'); ?>' media='all' />
</head>
<body id="page_top" class="body_back_black">
