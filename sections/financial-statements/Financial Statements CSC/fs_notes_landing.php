<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Notes to and forming part of the CSC financial statements'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-3 sidenav omega" id="sidenav">
	<p class="sectiontitle">CSC financial statement</p>
	<h2><a id="top" title="Top of the page" name="top"></a>In this section</h2>
	<ul>
        <li><a href="index.php">CSC financial statements</a></li>
        <li><a href="statement_of_comprehensive_income.php">Statement of Comprehensive Income</a></li>
        <li><a href="statement_of_financial_position.php">Statement of Financial Position</a></li>
        <li><a href="statement_of_changes_in_equity.php">Statement of Changes in Equity</a></li>
        <li><a href="cash_flow_statement.php">Cash Flow Statement</a></li>
        <li><a href="fs_notes_landing.php">CSC financial statement notes</a></li>
	</ul>
		</div>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
			<ol>
				<li><a href="note_1.php">Overview</a></li>
                	  <li><a href="note_2.php">Expenses</a></li>
                	  <li><a href="note_3.php">Own-Source Revenue</a></li>
                	  <li><a href="note_4.php">Financial Assets</a></li>
                	  <li><a href="note_5.php">Non-Financial Assets</a></li>
                	  <li><a href="note_6.php">Payables</a></li>
                	  <li><a href="note_7.php">Provisions</a></li>
                	  <li><a href="note_8.php">Cash Flow Reconciliation</a></li>
                	  <li><a href="note_9.php">Appropriations</a></li>
                	  <li><a href="note_10.php">Special Accounts</a></li>
                	  <li><a href="note_11.php">Senior Management Personnel Remuneration</a></li>
                	  <li><a href="note_12.php">Contingent Assets and Liabilities</a></li>
                	  <li><a href="note_13.php">Financial Instruments</a></li>
                	  <li><a href="note_14.php">Fair Value Measurements</a></li>
                	  <li><a href="note_15.php">Assets Held in Trust</a></li>
                	  <li><a href="note_16.php">Restructuring</a></li>
                	  <li><a href="note_17.php">Reporting of Outcomes</a></li>
			</ol>
<ul class="bottomnav">
    <li><a href="cash_flow_statement.php" class="next">Previous &#8211; Cash Flow Statement</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_1.php" class="next">Next &#8211; Note 1</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>