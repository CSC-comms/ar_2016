<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'CSC financial statements'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">

		<?php include 'side-nav.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
            
            <h2>Financial Statements</h2>
            	<ul>
                	<li><a href="statement_of_comprehensive_income.php">Statement of Comprehensive Income</a></li>
                    <li><a href="statement_of_financial_position.php">Statement of Financial Position</a></li>
                    <li><a href="statement_of_changes_in_equity.php">Statement of Changes in Equity</a></li>
                    <li><a href="cash_flow_statement.php">Cash Flow Statement</a></li>
                </ul>
          <h2>Notes to the financial statements:</h2>
                <ul>
                	<li><a href="note_1.php">Note 1: Overview</a></li>
                	  <li><a href="note_2.php">Note 2: Expenses</a></li>
                	  <li><a href="note_3.php">Note 3: Own-Source Revenue</a></li>
                	  <li><a href="note_4.php">Note 4: Financial Assets</a></li>
                	  <li><a href="note_5.php">Note 5: Non-Financial Assets</a></li>
                	  <li><a href="note_6.php">Note 6: Payables</a></li>
                	  <li><a href="note_7.php">Note 7: Provisions</a></li>
                	  <li><a href="note_8.php">Note 8: Cash Flow Reconciliation</a></li>
                	  <li><a href="note_9.php">Note 9: Appropriations</a></li>
                	  <li><a href="note_10.php">Note 10: Special Accounts</a></li>
                	  <li><a href="note_11.php">Note 11: Senior Management Personnel Remuneration</a></li>
                	  <li><a href="note_12.php">Note 12: Contingent Assets and Liabilities</a></li>
                	  <li><a href="note_13.php">Note 13: Financial Instruments</a></li>
                	  <li><a href="note_14.php">Note 14: Fair Value Measurements</a></li>
                	  <li><a href="note_15.php">Note 15: Assets Held in Trust</a></li>
                	  <li><a href="note_16.php">Note 16: Restructuring</a></li>
                	  <li><a href="note_17.php">Note 17: Reporting of Outcomes</a></li>
                </ul>      
		  
	<ul class="bottomnav">
    <li><a href="../index.php" class="back">Previous &#8211; Financial Statements</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="statement_of_comprehensive_income.php" class="next">Next &#8211; Statement of Comprehensive Income</a></li>
	</ul>
</div>
</div>
</div>
        
<?php include '../../../includes/footer.inc.php'; ?>