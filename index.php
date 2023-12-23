<?php
$siteurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST']."/";
$currurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


// **************** //
// *** TITLE LP *** //
// **************** //

$title = "";




// ******************** //
// *** DESKRIPSI LP *** //
// ******************** //

$deskripsi = "";




// ********************* //
// *** URL LINK TOKO *** //
// ********************* //

$url_toko = "https://www.google.com/";





?>
<!doctype html>
<html amp lang="id">
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="<?php echo $siteurl; ?>img/banner.png" as="image">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link rel="shortcut icon" href="<?php echo $siteurl; ?>img/favicon.png" type="image/x-icon">
<link rel="canonical" href="<?php echo $currurl; ?>">
<title><?php echo $title; ?></title>
<meta name="title" content="<?php echo $title; ?>">
<meta name="description" content="<?php echo $deskripsi; ?>">
<style amp-custom>
*{box-sizing:border-box;margin:0;padding:0}:focus{outline:0}::-webkit-scrollbar{display:none}a,a:after,a:hover,a:visited{text-decoration:none;color:#fff}
html{max-width:500px;margin:0 auto;background-image: url(<?php echo $siteurl; ?>img/background.webp)}body{color:#fff;font-family:'Noto Sans',arial,sans-serif}
.atas{display:grid;min-height:100vh}.atasbox{margin:auto;text-align:center}.ataslink{display:inline-grid;margin:.88rem 0}
.ataslink a{padding:.5rem 8.5rem;background:#33333388;margin-bottom:.5rem;border-radius:.38rem;box-shadow:0 -1px #ccb38a88;letter-spacing:1px}
.ataslink a.btn1{color:#ffffff;background-image:linear-gradient(to right, #46000c, #ac1b1b);font-weight:bold}
.imghero{box-shadow:inset 0 0 0 10px #888;border-radius:10px}
</style>
</head>
<body>
<main>
<div class="atas">
  <div class="atasbox">
    <div><amp-img height="100" width="350" alt="RTP SLOT" src="<?php echo $siteurl; ?>img/logo.webp"></amp-img></div>
    <br>
    <div><amp-img class="imghero" height="300" width="350" alt="RTP SLOT" src="<?php echo $siteurl; ?>img/banner.png"></amp-img></div>
    <div class=ataslink>
      <a href="<?php echo $url_toko; ?>" class=btn1>DAFTAR</a>
      <a href="<?php echo $url_toko; ?>" target=_blank rel="noopener noreferrer nofollow">LOGIN</a>
	  <a href="<?php echo $url_toko; ?>" target=_blank rel="noopener noreferrer nofollow">Live Chat</a>
    </div>
  </div>
</div>
</main>
</body>
</html>