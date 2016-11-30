<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Cash flow information'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include 'side-nav-notes.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
		<li>
			<h2>Reconciliation of Cash</h2>
			<p>
				For the purposes of the Statement of Cash Flows, cash represents cash at bank. Cash at the end of the reporting period as shown in the Statement of Cash Flows is reconciled to the
				related items in the Statement of Financial Position as follows:
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
							<td>$'000</td>
							<td>$'000</td>
						</tr>
						<tr>
							<td>Cash at bank</td>
							<td class="border_bottom">201 204</td>
							<td class="border_bottom">155 169</td>
						</tr>
					</tbody>
				</table>
			</div>
		</li>
		<li>
			<h2>Reconciliation of Benefits Accrued as a Result of Operations after Income Tax to Net Cash Inflows from Operating Activities</h2>
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
						<tr>
							<td><strong>Benefits accrued as a result of operations after income tax</strong></td>
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
							<td>Increase in net market value of investments</td>
							<td>(161 812)</td>
							<td>(785 756)</td>
						</tr>
						<tr>
							<td>Add back:</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>(Increase)/decrease in interest receivable</td>
							<td>18</td>
							<td>79</td>
						</tr>
						<tr>
							<td>(Increase)/decrease in GST receivable</td>
							<td>(159)</td>
							<td>(14)</td>
						</tr>
						<tr>
							<td>(Increase)/decrease in deferred tax asset</td>
							<td>(70)</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Increase/(decrease) in benefits and pensions payable</td>
							<td>348</td>
							<td>(577)</td>
						</tr>
						<tr>
							<td>Increase/(decrease) in sundry payables</td>
							<td>3 307</td>
							<td>352</td>
						</tr>
						<tr>
							<td>Increase/(decrease) in current tax liabilities</td>
							<td>17 743</td>
							<td>2 315</td>
						</tr>
						<tr>
							<td><strong>Net cash inflows from operating activities</strong></td>
							<td class="border_top_bottom">877 867</td>
							<td class="border_top_bottom">736 673</td>
						</tr>
					</tbody>
				</table>
			</div>
		</li>
    <ul class="bottomnav">
    <li><a href="note_7.php" class="back">Previous &#8211; Note 7</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_9.php" class="next">Next &#8211 Note 9</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>