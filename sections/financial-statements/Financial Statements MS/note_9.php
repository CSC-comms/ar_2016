<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Operational risk reserve'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
     <div class="row">
     <div class="col-xs-3 sidenav omega" id="sidenav">
	<p class="sectiontitle">MilitarySuper financial statement</p>
	<h2><a id="top" title="Top of the page" name="top"></a>In this section</h2>
	<ul>
        <li><a href="note_1.php">1. description of the scheme and the fund</a></li>
                <li><a href="note_2.php">2. basis of preparation</a></li>
                <li><a href="note_3.php">3. summary of principle accounting policies</a></li>
                <li><a href="note_4.php">4. investments</a></li>
                <li><a href="note_5.php">5. changes in net market values of investments</a></li>
                <li><a href="note_6.php">6. funding arrangmements</a></li>
                <li><a href="note_7.php">7. income tax</a></li>
                <li><a href="note_8.php">8. sundry debtors</a></li>
                <li><a href="note_9.php">9. operational risk reserve</a></li>
                <li><a href="note_10.php">10. Auditor's remuneration</a></li>
                <li><a href="note_11.php">11. vested benefits</a></li>
                <li><a href="note_12.php">12. liability for accrued benefits</a></li>
                <li><a href="note_13.php">13. financial instruments</a></li>
                <li><a href="note_14.php">14. related parties</a></li>
                <li><a href="note_15.php">15. commitments, contingent liabilities and contingent assets</a></li>
                <li><a href="note_16.php">16. subsequent events</a></li>
	</ul>
		</div>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
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
							<td>11 292</td>
							<td>5 997</td>
						</tr>
						<tr>
							<td>Transfers to reserve</td>
							<td>14 032</td>
							<td>5,125</td>
						</tr>
						<tr>
							<td>Earnings on reserve</td>
							<td>290</td>
							<td>170</td>
						</tr>					
						<tr>
							<td><strong>Closing balance</strong></td>
							<td class="border_top_bottom">25 614</td>
							<td class="border_top_bottom">11 292</td>
						</tr>
					</tbody>
				</table> 
			</div>
<ul class="bottomnav">
    <li><a href="note_8.php" class="back">Previous &#8211; Note 8</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_10.php" class="next">Next &#8211 Note 10</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>