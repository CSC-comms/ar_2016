<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'CSC organisational chart'; 
	///////////////////////////////////////////////////
	include '../../includes/head.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
	
    <?php include "side-nav.php" ?>
        
        <div class="col-sm-8 col-xs-11 content" id="startContent">        
		<div class="content">
			<h1><?php echo $title ?></h1>
         <p>CSC is structured as a fully integrated provider of
superannuation services, please find a downloadable version of our organisational chart:</p>
		<img src="../../images/org_chart.jpg" alt="CSC Organisational Chart">
         <p><a href="../../downloads/pdfs/Org structure_15_16.pdf">CSC organisational chart [PDF 27KB]</a></p>
		

<ul class="bottomnav">
    <li><a href="appendix1.php" class="back">Previous &#8211; Appendix 1</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="glossary.php" class="next">Next &#8211; Glossary</a></li>
	</ul>
	
	<div class="btn-group" role="group">
    <button type="button" class="btn btn-default"><a href="appendix1.php" class="back">Previous </a></button>
	<button type="button" class="btn btn-default"><a href="#topnav" class="top">Top</a></button>
	<button type="button" class="btn btn-default"><a href="glossary.php" class="next">Next</a></button>
	</div>
	
</div>
</div>
</div>
        
<?php include '../../includes/footer.inc.php'; ?>