<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Super schemes: PNG'; 
	///////////////////////////////////////////////////
	include '../../includes/head.inc.php'; 
	?>
    <div class="container">
    <div class="row">
    
		<?php include "side-nav.php" ?>
        
		<div class="col-sm-8 col-xs-11 content" id="startContent">
		  <h1><?php echo $title ?></h1>
			<h2>Overview of PNG</h2>
            <p>
                PNG is a closed public sector scheme with no contributing members. Constituted under the <em>Superannuation (Papua New Guinea) Ordinance 1951</em>, PNG provided retirement benefits for employees of the administration of the Territory of Papua and New Guinea through the establishment of the Papua and New Guinea Superannuation Fund. Since 1 July 1976, the scheme has been administered in accordance with section 38 of the PNG Act.
            </p>
            <h2>PNG membership</h2>
            <div class="container chart">
                <div class="row">
                <div>
				<p class="chart-title">Chart 30: PNG pensioners over five years</p>
				<img src="../../images/charts/PNG_pens.svg" alt="bar chart relating to PNG pensioners over five years"/>
                </div>
                <p>Note: figures are at 30 June of each year; ‘pensioners’ represent the number of pension accounts, not the exact number of pensions (eg multiple recipients such as a spouse and orphan children may be paid under one account).</p>
                </div>
                </div>
            <h2>Administration of PNG</h2>
            <h3>Benefit payments</h3>
            <div class="container chart">
                <div class="row">
                <div>
				<p class="chart-title">Chart 31: PNG pension payments over five years</p>
				<img src="../../images/charts/PNG-pens_pay.svg" alt="bar chart relating to PNG pension payments over five years"/>
                </div>
                <p>Note: 1922 scheme pensions are paid by the Australian Government.</p>
                </div>
                </div>
            <h2>Scheme legislation &amp; trust deed changes</h2>
            <p>
                No changes were made to the <em>Papua New Guinea (Staffing Assistance) Act 1973</em> or the <em>Papua New Guinea (Staffing Assistance) (Superannuation) Regulations</em>.
            </p>


	<ul class="bottomnav">
      <li><a href="DFRB-DFRDB-DFSPB.php" class="back">Previous &#8211; DFRB, DFRDB and DFSPB</a></li>
   	  <li><a href="#topnav" class="top">Top</a></li>
   	  <li><a href="../financial-statements/index.php" class="next">Next &#8211; Financial Statements</a></li>
	</ul>
	
	<div class="btn-group" role="group">
    <button type="button" class="btn btn-default"><a href="DFRB-DFRDB-DFSPB.php" class="back">Previous </a></button>
	<button type="button" class="btn btn-default"><a href="#topnav" class="top">Top</a></button>
	<button type="button" class="btn btn-default"><a href="../financial-statements/index.php" class="next">Next</a></button>
	</div>
	
</div>
</div>
</div>
        
<?php include '../../includes/footer.inc.php'; ?>