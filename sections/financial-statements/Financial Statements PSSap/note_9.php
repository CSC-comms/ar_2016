<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Sundry debtors'; 
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
							<td>Receivable from the ARIA Investments Trust</td>
							<td>68</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Interest receivable</td>
							<td>217</td>
							<td>235</td>
						</tr>
						<tr>
							<td>GST receivable</td>
							<td>173</td>
							<td>14</td>
						</tr>					
						<tr>
							<td>&nbsp;</td>
							<td class="border_top_bottom">458</td>
							<td class="border_top_bottom">249</td>
						</tr>
					</tbody>
				</table> 
				<p>No sundry debtors are past due or impaired (2015: Nil).</p>
			</div>
<ul class="bottomnav">
    <li><a href="note_8.php" class="back">Previous &#8211; Note 8</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_10.php" class="next">Next &#8211 Note 10</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>