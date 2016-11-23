<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Investment strategy'; 
	///////////////////////////////////////////////////
	include '../../includes/head.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-3 sidenav omega" id="sidenav">
	<p class="sectiontitle">Investments</p>
	<h2><a id="top" title="Top of the page" name="top"></a>In this section</h2>
	<ul>
        <li><a title="Investments" href="Introduction.php">Investments</a></li>
        <li><a title="How performance affects a member's benefits" href="how-performance-affects.php">How performance affects a member's benefits</a></li>
        <li><a title="Investment approach" href="investment-approach.php">Investment approach</a></li>
        <li><a title="Investment strategy" href="investment-strategy.php">Investment strategy</a></li>
        <li><a title="Investment governance" href="investment-governance.php">Investment governance</a></li>
        <li><a title="Environmental, social and governance factors" href="environmental-factors.php">Environmental, social and governance factors</a></li>
        <li><a title="Investment options" href="investment-options.php">Investment options</a></li>
	</ul>
		</div>
        
		<div class="col-xs-8 content" id="startContent">
		  <h1><?php echo $title ?></h1>
	<p>
		CSC’s investment strategy is focused on the provision of financial adequacy in retirement for all scheme members. The level of risk taking is measured and focused on maximising the probability of achieving targeted return objectives for each investment option.
	</p>
	<p>
		This approach should manifest in the following pattern of returns: CSC investment portfolios should help to preserve wealth, to some extent, through periods of negative equity market returns. The cost of this is that CSC’s investment portfolio returns may lag other funds through periods of strong positive equity market returns. Note that through these periods of strong equity market returns, CSC member returns should be well in excess of their targeted objectives. Over the full investment horizon, as more capital is preserved in weak markets and most of the returns are captured in strong markets, the cumulative return will be very competitive and the volatility of returns will be reduced.
	</p>


	<ul class="bottomnav">
   	  <li><a href="investment-approach.php" class="back">Previous &#8211; Investment approach</a></li><li><a href="#topnav" class="top">Top</a></li>
   	  <li><a href="investment-governance.php" class="next">Next &#8211; Investment governance</a></li>
	</ul>
</div>
</div>
</div>
        
<?php include '../../includes/footer.inc.php'; ?>