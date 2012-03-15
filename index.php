<?php defined('_JEXEC') or die;
/* =====================================================================
 * Template:	KWD_Joomla_OneWeb :: for Joomla! 2.5
 * Author: 	Chris Jones-Gill - KISS Web Design
 * Version: 	0.1
 * Created: 	March 2012
 * Copyright:	KISS Web Design - (C) 2012 - All rights reserved
 * License:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * Sources:	Forked from https://github.com/nternetinspired/OneWeb 12/3/2012
 *   		http://html5boilerplate.com/
 * 			http://stuffandnonsense.co.uk/projects/320andup/
 * 			http://construct-framework.com/
/* ===================================================================== */

// Load template logic
include_once (dirname(__FILE__).DS.'functions/logic.php');  
// check for debug switch
// debug gives all active modules the additional style of border: 3px solid black;
// and displays module state, column width and modules active in each set (or row)
// after the copyright notice in the footer
$debug = $this->params->get('debug');
?>
<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<jdoc:include type="head" />
<script>
if ( ! Modernizr.mq('(min-width:0)') ) {
  document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/respond.min.js"></s'+'cript>');
}
</script>
</head>
<body class="<?php echo htmlspecialchars($bodyFontFamily); ?> clearfix">
<div id="logoRow">
    <div class="container">
         <div class="row clearfix">
         	<a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename'));?>">
            	<header id="logo" class="<?php echo htmlspecialchars($logoCols); ?>col">
						<img border="0" alt="<?php echo htmlspecialchars($app->getCfg('sitename'));?> Logo" src="<?php echo $this->baseurl ?>/<?php echo $SiteLogo;?>">	
                    <div id="logotext"><?php echo htmlspecialchars($app->getCfg('sitename'));?></div>     
             	</header>
             </a> 
            <?php if ($tagline > 0) {
              	if($debug) { ?>
                    <div id="tagline" class="<?php echo htmlspecialchars($taglineCols); ?>col<?php if ($searchCols == 0) {echo " last";} ?>" style="border : 1px solid black;">
                <?php } else { ?>
                	<div id="tagline" class="<?php echo htmlspecialchars($taglineCols); ?>col<?php if ($searchCols == 0) {echo " last";} ?>">
                <?php } ?>
                        <jdoc:include type="modules" name="tagline" style="html5" />
                    </div>
            <?php } ?>	
            <?php if ($search > 0) {
            	if($debug) { ?>
                    <div role="search" id="search" class="<?php echo htmlspecialchars($searchCols); ?>col last"  style="border : 1px solid black;">
               	<?php } else { ?>
                    <div role="search" id="search" class="<?php echo htmlspecialchars($searchCols); ?>col last">
                <?php } ?>
                      <jdoc:include type="modules" name="search" style="html5" />
                  </div>
            <?php } ?> 
         </div>	
    </div>  
