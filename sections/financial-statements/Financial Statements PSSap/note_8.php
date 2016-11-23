<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Cash flow information'; 
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
		<li>
			<h2>Reconciliation of Cash</h2>
			<p>
				For the purposes of the Statement of Cash Flows, cash represents cash at bank. Cash at the end of the reporting period as shown in the Statement of Cash Flows is reconciled to the
				related items in the Statement of Financial Position as follows:
			</p>
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
						<tr>
							<td>Cash at bank</td>
							<td class="border_bottom">201 204</td>
							<td class="border_bottom">155 169</td>
						</tr>
					</tbody>
				</table>
			</div>
		</li>
		<li>
			<h2>Reconciliation of Benefits Accrued as a Result of Operations after Income Tax to Net Cash Inflows from Operating Activities</h2>
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
						<tr>
							<td><strong>Benefits accrued as a result of operations after income tax</strong></td>
							<td>1 408 593</td>
							<td>1 878 253</td>
						</tr>
						<tr>
							<td>Less:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Lump sum benefits paid and payable</td>
							<td>(380 955)</td>
							<td>(353 025)</td>
						</tr>
						<tr>
							<td>Pensions paid and payable</td>
							<td>(9 146)</td>
							<td>(4 954)</td>
						</tr>
						<tr>
							<td>Increase in net market value of investments</td>
							<td>(161 812)</td>
							<td>(785 756)</td>
						</tr>
						<tr>
							<td>Add back:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>(Increase)/decrease in interest receivable</td>
							<td>18</td>
							<td>79</td>
						</tr>
						<tr>
							<td>(Increase)/decrease in GST receivable</td>
							<td>(159)</td>
							<td>(14)</td>
						</tr>
						<tr>
							<td>(Increase)/decrease in deferred tax asset</td>
							<td>(70)</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Increase/(decrease) in benefits and pensions payable</td>
							<td>348</td>
							<td>(577)</td>
						</tr>
						<tr>
							<td>Increase/(decrease) in sundry payables</td>
							<td>3 307</td>
							<td>352</td>
						</tr>
						<tr>
							<td>Increase/(decrease) in current tax liabilities</td>
							<td>17 743</td>
							<td>2 315</td>
						</tr>
						<tr>
							<td><strong>Net cash inflows from operating activities</strong></td>
							<td class="border_top_bottom">877 867</td>
							<td class="border_top_bottom">736 673</td>
						</tr>
					</tbody>
				</table>
			</div>
		</li>
    <ul class="bottomnav">
    <li><a href="note_7.php" class="back">Previous &#8211; Note 7</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_9.php" class="next">Next &#8211 Note 9</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>