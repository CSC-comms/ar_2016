<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Sundry debtors'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include "side-nav-notes.php" ?>
        
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
                        <tr>
							<th>&nbsp;</th>
							<th>$'000</th>
							<th>$'000</th>
						</tr>
					</thead>
					<tbody>
						
						<tr class="ar_fs_section_top">
							<td>Receivable from the ARIA Investments Trust</td>
							<td>18</td>
							<td>30</td>
						</tr>
						<tr>
							<td>Interest receivable</td>
							<td>72</td>
							<td>65</td>
						</tr>
						<tr>
							<td>Surcharge tax</td>
							<td>123</td>
							<td>116</td>
						</tr>
						<tr>
							<td>Amount to be appropriated from Consolidated Revenue Fund</td>
							<td>103</td>
							<td>216</td>
						</tr>					
						<tr>
							<td>Total</td>
							<td class="border_top_bottom">316</td>
							<td class="border_top_bottom">427</td>
						</tr>
					</tbody>
				</table> 
				<p>There are no receivables that are past due or impaired (2015: nil).</p>
			</div>
    <ul class="bottomnav">
    <li><a href="note_7.php" class="back">Previous &#8211; Note 7</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_9.php" class="next">Next &#8211 Note 9</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>