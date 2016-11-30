<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = 'PSS financial statement'; 
	///////////////////////////////////////////////////
	include '../../../includes/head.fin.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    
		<?php include 'side-nav.php' ?>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
            <p><strong>Public Sector Superannuation Scheme Statement of Changes in Net Assets For the Year Ended 30 June 2016</strong></p>
            <table class="column_bold">
                <thead>
                    <tr  >
                        <th>&nbsp;</th>
                        <th>Note</th>
                        <th>2016</th>
                        <th>2015</th>
                    </tr>
                    <tr  >
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>$'000</th>
                        <th>$'000</th>
                    </tr>
                </thead>
                <tbody>
                    <tr  >
                        <td><strong>Net assets available to pay benefits at the beginning of the financial year</strong></td>
                        <td>&nbsp;</td>
                        <td><strong>17 845 076</strong></td>
                        <td>16 562 516</td>
                    </tr>
                    <tr  >
                        <td colspan="4"><strong>Net investment revenue</strong></td>
                    </tr>
                    <tr  >
                        <td>Interest</td>
                        <td>&nbsp;</td>
                        <td><strong>851</strong></td>
                        <td>1 379</td>
                    </tr>
                    <tr  >
                        <td>Changes in net market values</td>
                        <td>5c</td>
                        <td>347 672</td>
                        <td>1 952 653</td>
                    </tr>
                    <tr  >
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="border_top_bottom">348 523</td>
                        <td class="border_top_bottom">1 954 032</td>
                    </tr>
                    <tr  >
                        <td><strong>Contribution revenue</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr  >
                        <td>Member contributions</td>
                        <td>6a</td>
                        <td>599 667</td>
                        <td>592 796</td>
                    </tr>
                    <tr  >
                        <td>Employer contributions</td>
                        <td>6a</td>
                        <td>211 918</td>
                        <td>212 306</td>
                    </tr>
                    <tr  >
                        <td>Government co-contributions</td>
                        <td>6a</td>
                        <td>1 456</td>
                        <td>1 830</td>
                    </tr>
                    <tr  >
                        <td>Low income superannuation contributions</td>
                        <td>6a</td>
                        <td>353</td>
                        <td>400</td>
                    </tr>
                    <tr  >
                        <td>Net appropriation from Consolidated Revenue Fund</td>
                        <td>6b</td>
                        <td>646 170</td>
                        <td>308 279</td>
                    </tr>
					<tr>
                        <td>Transfers from the Commonwealth Super Scheme</td>
                        <td>9</td>
                        <td>861</td>
                        <td>216</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="border_top_bottom">1 460 425</td>
						<td class="border_top_bottom">1 115 827</td>
                    </tr>
					<tr>
						<td><strong>Other revenue</strong></td>
					</tr>
					<tr>
						<td>Insurance proceeds</td>
						<td>&nbsp;</td>
						<td>2 350</td>
						<td>2 582</td>
					</tr>
					<tr>
						<td>Insurance premiums</td>
						<td>&nbsp;</td>
						<td>2 681</td>
						<td>2 314</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="border_top_bottom">5 031</td>
						<td class="border_top_bottom">4 896</td>
					</tr>
					<tr>
						<td><strong>Total revenue</strong></td>
						<td>&nbsp;</td>
						<td class="border_top_bottom">1 813 979</td>
						<td class="border_top_bottom">3 074 755</td>
					</tr>
					<tr  >
						<td>Benefits paid</td>
						<td>6b</td>
						<td>(1 714 743)</td>
						<td>(1 757 782)</td>
					</tr>
					<tr  >
						<td>Insurance expense</td>
						<td></td>
						<td>(2 681)</td>
						<td>(2 314)</td>
					</tr>
					<tr  >
						<td><strong>Total expenses</strong></td>
						<td>&nbsp;</td>
						<td class="border_top_bottom">(1 717 424)</td>
						<td class="border_top_bottom">(1 760 096)</td>
					</tr>
					<tr  >
						<td><strong>Change in net assets before income tax</strong></td>
						<td>&nbsp;</td>
						<td>96 555</td>
						<td>1 314 659</td>
					</tr>
					<tr>
						<td><strong>Income tax expense</strong></td>
						<td>7a</td>
						<td>64 577</td>
						<td>1 282 560</td>
					</tr>
					<tr>
						<td><strong>Net assets available to pay benefits at the end of the financial year</strong></td>
						<td>&nbsp;</td>
						<td class="border_top_bottom">17 909 653</td>
						<td class="border_top_bottom">17 845 076</td>
					</tr>
					<tr class="column_bold ar_fs_section_top">
                        <td><strong>Investments</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="column_bold">
                        <td>Pooled superannuation trust</td>
                        <td>4</td>
                        <td><strong>17 891 656</strong></td>
                        <td>17 856 161</td>
                    </tr>
                    <tr class="column_bold ar_fs_section_bottom">
                        <td><strong>Total investments</strong></td>
                        <td>&nbsp;</td>
                        <td class="border_top_bottom">17 891 656</td>
                        <td class="border_top_bottom">17 856 161</td>
                    </tr>
                    <tr class="column_bold ar_fs_section_top">
                        <td><strong>Other assets</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="column_bold">
                        <td>Cash and cash equivalents</td>
                        <td>&nbsp;</td>
                        <td>59 465</td>
                        <td>36 659</td>
                    </tr>
                    <tr class="column_bold">
                        <td>Sundry debtors</td>
                        <td>8</td>
                        <td>2 989</td>
                        <td>5 262</td>
                    </tr>
					<tr>
						<td>Deferred tax assets</td>
						<td>7c</td>
						<td>153</td>
						<td>122</td>
					</tr>
                    <tr class="column_bold">
                        <td><strong>Total other assets</strong></td>
                        <td>&nbsp;</td>
                        <td class="border_top_bottom">62 607</td>
                        <td class="border_top_bottom">42 043</td>
                    </tr>
                    <tr class="column_bold ar_fs_section_top">
                        <td><strong>Total assets</strong></td>
                        <td>&nbsp;</td>
                        <td>17 954 263</td>
                        <td>17 898 204</td>
                    </tr>
                    <tr class="column_bold ar_fs_section_top">
                        <td>Benefits payable</td>
                        <td>&nbsp;</td>
                        <td>11 562</td>
                        <td>20 071</td>
                    </tr>
                    <tr class="column_bold">
                        <td>Sundry payables</td>
						<td>&nbsp;</td>
						<td>1 226</td>
						<td>1 096</td>
                    </tr>
					<tr class="column_bold">
						<td>Current tax liabilities</td>
						<td>7b</td>
						<td>31 822</td>
						<td>31 961</td>
					</tr>
					<tr class="column_bold">
						<td><strong>Total liabilities</strong></td>
						<td>&nbsp;</td>
						<td class="border_top_bottom">44 610</td>
						<td class="border_top_bottom">53 128</td>
					</tr>
					<tr class="column_bold ar_fs_section_top">
						<td><strong>Net assets available to pay benefits at the end of the financial year</strong></td>
						<td>&nbsp;</td>
						<td class="border_top_bottom">17 909 653</td>
						<td class="border_top_bottom">17 845 076</td>
					</tr>
                </tbody>
                
            </table>    
            <ul class="bottomnav">
    <li><a href="../index.php" class="back">Previous &#8211; Financial statements</a></li><li><a href="#topnav" class="top">Top</a></li><li><a href="fs_notes_landing.php" class="next">Next &#8211; PSS financial statement notes</a></li>
	</ul>
   </div>
   </div>
   </div>
        
<?php include '../../../includes/footer.fin.inc.php'; ?>