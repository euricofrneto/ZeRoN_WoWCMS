<?php
include("../configs.php");
	mysql_select_db($server_adb);
	$check_query = mysql_query("SELECT gmlevel from account where username = '".strtoupper($_SESSION['username'])."'") or die(mysql_error());
    $login = mysql_fetch_assoc($check_query);
	if($login['gmlevel'] < 3)
	{
		die('
<meta http-equiv="refresh" content="2;url=GTFO.php"/>
		');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AquaFlame CMS Admin Panel</title>
    <link href="font/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input").uniform();
		$('.sign').click(function(){
			$('.message').fadeIn();
		})
		$('.message').click(function(){
			$('.message').fadeOut();
		})
      });
    </script>
    <link rel="stylesheet" href="css/uniform.default.css" type="text/css" media="screen" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
    </head>

    <body>
<div id="login">
      <div id="log-Sup">
    <div id="logWrap">

          <h1><img src="../wow/static/images/logos/wof-logo.png" height="21px" width="260px"/><br />
        <span>Admin Redirection</span></h1>
         <div id="LogPannel">
      <center><h2>Redirecting</h2></center>
	  <meta http-equiv="refresh" content="2;url='../index.php'"/>
	  </div>
        </div>
  </div>
      <div class="push"></div>
    </div>
<?php include("footer.php"); ?>
</body>
</html>
