<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'How performance affects a member’s benefit'; 
	///////////////////////////////////////////////////
	include '../../includes/head.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include "side-nav.php" ?>
        
		<div class="col-sm-8 col-xs-11 content" id="startContent">
		  <h1><?php echo $title ?></h1>
	<p>
		The impact of investment performance on a member’s benefit differs across the schemes. For PSS contributors, investment returns do not affect their final benefit because they have a defined benefit. Performance has a greater impact on contributor and deferred benefit members in CSS and preservers in PSS because in those circumstances it does directly influence a member’s final benefit.
	</p>
	<p>
		Investment returns also affect the Australian Government’s financial outlays on members’ benefits in some circumstances, such as in the case of PSS contributors.
	</p>
	<p>
		For MilitarySuper, investment performance directly affects the member benefit for all members and a small part of the employer benefit for contributing members.
	</p>
	<p>
		Benefits in PSSap, ADF Super and CSCri are directly affected by investment performance. The 1922, DFRB, DFRDB and the PNG schemes are unfunded superannuation schemes. CSC does not invest the monies of these schemes.
	</p>


	<ul class="bottomnav">
   	  <li><a href="Introduction.php" class="back">Previous &#8211; Investments</a></li><li><a href="#topnav" class="top">Top</a></li>
   	  <li><a href="investment-approach.php" class="next">Next &#8211; Investment approach</a></li>
	</ul>
	
	<div class="btn-group" role="group">
    <button type="button" class="btn btn-default"><a href="Introduction.php" class="back">Previous </a></button>
	<button type="button" class="btn btn-default"><a href="#topnav" class="top">Top</a></button>
	<button type="button" class="btn btn-default"><a href="investment-approach.php" class="next">Next</a></button>
	</div>
	
</div>
</div>
</div>
        
<?php include '../../includes/footer.inc.php'; ?>