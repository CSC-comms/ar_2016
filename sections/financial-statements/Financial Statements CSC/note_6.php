<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Payables'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include 'side-nav-notes.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
	<h3>6.1: Suppliers</h3>
	<table class="column_bold">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<th>2016<br> $'000</th>
				<th>2015<br> $'000</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Trade creditors and accruals</td>
				<td>4,167</td>
				<td>1,965</td>
			</tr>	
			<tr>
				<td>Total suppliers</td>
				<td  class="border_top_bottom">4,167</td>
				<td  class="border_top_bottom">1,965</td>
			</tr>	
			<tr>
				<td>Supplier payables expected to be settled in:</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>	
			<tr>
				<td>No more than 12 months</td>
				<td>4,167</td>
				<td>1,965</td>
			</tr>	
			<tr>
				<td>More than 12 months</td>
				<td>-</td>
				<td>-</td>
			</tr>	
			<tr>
				<td>Total suppliers</td>
				<td  class="border_top_bottom">4,167</td>
				<td  class="border_top_bottom">1,965</td>
			</tr>	
		</tbody>		
	</table>
	<p>
		Settlement is usually made within 30 days.
	</p>
	<h3>6.2: Other Payables</h3>
	<table class="column_bold">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<th>2016<br> $'000</th>
				<th>2015<br> $'000</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Wages and salaries</td>
				<td>204</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Unearned revenue</td>
				<td>10,496</td>
				<td>76</td>
			</tr>
			<tr>
				<td>Lease liabilities</td>
				<td>2,167</td>
				<td>1,229</td>
			</tr>
			<tr>
				<td>Other</td>
				<td>72</td>
				<td>8</td>
			</tr>
			<tr>
				<td>Total other payables</td>
				<td  class="border_top_bottom">12,939</td>
				<td  class="border_top_bottom">1,313</td>
			</tr>
			<tr>
				<td>Other payables expected to be settled in:</td>
				<td>7,688</td>
				<td>176</td>
			</tr>
			<tr>
				<td>No more than 12 months</td>
				<td>7,688</td>
				<td>176</td>
			</tr>
			<tr>
				<td>More than 12 months</td>
				<td>5,251</td>
				<td>1,137</td>
			</tr>
			<tr>
				<td>Total other payables</td>
				<td  class="border_top_bottom">12,939</td>
				<td  class="border_top_bottom">1,313</td>
			</tr>
		</tbody>
	</table>
    <ul class="bottomnav">
    <li><a href="note_5.php" class="back">Previous &#8211; Note 5</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_7.php" class="next">Next &#8211 Note 7</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>