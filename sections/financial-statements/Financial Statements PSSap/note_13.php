<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Funds not allocated to member accounts'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-3 sidenav omega" id="sidenav">
	<p class="sectiontitle">PSSap financial statement</p>
	<h2><a id="top" title="Top of the page" name="top"></a>In this section</h2>
	<ul>
        <li><a href="note_1.php">1. description of the plan</a></li>
                <li><a href="note_2.php">2. basis of preparation</a></li>
                <li><a href="note_3.php">3. summary of principle accounting policies</a></li>
                <li><a href="note_4.php">4. investments</a></li>
                <li><a href="note_5.php">5. changes in net market values</a></li>
                <li><a href="note_6.php">6. funding arrangmements</a></li>
                <li><a href="note_7.php">7. income tax</a></li>
                <li><a href="note_8.php">8. cash flow information</a></li>
                <li><a href="note_9.php">9. sundry debtors</a></li>
                <li><a href="note_10.php">10. sundry payables</a></li>
                <li><a href="note_11.php">11. Auditor's remuneration</a></li>
                <li><a href="note_12.php">12. liability for accrued benefits</a></li>
                <li><a href="note_13.php">13. funds not allocated to member accounts</a></li>
                <li><a href="note_14.php">14. guaranteed benefits</a></li>
                <li><a href="note_15.php">15. vested benefits</a></li>
                <li><a href="note_16.php">16. financial instruments</a></li>
                <li><a href="note_17.php">17. related parties</a></li>
                <li><a href="note_18.php">18. commitments, contingent liabilities and contingent assets</a></li>
                <li><a href="note_19.php">19. subsequent events</a></li>
	</ul>
		</div>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
			<ol class="lower_alpha">
				<li>
					<h2>Operational Risk Reserve</h2>
					<div class="wrapper_not_full">
						<table class="column_bold_tri">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>2016</th>
									<th>2015</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>$'000</td>
									<td>$'000</td>
								</tr>
								<tr class="ar_fs_section_top">
									<td>Opening balance</td>
									<td>19 309</td>
									<td>6 280</td>
								</tr>
								<tr>
									<td>Transfers to reserve</td>
									<td>11 240</td>
									<td>12 745</td>
								</tr>
								<tr>
									<td>Earnings on reserve</td>
									<td>411</td>
									<td>284</td>
								</tr>								
								<tr>
									<td><strong>Closing balance</strong></td>
									<td class="border_top_bottom">30 960</td>
									<td class="border_top_bottom">19 309</td>
								</tr>						
							</tbody>
						</table> 
					</div>					
				</li>
				<li>
					<h2>Other Funds Not Allocated to Members' Accounts</h2>
					<div class="wrapper_not_full">
						<table class="column_bold_tri">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>2016</th>
									<th>2015</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>$'000</td>
									<td>$'000</td>
								</tr>
								<tr class="ar_fs_section_top">
									<td>Employer contributions (net of contributions tax) and member transfers received prior to year-end but not allocated at balance date</td>
									<td>17 870</td>
									<td>4 576</td>
								</tr>
								<tr>
									<td>Valuation differences between unit pricing and financial statements</td>
									<td>7 491</td>
									<td>(182)</td>
								</tr>
								<tr>
									<td>Bank interest</td>
									<td>2 129</td>
									<td>4 534</td>
								</tr>	
								<tr>
									<td>Other</td>
									<td>(2 127)</td>
									<td>803</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td class="border_top_bottom">25 363</td>
									<td class="border_top_bottom">9 731</td>
								</tr>						
							</tbody>
						</table> 
					</div>	
				</li>
			</ol>
<ul class="bottomnav">
    <li><a href="note_12.php" class="back">Previous &#8211; Note 12</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_14.php" class="next">Next &#8211 Note 14</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>