</div>
<?php if ($menu > 0) { ?>
<header id="navRow">
    <div class="container">
        <div class="row clearfix">
            <div id="mobileMenu" class="mobile">
            	Menu
            </div>
                <?php if($debug) { ?>
                    <nav id="menu" role="navigation" class="twelvecol clearfix"  style="border : 1px solid black;">
                <?php } else { ?>
                    <nav id="menu" role="navigation" class="twelvecol clearfix">
                <?php } ?>
                        <jdoc:include type="modules" name="menu" style="html5" />
                    </nav>          
        </div>
    </div>
</header>
<?php } ?>
<?php if ($breadcrumbs > 0) { ?>
<header id="breadcrumbRow">
    <div class="container">
        <div class="row clearfix">
        	<?php if($debug) { ?>      
            	<nav id="breadcrumbs" role="navigation" class="twelvecol clearfix" style="border : 1px solid black;">
            <?php } else { ?>
            	<nav id="breadcrumbs" role="navigation" class="twelvecol clearfix">
            <?php } ?>
                <jdoc:include type="modules" name="breadcrumbs" style="html5" />
            </nav>
        </div>
    </div>
</header>
<?php } ?>
<?php if ($bigtop > 0) { ?>
<header id="BigTopRow">
    <div class="container">
        <div class="row clearfix">
        	<?php if($debug) { ?>      
            	<div id="bigtop" class="twelvecol clearfix" style="border : 1px solid black;"> 
            <?php } else { ?>
            	<div id="bigtop" class="twelvecol clearfix"> 
            <?php } ?>
                <jdoc:include type="modules" name="bigtop" style="html5" />
            </nav>
        </div>
    </div>
</header>
<?php } ?>
<?php if ($bannerModules > 0) { ?>
<header id="bannerRow">
    <div class="container">
         <div class="row clearfix">
            <?php if ($banner1 > 0) { ?>
            	<?php if($debug) { ?>
                	<div role="banner" id="banner1" class="<?php echo htmlspecialchars($banner1Cols); ?>col<?php if ($banner2 == 0) {echo " last";} ?>" style="border : 1px solid black; margin-right: 3.5%">
               	<?php } else { ?>
                	<div role="banner" id="banner1" class="<?php echo htmlspecialchars($banner1Cols); ?>col<?php if ($banner2 == 0) {echo " last";} ?>">
               	<?php } ?>
                    <jdoc:include type="modules" name="banner1" style="html5" />
                </div>
            <?php } ?>
            <?php if ($banner2 > 0) { ?>
            	<?php if($debug) { ?>
                	<div role="banner" id="banner2" class="<?php echo htmlspecialchars($banner2Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
                	<div role="banner" id="banner2" class="<?php echo htmlspecialchars($banner2Cols); ?>col last">
                <?php } ?>                
                    <jdoc:include type="modules" name="banner2" style="html5" />
                </div>
            <?php } ?>
         </div>	
    </div>  
</header>
<?php } ?>
<?php if ($aboveModules > 0) { ?>
<div id="aboveRow">
      <div class="container">
          <div class="row clearfix">
          	<?php if ($above1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above1" class="<?php echo htmlspecialchars($above1Cols); ?>col<?php if (($above2+$above3+$above4) == 0) {echo " last";} ?>" style="border : 1px solid black; <?php if(($above2+$above3+$above4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="above1" class="<?php echo htmlspecialchars($above1Cols); ?>col<?php if (($above2+$above3+$above4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
                    	<jdoc:include type="modules" name="above1" style="html5" />
              		</div>
            <?php } ?>
          	<?php if ($above2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above2" class="<?php echo htmlspecialchars($above2Cols); ?>col<?php if (($above3+$above4) == 0) {echo " last";} ?>" style="border : 1px solid black; <?php if(($above3+$above4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="above2" class="<?php echo htmlspecialchars($above2Cols); ?>col<?php if (($above3+$above4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
                      	<jdoc:include type="modules" name="above2" style="html5" />
              		</div>
            <?php } ?>
            <?php if ($above3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above3" class="<?php echo htmlspecialchars($above3Cols); ?>col<?php if ($above4 == 0) {echo " last";} ?>" style="border : 1px solid black; <?php if($above4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="above3" class="<?php echo htmlspecialchars($above3Cols); ?>col<?php if ($above4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
                      	<jdoc:include type="modules" name="above3" style="html5" />
              		</div>
            <?php } ?>
            <?php if ($above4 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above4" class="<?php echo htmlspecialchars($above4Cols); ?>col last" style="border : 1px solid black;"> 
                <?php } else { ?>
            		<div id="above4" class="<?php echo htmlspecialchars($above4Cols); ?>col last"> 
                <?php } ?>                
                      	<jdoc:include type="modules" name="above4" style="html5" />
              		</div>
             <?php } ?>
          </div>	
      </div>
</div>
<?php } ?>
<div id="mainRow">
      <div class="container">
          <div class="row clearfix">                                
            <?php if ($left > 0) : ?>
              	<?php if($debug) { ?>
              		<aside id="left" class="<?php echo htmlspecialchars($leftCols); ?>col clearfix"  style="border : 1px solid black; margin-right: 3.5%;" role="complementary">
                <?php } else { ?>
              		<aside id="left" class="<?php echo htmlspecialchars($leftCols); ?>col clearfix" role="complementary">
                <?php } ?>                
                   		<jdoc:include type="modules" name="left" style="html5" />
              		</aside>
            <?php endif; ?>
           	<?php if($debug) { ?>
           		<div id="main" role="main" class="<?php echo htmlspecialchars($mainCols); ?>col <?php if ($right == 0) echo "last" ; ?> clearfix"  style="border : 1px solid black; <?php if ($right == 1) echo "margin-right : 3.5%;";?>">
            <?php } else { ?>
           		<div id="main" role="main" class="<?php echo htmlspecialchars($mainCols); ?>col <?php if ($right == 0) echo "last" ; ?> clearfix">
            <?php } ?>                
                  	<jdoc:include type="message" />
           			<jdoc:include type="component" />
           		</div>
            <?php if ($right > 0) : ?>
              	<?php if($debug) { ?>
              		<aside id="right" class="<?php echo htmlspecialchars($rightCols); ?>col last clearfix"  style="border : 1px solid black;" role="complementary">
                <?php } else { ?>
              		<aside id="right" class="<?php echo htmlspecialchars($rightCols); ?>col last clearfix" role="complementary">
                <?php } ?>                
                    	<jdoc:include type="modules" name="right" style="html5" />
              		</aside>
            <?php endif; ?>
          </div>	
      </div>                			
</div>
<?php if ($belowModules > 0) { ?>
<div id="belowRow">
	<div class="container">
       	<div class="row clearfix">
			<?php if ($below1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="below1" class="<?php echo htmlspecialchars($below1Cols); ?>col<?php if (($below2+$below3+$below4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($below2+$below3+$below4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="below1" class="<?php echo htmlspecialchars($below1Cols); ?>col<?php if (($below2+$below3+$below4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="below1" style="html5" />
					</div>
			<?php } ?>
			<?php if ($below2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="below2" class="<?php echo htmlspecialchars($below2Cols); ?>col<?php if (($below3+$below4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($below3+$below4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="below2" class="<?php echo htmlspecialchars($below2Cols); ?>col<?php if (($below3+$below4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="below2" style="html5" />
					</div>
			<?php } ?>
			<?php if ($below3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="below3" class="<?php echo htmlspecialchars($below3Cols); ?>col<?php if ($below4 == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if($below4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="below3" class="<?php echo htmlspecialchars($below3Cols); ?>col<?php if ($below4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="below3" style="html5" />
					</div>
			<?php } ?>
			<?php if ($below4 > 0) { ?>
              	<?php if($debug) { ?>
					<div id="below4" class="<?php echo htmlspecialchars($below4Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
					<div id="below4" class="<?php echo htmlspecialchars($below4Cols); ?>col last">
                <?php } ?>                
						<jdoc:include type="modules" name="below4" style="html5" />
					</div>
			<?php } ?>
		</div>	
	</div>
</div>
<?php } ?>
<?php if ($bottomModules > 0) { ?>
<div id="bottomRow">
	<div class="container">
       	<div class="row clearfix">
			<?php if ($bottom1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="bottom1" class="<?php echo htmlspecialchars($bottom1Cols); ?>col<?php if (($bottom2+$bottom3+$bottom4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($bottom2+$bottom3+$bottom4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="bottom1" class="<?php echo htmlspecialchars($bottom1Cols); ?>col<?php if (($bottom2+$bottom3+$bottom4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="bottom1" style="html5" />
					</div>
			<?php } ?>
			<?php if ($bottom2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="bottom2" class="<?php echo htmlspecialchars($bottom2Cols); ?>col<?php if (($bottom3+$bottom4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($bottom3+$bottom4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="bottom2" class="<?php echo htmlspecialchars($bottom2Cols); ?>col<?php if (($bottom3+$bottom4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="bottom2" style="html5" />
					</div>
			<?php } ?>
			<?php if ($bottom3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="bottom3" class="<?php echo htmlspecialchars($bottom3Cols); ?>col<?php if ($bottom4 == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if($bottom4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="bottom3" class="<?php echo htmlspecialchars($bottom3Cols); ?>col<?php if ($bottom4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="bottom3" style="html5" />
					</div>
			<?php } ?>
			<?php if ($bottom4 > 0) { ?>
              	<?php if($debug) { ?>
					<div id="bottom4" class="<?php echo htmlspecialchars($bottom4Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
					<div id="bottom4" class="<?php echo htmlspecialchars($bottom4Cols); ?>col last">
                <?php } ?>                
						<jdoc:include type="modules" name="bottom4" style="html5" />
					</div>
			<?php } ?>
		</div>	
	</div>
</div>
<?php } ?>
<?php if ($mobileMenu > 0) { ?>
<div id="footerNav" class="mobile">
	<div class="container">
       	<div class="row clearfix">  				                
           	<?php if($debug) { ?>
				<nav id="footerMenu" role="navigation" class="clearfix"  style="border : 1px solid black;">
            <?php } else { ?>
				<nav id="footerMenu" role="navigation" class="clearfix" >
            <?php } ?>                
					<jdoc:include type="modules" name="mobile-menu" style="html5" />
				</nav>
		</div>
	</div>
</div>
<?php } ?>
<?php if ($footerModules > 0) { ?>
<footer role="contentinfo">	
   	<div class="container">
       	<div class="row clearfix">
			<?php if ($footer1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="footer1" class="<?php echo htmlspecialchars($footer1Cols); ?>col<?php if (($footer2+$footer3+$footer4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($footer2+$footer3+$footer4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="footer1" class="<?php echo htmlspecialchars($footer1Cols); ?>col<?php if (($footer2+$footer3+$footer4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="footer1" style="html5" />
					</div>
			<?php } ?>
			<?php if ($footer2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="footer2" class="<?php echo htmlspecialchars($footer2Cols); ?>col<?php if (($footer3+$footer4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($footer3+$footer4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="footer2" class="<?php echo htmlspecialchars($footer2Cols); ?>col<?php if (($footer3+$footer4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="footer2" style="html5" />
					</div>
			<?php } ?>
			<?php if ($footer3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="footer3" class="<?php echo htmlspecialchars($footer3Cols); ?>col<?php if ($footer4 == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if($footer4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="footer3" class="<?php echo htmlspecialchars($footer3Cols); ?>col<?php if ($footer4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="footer3" style="html5" />
					</div>
			<?php } ?>
			<?php if ($footer4 > 0) { ?>
              	<?php if($debug) { ?>
					<div id="footer4" class="<?php echo htmlspecialchars($footer4Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
					<div id="footer4" class="<?php echo htmlspecialchars($footer4Cols); ?>col last">
                <?php } ?>                
						<jdoc:include type="modules" name="footer4" style="html5" />
					</div>
			<?php } ?>
        </div>	
	</div>				
</footer>
<?php } ?>
<footer role="contentinfo">	
   	<div class="container">
       	<div class="row clearfix">      
			<div id="credit" class="last">&copy; <?php echo date("Y"); ?>
				<a href="http://kisswebdesign.co.uk" title="KISS Web Design">KISS Web Design</a>
			</div>
			<?php if($debug) {
				echo "<br /><br />Show which module positions are active (1=active, 0=inactive)";
				echo "<br />menu = " . $menu;
				echo "<br />mobileMenu = " . $mobileMenu;
				echo "<br />search = " . $search;
				echo "<br />tagline = " . $tagline;
				echo "<br />breadcrumbs = " . $breadcrumbs;

				echo "<br /><br />banner1 = " . $banner1;
				echo "<br />banner2 = " . $banner2;

				echo "<br /><br />above1 = " . $above1;
				echo "<br />above2 = " . $above2;
				echo "<br />above3 = " . $above3;
				echo "<br />above4 = " . $above4;

				echo "<br /><br />left = " . $left;
				echo "<br />right = " . $right;
				echo "<br />right = " . $right;

				echo "<br /><br />below1 = " . $below1;
				echo "<br />below2 = " . $below2;
				echo "<br />below3 = " . $below3;
				echo "<br />below4 = " . $below4;

				echo "<br /><br />bottom1 = " . $bottom1;
				echo "<br />bottom2 = " . $bottom2;
				echo "<br />bottom3 = " . $bottom3;
				echo "<br />bottom4 = " . $bottom4;

				echo "<br /><br />footer1 = " . $footer1;
				echo "<br />footer2 = " . $footer2;
				echo "<br />footer3 = " . $footer3;
				echo "<br />footer4 = " . $footer4;

				echo "<br /><br />Show how many columns (out of twelve) each module position is spanning.";
				echo "<br />logoCols = " . $logoCols;
				echo "<br />taglineCols = " . $taglineCols;
				echo "<br />searchCols = " . $searchCols;

				echo "<br /><br />banner1Cols = " . $banner1Cols;
				echo "<br />banner2Cols = " . $banner2Cols;

				echo "<br /><br />above1Cols = " . $above1Cols;
				echo "<br />above2Cols = " . $above2Cols;
				echo "<br />above3Cols = " . $above3Cols;
				echo "<br />above4Cols = " . $above4Cols;

				echo "<br /><br />leftCols = " . $leftCols;
				echo "<br />rightCols = " . $rightCols;

				if (($right == "0") && ($left == "0")) {
					echo "<br />(if) mainCols = " . $mainCols;
				}
				else {
					echo "<br />(else) mainCols = " . $mainCols;
				}

				echo "<br /><br />below1Cols = " . $below1Cols;
				echo "<br />below2Cols = " . $below2Cols;
				echo "<br />below3Cols = " . $below3Cols;
				echo "<br />below4Cols = " . $below4Cols;

				echo "<br /><br />bottom1Cols = " . $bottom1Cols;
				echo "<br />bottom2Cols = " . $bottom2Cols;
				echo "<br />bottom3Cols = " . $bottom3Cols;
				echo "<br />bottom4Cols = " . $bottom4Cols;

				echo "<br /><br />footer1Cols = " . $footer1Cols;
				echo "<br />footer2Cols = " . $footer2Cols;
				echo "<br />footer3Cols = " . $footer3Cols;
				echo "<br />footer4Cols = " . $footer4Cols;

				echo "<br /><br />Show the number of modules in each module set (row position)";
				echo "<br />bannerModules = " . $bannerModules;
				echo "<br />aboveModules = " . $aboveModules;
				echo "<br />belowModules = " . $belowModules;
				echo "<br />bottomModules = " . $bottomModules;
				echo "<br />footerModules = " . $footerModules;
			} ?>
        </div>
	</div>				
</footer>

<jdoc:include type="modules" name="debug"/>

<!-- Scripts -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/plugins.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/mylibs/helper.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/imgsizer.js"></script>
<![endif]-->

<script>
// iOS scale bug fix
MBP.scaleFix();
</script>

<?php if ($analytics != "UA-XXXXX-X") : ?>
<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','<?php echo htmlspecialchars($analytics); ?>'],['_trackPageview']]; 
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<noscript>JavaScript is unavailable or disabled; so you are probably going to miss out on a few things. Everything should still work, but with a little less pzazz!</noscript>
</body>
</html>