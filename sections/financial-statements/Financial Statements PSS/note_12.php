<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'Unallocated time'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include 'side-nav-notes.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
			<p>
				Monthly earnings are allocated to members each month-end, or for part of a month on contributions made during a month or where a member exits the Scheme during a month.
			</p>
			<p>
				Unallocated income primarily represents timing differences, including the difference between investment valuations applied in daily earnings rates and the confirmed investment 
				values published in these financial statements.
			</p>
			<p>
				Unallocated income is included in the net assets available to pay benefits at the end of the financial year. The closing balance represents approximately 0.34% (2015: 0.27%) of the 
				members' funded entitlements as at 30 June 2016.
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
						<tr class="ar_fs_section_top">
							<td>Opening balance of unallocated income</td>
							<td>47 418</td>
							<td>116 205</td>
						</tr>
						<tr>
							<td>Add: Earnings of fund for the year</td>
							<td>348 332</td>
							<td>1 953 780</td>
						</tr>
						<tr>
							<td>Less: Earnings allocation to members' accounts</td>
							<td>(302 533)</td>
							<td>(2 009 413)</td>
						</tr>
						<tr>
							<td>Less: Transfers to and earnings on operational risk reserve</td>
							<td>(32 477)</td>
							<td>(13 154)</td>
						</tr>						
						<tr>
							<td>Closing balance of unallocated income</td>
							<td class="border_top_bottom">60 740</td>
							<td class="border_top_bottom">47 418</td>
						</tr>
					</tbody>
				</table> 
			</div>
<ul class="bottomnav">
    <li><a href="note_11.php" class="back">Previous &#8211; Note 11</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="note_13.php" class="next">Next &#8211 Note 13</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>