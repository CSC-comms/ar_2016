<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Operational risk reserve'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
     <div class="row">
     
		<?php include 'side-nav-notes.php' ?>
        
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