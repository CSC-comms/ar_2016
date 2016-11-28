<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=9" /> <!-- Turns IE's compatibility mode off -->

	<meta charset="utf-8">
	<title><?php echo $title ?> CSC Annual Report 2015-16</title>

	<meta name="description" content="annual report 2016">
	<meta name="author" content="Commonwealth Superannuation Corporation">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Javascript and jQuery -->

	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/bootstrap-theme.min.css">
    <link rel="stylesheet" href="stylesheets/base.css">
    <link rel="stylesheet" href="stylesheets/customised.css">
    <link rel="stylesheet" href="stylesheets/layout.css">

<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
    
<script src="js/vendor/jquery-1.11.2.min.js"></script> 
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="js/highlight.js"></script>
<script src="js/highlight_mainnav.js"></script>
<script src="js/responsive-tables.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
$(document).ready(function()
{	
	$(".nav").accessibleDropDown();
});

$.fn.accessibleDropDown = function ()
{
	var el = $(this);
	
	/* Setup dropdown menus for IE 6 */
	
	$("li", el).mouseover(function() {
		$(this).addClass("hover");
	}).mouseout(function() {
		$(this).removeClass("hover");
	});
	
	/* Make dropdown menus keyboard accessible */
	
	$("a", el).focus(function() {
		$(this).parents("li").addClass("hover");
	}).blur(function() {
		$(this).parents("li").removeClass("hover");
	});
}
</script>

<!-- Minor hack for IE 6 and 7 -->

<!--[if lt IE 8]>
<style>
.nav ul li:hover ul a,
.nav ul li.hover ul a,
.nav ul li.first a
{
	margin-left: 0;
}
</style>
<![endif]-->
<script>
$(document).ready(function(){
  $("#menu-icon").click(function(){
    $("#topnav").toggleClass('visible');
  });
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28509190-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
<div class="container">
<header>
	<a href="index.php"><img src="images/logo.svg" alt="Australian Government logo" class="crest"></a>
	<h1>Annual Report 2015-16</h1>
</header>
</div>
<div class="container" id="wrapper">
            <div class="container">
                <div class="row">
                    <ul id="topnav">
                        <li class="col-xs-1"><a href="sections/introduction/about-csc.php" class="introduction">Introduction</a></li>
                        <li class="col-xs-1"><a href="sections/performance/report-from-the-chair.php" class="performance">Performance</a></li>
                        <li class="col-xs-1"><a href="sections/csc-board/csc-board.php" class="csc-board">CSC Board</a></li>
                        <li class="col-xs-1"><a href="sections/governance/introduction.php" class="governance">Governance</a></li>
                        <li class="col-xs-1"><a href="sections/investments/Introduction.php" class="investments ">Investments</a></li>
                        <li class="col-xs-1"><a href="sections/super-schemes/Introduction.php" class="super-schemes">Super schemes</a></li>
                        <li class="col-xs-1"><a href="sections/financial-statements/index.php" class="finstatements">Financial statements</a></li>
                        <li class="col-xs-1"><a href="sections/appendices/appendix1.php" class="appendices">Appendices</a></li>
                    </ul>
                </div>
            </div>
          </div>

	<div class="columns">
	    <span class="mobileTitleHome">Annual Report 2016</span><br>
	</div>

