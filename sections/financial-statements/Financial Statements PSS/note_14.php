<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Liability for accrued benefits'; 
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
				The amount of accrued benefits is the present value of expected future benefit payments that arise from membership of the Scheme up to the measurement date. The accrued 
				benefits are comprised of a funded component (i.e. accumulated member contributions, and, where applicable, productivity contributions, plus interest) which will be met 
				from the Scheme, and an unfunded component that, pursuant to the Superannuation Act 1976 (as subsequently amended), will be funded from the Consolidated Revenue Fund at the 
				time the superannuation benefits become payable.
			</p>
			<p>
				The amount of accrued benefits in respect of the Scheme is calculated on a triennial basis. The most recent valuation of the accrued benefits was undertaken by Mercer Consulting 
				(Australia) Pty Ltd as part of a comprehensive review as at 30 June 2014. A summary of the review is attached.
			</p>
				<table class="column_bold_tri">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>2014</th>
							<th>2011</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td>$billion</td>
							<td>$billion</td>
						</tr>
						<tr class="ar_fs_section_top">
							<td>Accrued benefits as at 30 June were:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Funded component</td>
							<td>16.6</td>
							<td>12.5</td>
						</tr>
						<tr>
							<td>Unfunded component</td>
							<td>46.9</td>
							<td>33.1</td>
						</tr>					
						<tr>
							<td>&nbsp;</td>
							<td class="border_top_bottom">63.5</td>
							<td class="border_top_bottom">45.6</td>
						</tr>
						<tr class="ar_fs_section_top">
							<td>The net assets compared to the liability for accrued benefits as at 30 June are:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Funded accrued benefits</td>
							<td>16.6</td>
							<td>12.5</td>
						</tr>
						<tr>
							<td>Net assets</td>
							<td>16.6</td>
							<td>12.5</td>
						</tr>					
						<tr>
							<td>Surplus / (deficiency)</td>
							<td class="border_top_bottom">-</td>
							<td class="border_top_bottom">-</td>
						</tr>						
					</tbody>
				</table> 
<ul class="bottomnav">
    <li><a href="note_13.php" class="back">Previous &#8211; Note 13</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_15.php" class="next">Next &#8211 Note 15</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>