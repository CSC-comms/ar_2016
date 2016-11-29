<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Cash Flow Reconciliation'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
   <div class="container">
    <div class="row">
		
		<?php include 'side-nav-notes.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
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
				<td>Reconciliation of cash and cash equivalents as per Statement of Financial Position to Cash Flow Statement</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Cash and cash equivalents as per</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Cash Flow Statement</td>
				<td>41,113</td>
				<td>8,845</td>
			</tr>
			<tr>
				<td>Statement of Financial Position</td>
				<td>41,113</td>
				<td>8,845</td>
			</tr>
			<tr>
				<td>Difference</td>
				<td class="border_top_bottom">-</td>
				<td class="border_top_bottom">-</td>
			</tr>
			<tr>
				<td>Reconciliation of net contribution by services to net cash from/(used by) operating activities</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Net contribution by services</td>
				<td>9,762</td>
				<td>356</td>
			</tr>
			<tr>
				<td>Adjustments for non-cash items</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Depreciation / amortisation</td>
				<td>5,656</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Net write down of assets</td>
				<td>271</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Expense non-financial assets on transfer from the AIT</td>
				<td>110</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Movements in assets and liabilities</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Assets</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>(Increase) / decrease in trade and other receivables</td>
				<td>(2,250)</td>
				<td>(517)</td>
			</tr>
			<tr>
				<td>(Increase) / decrease in other non-financial assets</td>
				<td>(153)</td>
				<td>(157)</td>
			</tr>
			<tr>
				<td>Liabilities</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Increase / (decrease) in supplier payables</td>
				<td>(406)</td>
				<td>653</td>
			</tr>
			<tr>
				<td>Increase / (decrease) in other payables</td>
				<td>3,168</td>
				<td>640</td>
			</tr>
			<tr>
				<td>Increase / (decrease) in employee provisions</td>
				<td>(50)</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Increase / (decrease) in other provisions</td>
				<td>79</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Net cash from operating activities</td>
				<td class="border_top_bottom">16,187</td>
				<td class="border_top_bottom">975</td>
			</tr>
		</tbody>
	</table>
    <ul class="bottomnav">
    <li><a href="note_7.php" class="back">Previous &#8211; Note 7</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_9.php" class="next">Next &#8211 Note 9</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>