<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Liability for accrued benefits'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include 'side-nav-notes.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
			<p>
				The liability for accrued benefits is the Plan's present obligation to pay benefits to members and beneficiaries and has been calculated as the difference between the total 
				assets and total liabilities as at year-end.
			</p>
			<div class="wrapper_not_full">
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
							<td>Liability for accrued benefits at beginning of the year</td>
							<td>7 789 326</td>
							<td>6 269 052</td>
						</tr>
						<tr>
							<td>Add:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Benefits accrued as a result of operations after income tax</td>
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
							<td><strong>Net change</strong></td>
							<td class="border_top_bottom">1 018 492</td>
							<td class="border_top_bottom">1 520 274</td>
						</tr>
						<tr class="ar_fs_section_top">
							<td><strong>Liability for accrued benefits at the end of the year</strong></td>
							<td class="border_top_bottom">8 807 818</td>
							<td class="border_top_bottom">7 789 326</td>
						</tr>						
					</tbody>
				</table> 
			</div>
    <ul class="bottomnav">
    <li><a href="note_11.php" class="back">Previous &#8211; Note 11</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_13.php" class="next">Next &#8211 Note 13</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>