<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Sundry payables'; 
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
							<td>Insurance premiums payable</td>
							<td>3 376</td>
							<td>2 928</td>
						</tr>
						<tr>
							<td>Employer contributions refundable</td>
							<td>102</td>
							<td>176</td>
						</tr>
						<tr>
							<td>Other payables</td>
							<td>3 202</td>
							<td>269</td>
						</tr>					
						<tr>
							<td>&nbsp;</td>
							<td class="border_top_bottom">6 680</td>
							<td class="border_top_bottom">3 373</td>
						</tr>
					</tbody>
				</table> 
			</div>
    <ul class="bottomnav">
    <li><a href="note_9.php" class="back">Previous &#8211; Note 9</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_11.php" class="next">Next &#8211 Note 11</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>