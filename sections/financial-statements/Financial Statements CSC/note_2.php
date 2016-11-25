<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Expenses'; 
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
						<h2>2.1: Employee Benefits</h2>
						<table class="column_bold">
						<thead>
							<tr>
								<th>&nbsp;</th>
								<th>2016<br>$'000</th>
								<th>2015<br>$'000</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Wages and salaries</td>
								<td>41,809</td>
								<td>730</td>
							</tr>
							<tr>
								<td>Superannuation</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>Defined contribution plans</td>
								<td>4,028</td>
								<td>65</td>
							</tr>
							<tr>
								<td>Defined benefit plans</td>
								<td>3,050</td>
								<td>38</td>
							</tr>
							<tr>
								<td>Leave and other entitlements</td>
								<td>5,049</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Separation and redundancies</td>
								<td>261</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Total employee benefits</td>
								<td class="border_top_bottom">54,197</td>
								<td class="border_top_bottom">833</td>
							</tr>
							</tbody>
						</table>
						<h2>2.2: Suppliers</h2>
						<table>
							<thead>
							<tr>
								<th>&nbsp;</th>
								<th>2016<br>$'000</th>
								<th>2015<br>$'000</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Goods and services supplied or rendered</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>Consultants</td>
								<td>4,374</td>
								<td>3</td>
							</tr>
							<tr>
								<td>Contractors</td>
								<td>3,660</td>
								<td>10,486</td>
							</tr>
							<tr>
								<td>Information technology and communications</td>
								<td>6,215</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Insurance</td>
								<td>603</td>
								<td>472</td>
							</tr>
							<tr>
								<td>Printing/stationery</td>
								<td>501</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Property (other than rent)</td>
								<td>1,207</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Training and development</td>
								<td>675</td>
								<td>40</td>
							</tr>
							<tr>
								<td>Travel</td>
								<td>1,343</td>
								<td>124</td>
							</tr>
							<tr>
								<td>Other goods and services</td>
								<td>5,633</td>
								<td>26</td>
							</tr>
							<tr>
								<td>Total goods and services supplied or rendered</td>
								<td class="border_top_bottom">24,211</td>
								<td class="border_top_bottom">11,151</td>
							</tr>
							<tr>
								<td>Goods supplied</td>
								<td>861</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Services rendered</td>
								<td>23,350</td>
								<td>11,151</td>
							</tr>
							<tr>
								<td>Total goods and services supplied or rendered</td>
								<td class="border_top_bottom">24,211</td>
								<td class="border_top_bottom">11,151</td>
							</tr>
							<tr>
								<td>Other supplier expenses</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>Operating lease rentals</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>Minimum lease payments</td>
								<td>4,331</td>
								<td>1,405</td>
							</tr>
							<tr>
								<td>Workers compensation expenses</td>
								<td>906</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Total other suppliers</td>
								<td class="border_top_bottom">5,237</td>
								<td class="border_top_bottom">1,405</td>
							</tr>
							<tr>
								<td>Total suppliers</td>
								<td class="border_top_bottom">29,448</td>
								<td class="border_top_bottom">12,556</td>
							</tr>
						</tbody>
					</table>
					<h3>Leasing commitments</h3>
					<p>
						Operating leases are non-cancellable in the normal course of business. CSC in its capacity as lessee has leases for office accomodation in Canberra City (head office and financial planning office), Belconnen, Sydney, Melbourne and Brisbane. Lease payments are subject to annual increases of the higher of 3.25% or the movement in the Consumer Price Index in the head office, 3.75% fixed annual rate increases in the financial planning office, 3.6% fixed annual rate increases in the Belconnen office and 4% fixed rate annual increases in the Sydney office. The initial period of the head office lease is still current and may be renewed by two further terms of 3 years. The financial planning office lease may be renewed by one period of two years. The Belconnen office and Sydney office leases have no further option for renewal. The Melbourne and Brisbane offices are for fixed terms of twelve months.
					</p>
					<h3>Commitments for minimum lease payments in relation to non-cancellable operating leases are payable as follows:</h3>
					<table>
						<thead>
						<tr>
							<th>&nbsp;</th>
							<th>2016<br>$'000</th>
							<th>2015<br>$'000</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>Within 1 year</td>
								<td>4,047</td>
								<td>1,354</td>
							</tr>
							<tr>
								<td>Between 1 to 5 years</td>
								<td>14,648</td>
								<td>5,466</td>
							</tr>
							<tr>
								<td>More than 5 years</td>
								<td>4,336</td>
								<td>212</td>
							</tr>
							<tr>
								<td>Total operating lease commitments</td>
								<td class="border_top_bottom">23,031</td>
								<td class="border_top_bottom">7,032</td>
							</tr>			
						</tbody>	
					</table>
					<h2>2.3: Write-Down and Impairment of Assets</h2>
					<table>
						<thead>
						<tr>
							<th>&nbsp;</th>
							<th>2016<br>$'000</th>
							<th>2015<br>$'000</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>Impairment of financial instruments</td>
								<td>6</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Impairment of intangible assets</td>
								<td>244</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Write-off of property, plant and equipment on disposal</td>
								<td>21</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Total write-down and impairment of assets</td>
								<td class="border_top_bottom">271</td>
								<td class="border_top_bottom">-</td>
							</tr>
						</tbody>
					</table>
					<h2>2.4: Remuneration of Auditors</h2>
					<p>
						Financial statement audit services were provided to the entity by the Australian National Audit Office (ANAO) through its contracted service provider Deloitte Touche Tohmatsu (Deloitte). Fees for the services are as follows:
					</p>
					<table>
						<thead>
						<tr>
							<th>&nbsp;</th>
							<th>2016<br>$'000</th>
							<th>2015<br>$'000</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>Financial statement audit services</td>
								<td>98</td>
								<td>22</td>
							</tr>
							<tr>
								<td>Regulatory audit services</td>
								<td >11</td>
								<td>12</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td class="border_top_bottom">109</td>
								<td class="border_top_bottom">34</td>
							</tr>
						</tbody>	
					</table>
					<p>The following additional services were provided by Deloitte:</p>
					<table>
						<thead>
						<tr>
							<th>&nbsp;</th>
							<th>2016<br>$'000</th>
							<th>2015<br>$'000</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>Internal controls audit</td>
								<td>107</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Project risk advisory services</td>
								<td>131</td>
								<td>-</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td class="border_top_bottom">238</td>
								<td class="border_top_bottom">-</td>
							</tr>
						</tbody>
					</table>
					<p>No other services were provided to CSC by the ANAO or Deloitte.</p>
					<ul class="bottomnav">
					<li>
						<a href="note_1.php" class="back">Previous &#8211; Note 1</a>
					</li>
					<li>
						<a href="#topnav" class="top">Top</a>
					</li>
					<li>
						<a href="note_3.php" class="next">Next &#8211 Note 3</a>
					</li>
					</ul>
			    </div>
		    </div>
	    </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>