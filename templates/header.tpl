<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="{$desc}">
	<meta name="keywords" content="{$keywords}">
	<meta name="google-site-verification" content="AtYf_5M-NX21QYdZ-T6zU9S3tLwEUI7xKUVk4P-4uMw" />
	<title>{$title}</title>
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" >
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="templates/style/css/style.css">
	<script src="//code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="//www.google.com/recaptcha/api.js" type="text/javascript"></script>
	<script  src="templates/style/javascript/analytic.js" type="text/javascript"></script>
	{if $adb}
	<script src="//cdnjs.cloudflare.com/ajax/libs/fuckadblock/3.2.1/fuckadblock.min.js" type="text/javascript"></script>
	<script>
		fuckAdBlock.onDetected(function adBlockDetected(){
			$('#frm_contain').remove();
			$('#frm_adblocker_detect').show();
		});
	</script> 
	{/if}
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-2641178193787687",
		enable_page_level_ads: true
		});
	</script>
	<script>window.twttr = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0],
		    t = window.twttr || {};
		  if (d.getElementById(id)) return t;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "https://platform.twitter.com/widgets.js";
		  fjs.parentNode.insertBefore(js, fjs);

		  t._e = [];
		  t.ready = function(f) {
		    t._e.push(f);
		  };

		  return t;
		}(document, "script", "twitter-wjs"));
	</script>
</head>
<body>

<!-- <script>
    $(document).ready(function() {
        $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
    });
</script> -->

<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Ethereum Faucets</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="games.php">Games</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="free-resources.php">Free Resources</a></li>
			<li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- <nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<a class="navbar-brand" href="index.php">Ethereum Faucets</a>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="games.php">Games</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="free-resources.php">Free Resources</a></li>
			<li><a href="contact.php">Contact</a></li>
	</div>
</nav> -->

<div class="container-fluid">
	<div class="col-md-2 hidden-xs text-center ad_left" style="padding-top:35px;">{$ads_left}</div>
	<div class="col-md-8 main_area">
        <a href="index.php" >
        <img src="/templates/style/images/ethereumfaucets.png" alt="Free Ethereum Faucet" style="display:block;margin: 0 auto" class="img-responsive"></a>
		
		