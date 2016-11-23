<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Vested benefits'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-3 sidenav omega" id="sidenav">
	<p class="sectiontitle">PSS financial statement</p>
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
				Vested benefits are benefits which are not conditional upon continued membership of the Scheme (or any other factor other than resignation from the Scheme) and include benefits 
				which members were entitled to receive had they terminated their Scheme membership as at the reporting date.
			</p>
			<p>
				An actuarial estimate of vested benefits at 30 June 2016 is $80.8 billion (2015: $76.6 billion). The value of vested benefits represents the liability that would have fallen on the 
				Scheme if all members had ceased service on 30 June 2016 and elected the option which maximised their benefit entitlement.
			</p>
			<p>
				The vested benefits have been calculated on the basis of current legislative arrangements for indexation of pension payments.
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
							<td>$billion</td>
							<td>$billion</td>
						</tr>
						<tr class="ar_fs_section_top">
							<td>The vested benefits amount is made up of:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Funded component</td>
							<td>17.9</td>
							<td>17.8</td>
						</tr>
						<tr>
							<td>Unfunded component</td>
							<td>62.9</td>
							<td>58.8</td>
						</tr>					
						<tr>
							<td>&nbsp;</td>
							<td class="border_top_bottom">80.8</td>
							<td class="border_top_bottom">76.6</td>
						</tr>
						<tr class="ar_fs_section_top">
							<td>The net assets of the Scheme compared to the vested benefits are:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Funded component</td>
							<td>17.9</td>
							<td>17.8</td>
						</tr>
						<tr>
							<td>Net assets</td>
							<td>17.9</td>
							<td>17.8</td>
						</tr>					
						<tr>
							<td>Surplus / (deficiency)</td>
							<td class="border_top_bottom">-</td>
							<td class="border_top_bottom">-</td>
						</tr>						
					</tbody>
				</table> 
			</div>
			<p>
				The net assets of the Scheme includes $63,125,021 of assets backing the operational risk reserve (2015: $30,647,739).
			</p>
<ul class="bottomnav">
    <li><a href="note_12.php" class="back">Previous &#8211; Note 12</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_14.php" class="next">Next &#8211 Note 14</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>