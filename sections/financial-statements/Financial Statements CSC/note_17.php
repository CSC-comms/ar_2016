<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Reporting of Outcomes'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-3 sidenav omega" id="sidenav">
	<p class="sectiontitle">CSC financial statement</p>
	<h2><a id="top" title="Top of the page" name="top"></a>In this section</h2>
	<ul>
        <li><a href="note_1.php">1. Overview</a></li>
                	  <li><a href="note_2.php">2. Expenses</a></li>
                	  <li><a href="note_3.php">3. Own-Source Revenue</a></li>
                	  <li><a href="note_4.php">4. Financial Assets</a></li>
                	  <li><a href="note_5.php">5. Non-Financial Assets</a></li>
                	  <li><a href="note_6.php">6. Payables</a></li>
                	  <li><a href="note_7.php">7. Provisions</a></li>
                	  <li><a href="note_8.php">8. Cash Flow Reconciliation</a></li>
                	  <li><a href="note_9.php">9. Appropriations</a></li>
                	  <li><a href="note_10.php">10. Special Accounts</a></li>
                	  <li><a href="note_11.php">11. Senior Management Personnel Remuneration</a></li>
                	  <li><a href="note_12.php">12. Contingent Assets and Liabilities</a></li>
                	  <li><a href="note_13.php">13. Financial Instruments</a></li>
                	  <li><a href="note_14.php">14. Fair Value Measurements</a></li>
                	  <li><a href="note_15.php">15. Assets Held in Trust</a></li>
                	  <li><a href="note_16.php">16. Restructuring</a></li>
                	  <li><a href="note_17.php">17. Reporting of Outcomes</a></li>
	</ul>
		</div>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
	<table>
		<thead>
			<tr>
				<th rowspan="3">&nbsp;</th>
				<th>Outcome 1<sup>1</sup></th>
				<th>&nbsp;</th>
			</tr>
			<tr>
				<th>2016</th>
				<th>2015</th>
			</tr>
			<tr>
				<th>$’000</th>
				<th>$’000</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Expenses</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Employees</td>
				<td>54,197</td>
				<td>833</td>
			</tr>
			<tr>
				<td>Suppliers</td>
				<td>29,448</td>
				<td>12,556</td>
			</tr>
			<tr>
				<td>Depreciation and amortisation</td>
				<td>5,656</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Finance costs</td>
				<td>12</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Write-down and impairment of assets</td>
				<td>271</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Total expenses</td>
				<td>89,584</td>
				<td>13,389</td>
			</tr>
			<tr>
				<td>Own-source income</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Sale of goods and rendering of services</td>
				<td>99,268</td>
				<td>78</td>
			</tr>
			<tr>
				<td>Interest</td>
				<td>13,469</td>
				<td>156</td>
			</tr>
			<tr>
				<td>Other revenue</td>
				<td>-</td>
				<td>120</td>
			</tr>
			<tr>
				<td>Total own-source income</td>
				<td>99,346</td>
				<td>13,745</td>
			</tr>
			<tr>
				<td>Assets</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Cash and cash equivalents</td>
				<td>41,113</td>
				<td>8,845</td>
			</tr>
			<tr>
				<td>Trade and other receivables</td>
				<td>3,442</td>
				<td>706</td>
			</tr>
			<tr>
				<td>Leasehold improvements</td>
				<td>6,932</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Property, plant and equipment</td>
				<td>4,117</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Intangibles</td>
				<td>20,129</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Other non-financial assets</td>
				<td>2,018</td>
				<td>157</td>
			</tr>
			<tr>
				<td>Total Assets</td>
				<td>77,751</td>
				<td>9,708</td>
			</tr>
			<tr>
				<td>Liabilities</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Supplier payables</td>
				<td>4,167</td>
				<td>1,965</td>
			</tr>
			<tr>
				<td>Other payables</td>
				<td>12,939</td>
				<td>1,313</td>
			</tr>
			<tr>
				<td>Employee provisions</td>
				<td>11,779</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Other provisions</td>
				<td>1,351</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Total liabilities</td>
				<td>30,236</td>
				<td>3,278</td>
			</tr>
		</tbody>
	</table>
	<p>
		<sup>1</sup> CSC has one outcome: Retirement and insurance benefits for scheme members and beneficiaries, including past, present and future employees of the Australian Government and other eligible employers and members of the Australian Defence Force, through investment and administration of their superannuation funds and schemes. Net costs shown included intra-government costs that were eliminated in calculating the actual Budget Outcome.
	</p>
    <ul class="bottomnav">
    <li><a href="note_16.php" class="back">Previous &#8211; Note 16</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="../index.php" class="next">Next &#8211 Financial statements</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>