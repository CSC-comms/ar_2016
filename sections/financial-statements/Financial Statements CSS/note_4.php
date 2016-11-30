<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Investments'; 
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
					<td>Pooled Superannuation Trust - ARIA Investments Trust</td>
					<td>3 299 587</td>
					<td>3 763 252</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="border_top_bottom">3 299 587</td>
					<td class="border_top_bottom">3 763 252</td>
				</tr>
			</tbody>
		</table>
    <ul class="bottomnav">
    <li><a href="note_3.php" class="back">Previous &#8211; Note 3</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_5.php" class="next">Next &#8211 Note 5</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>