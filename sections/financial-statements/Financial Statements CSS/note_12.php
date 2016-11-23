<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Unallocated time'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-3 sidenav omega" id="sidenav">
	<p class="sectiontitle">CSS financial statement</p>
	<h2><a id="top" title="Top of the page" name="top"></a>Notes</h2>
	<ul>
        <li><a href="note_1.php">1. description of the scheme</a></li>
                <li><a href="note_2.php">2. basis of preparation</a></li>
                <li><a href="note_3.php">3. summary of principle accounting policies</a></li>
                <li><a href="note_4.php">4. investments</a></li>
                <li><a href="note_5.php">5. changes in net market values</a></li>
                <li><a href="note_6.php">6. funding arrangmements</a></li>
                <li><a href="note_7.php">7. income tax</a></li>
                <li><a href="note_8.php">8. sundry debtors</a></li>
                <li><a href="note_9.php">9. transfers from the Commonwealth Superannuation Scheme to the Public Sector Superannuation Scheme</a></li>
                <li><a href="note_10.php">10. operational risk reserve</a></li>
                <li><a href="note_11.php">11. Auditor's remuneration</a></li>
                <li><a href="note_12.php">12. unallocated time</a></li>
                <li><a href="note_13.php">13. vested benefits</a></li>
                <li><a href="note_14.php">14. liability for accrued benefits</a></li>
                <li><a href="note_15.php">15. financial instruments</a></li>
                <li><a href="note_16.php">16. related parties</a></li>
                <li><a href="note_17.php">17. commitments, contingent liabilities and contingent assets</a></li>
                <li><a href="note_18.php">18. subsequent events</a></li>
	</ul>
		</div>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
			<p>
				Monthly earnings are allocated to members each month-end, or for part of a month on contributions made during a month or where a member exits the Scheme during a month.
			</p>
			<p>
				Unallocated income primarily represents timing differences, including the difference between investment valuations applied in daily earnings rates and the confirmed investment 
				values published in these financial statements.
			</p>
			<p>
				Unallocated income is included in the net assets available to pay benefits at the end of the financial year. The closing balance represents approximately 1.25% (2015: 0.90%) of the 
				members' funded entitlements as at 30 June 2016.
			</p>
				<table class="column_bold_tri">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>2016</th>
							<th>2015</th>
						</tr>
                        <tr>
							<th>&nbsp;</th>
							<th>$'000</th>
							<th>$'000</th>
						</tr>
					</thead>
					<tbody>
						
						<tr class="ar_fs_section_top">
							<td>Opening balance of unallocated income</td>
							<td>33 767</td>
							<td>43 030</td>
						</tr>
						<tr>
							<td>Add: Earnings of fund for the year</td>
							<td>70 671</td>
							<td>420 506</td>
						</tr>
						<tr>
							<td>Less: Earnings allocation to members' accounts</td>
							<td>(58 893)</td>
							<td>(427 107)</td>
						</tr>
						<tr>
							<td>Less: Transfers to and earnings on operational risk reserve</td>
							<td>(4 402)</td>
							<td>(2 662)</td>
						</tr>						
						<tr>
							<td>Closing balance of unallocated income</td>
							<td class="border_top_bottom">41 143</td>
							<td class="border_top_bottom">33 767</td>
						</tr>
					</tbody>
				</table> 
    <ul class="bottomnav">
    <li><a href="note_11.php" class="back">Previous &#8211; Note 11</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_13.php" class="next">Next &#8211 Note 13</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>