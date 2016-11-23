<?php // This is where you add the page title, it also displays in the level 1 heading below
	$title = "About CSC’s members"; 
	///////////////////////////////////////////////////
	include '../../includes/head.inc.php'; 
	?>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-3 sidenav omega" id="sidenav">
    <p class="sectiontitle">Introduction</p>
	<h2><a id="top" title="Top of the page" name="top"></a>In this section</h2>
	<ul>
        <li><a href="about-csc.php">About CSC</a></li>
        <li><a href="about-csc-schemes.php">About CSC's schemes</a></li>
        <li><a href="about-csc-members.php">About CSC's members</a></li>
	</ul>
		</div>
        
		<div class="col-xs-8 content" id="startContent">
			<h1><?php echo $title ?></h1>
                <p>
                    CSC’s schemes generally consist of two types of members: contributors, who are employed by a participating scheme employer (usually an Australian Government entity) or are members of the ADF; and deferred benefit members or preservers who do not contribute to their scheme because they no longer work for a participating employer or are no longer ADF members. These members maintain an account within their scheme and under scheme rules can generally become contributors again if they join a participating employer or rejoin the ADF.
                </p>
                <p>
                    Pensioners are former scheme members who have exited their scheme and receive a pension paid by the Australian Government. Eligible pensioners from the military schemes may become contributors again if they re-enter the ADF for a period of more than 12 months.
                </p>
                <p>
                    Public sector scheme members who join CSCri are referred to as CSCri members.
                </p>
                <p>
                    Depending on scheme rules, scheme membership may also include former spouses following a family law split, who are known as associates; spouses and eligible children of deceased pensioners or members; and members who under scheme rules hold a benefit in a second scheme (MilitarySuper or PSSap), who are known in their second scheme as Ancillary members.
                </p>
	<ul class="bottomnav">
    	<li><a href="about-csc-schemes.php" class="back">Previous &#8211; About CSC's schemes</a></li><li><a href="#top" class="top">Top</a></li><li><a href="../performance/report-from-the-chair.php" class="next">Next &#8211; Report from the Chair</a></li>
	</ul>
</div>
</div>
</div>
        
<?php include '../../includes/footer.inc.php'; ?>