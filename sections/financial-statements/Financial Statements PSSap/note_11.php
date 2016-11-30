<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = "Auditor's remuneration"; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include 'side-nav-notes.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
			<p>
				Amounts paid or payable to the Australian National Audit Office for audit services:
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
							<td>$</td>
							<td>$</td>
						</tr>
						<tr class="ar_fs_section_top">
							<td>Financial statements</td>
							<td>49 000</td>
							<td>49 000</td>
						</tr>
						<tr>
							<td>Regulatory returns and compliance</td>
							<td>45 000</td>
							<td>45 000</td>
						</tr>					
						<tr>
							<td><strong>Total</strong></td>
							<td class="border_top_bottom">94 000</td>
							<td class="border_top_bottom">94 000</td>
						</tr>
					</tbody>
				</table> 
			</div>
			<p>
				The audits were provided by the Australian National Audit Office. The audit fees will be charged against the assets of the ARIA Investments Trust that are referable to the Plan.
			</p>
			<p>
				Deloitte Touche Tohmatsu are contracted by the ANAO to provide audit services on its behalf. Fees for those services are included above.
			</p>
			<p>
				No other services were provided by the Australian National Audit Office or Deloitte Touche Tohmatsu to the Plan during the reporting period.
			</p>
    <ul class="bottomnav">
    <li><a href="note_10.php" class="back">Previous &#8211; Note 10</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_12.php" class="next">Next &#8211 Note 12</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>