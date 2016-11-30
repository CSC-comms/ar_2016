<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Operational risk reserve'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include "side-nav-notes.php" ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
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
							<td>Opening balance</td>
							<td>7 234</td>
							<td>4 572</td>
						</tr>
						<tr>
							<td>Transfers to reserve</td>
							<td>4 240</td>
							<td>2 541</td>
						</tr>
						<tr>
							<td>Earnings on reserve</td>
							<td>162</td>
							<td>121</td>
						</tr>					
						<tr>
							<td><strong>Closing balance</strong></td>
							<td class="border_top_bottom">11 636</td>
							<td class="border_top_bottom">7 234</td>
						</tr>
					</tbody>
				</table> 
    <ul class="bottomnav">
    <li><a href="note_9.php" class="back">Previous &#8211; Note 9</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_11.php" class="next">Next &#8211 Note 11</a></li>
	</ul>
   </div>
   </div>
   </div>
           
<?php include '../../../includes/footer.fin.inc.php'; ?>