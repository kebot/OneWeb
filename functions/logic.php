<?php defined('_JEXEC') or die;
/* =====================================================================
 * Template:	KWD_Joomla_OneWeb :: for Joomla! 2.5
 * Author: 	Chris Jones-Gill - KISS Web Design
 * Version: 	0.1
 * Created: 	March 2012
 * Copyright:	KISS Web Design - (C) 2012 - All rights reserved
 * License:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * Sources:	Forked from https://github.com/nternetinspired/OneWeb 12/3/2012
 * 			http://construct-framework.com/
/* ===================================================================== */

/* =====================================================================
 * Function:	int_to_words($x)
 * Purpose:	To turn integers into words
 * Version:	1.0
 * Added:		March 13 2012
 * Author:		Chris Jones-Gill - KISS Web Design
 * Source:		Unknown, added to 'my useful php functions' around 2005
 * Usage:
 * 	<?php
 * 		$count = 9;
 * 		echo 'The integer ' . $count .  ' is ' . int_to_words($count) . ' in written English Text';
 * 	?>
 * Output:
 * The integer 9 is nine in written English Text
 * Why it is included here:
 * 		To enable us to calculate the number of columns for each module
 * 		position enabled automatically, if selected in the template Admin.
 * 		Then convert the integer calculated into text for use in the 
 * 		HTML output, so that the element can be styled correctly in CSS
/* ===================================================================== */
function int_to_words($x) {

$nwords = array( "zero", "one", "two", "three", "four", "five", "six", "seven",
                   "eight", "nine", "ten", "eleven", "twelve", "thirteen",
                   "fourteen", "fifteen", "sixteen", "seventeen", "eighteen",
                   "nineteen", "twenty", 30 => "thirty", 40 => "forty",
                   50 => "fifty", 60 => "sixty", 70 => "seventy", 80 => "eighty",
                   90 => "ninety" );

   if(!is_numeric($x))
      $w = '#';
   else if(fmod($x, 1) != 0)
      $w = '#';
   else {
      if($x < 0) {
         $w = 'minus ';
         $x = -$x;
      } else
         $w = '';
         
      // ... now $x is a non-negative integer.

      if($x < 21)   // 0 to 20
         $w .= $nwords[$x];
      else if($x < 100) {   // 21 to 99
         $w .= $nwords[10 * floor($x/10)];
         $r = fmod($x, 10);
         if($r > 0)
            $w .= '-'. $nwords[$r];
      } else if($x < 1000) {   // 100 to 999
         $w .= $nwords[floor($x/100)] .' hundred';
         $r = fmod($x, 100);
         if($r > 0)
            $w .= ' and '. int_to_words($r);
      } else if($x < 1000000) {   // 1000 to 999999
         $w .= int_to_words(floor($x/1000)) .' thousand';
         $r = fmod($x, 1000);
         if($r > 0) {
            $w .= ' ';
            if($r < 100)
               $w .= 'and ';
            $w .= int_to_words($r);
         }
      } else {    //  millions
         $w .= int_to_words(floor($x/1000000)) .' million';
         $r = fmod($x, 1000000);
         if($r > 0) {
            $w .= ' ';
            if($r < 100)
               $word .= 'and ';
            $w .= int_to_words($r);
         }
      }
   }
	return $w;
}
/* End of int_to_words() */

// Define shortcuts for template parameters
$loadMoo 				= $this->params->get('loadMoo');
$jQuery 				= $this->params->get('jQuery');
$setGeneratorTag		= $this->params->get('setGeneratorTag');
$analytics 				= $this->params->get('analytics');
// Get the site logo filename
$SiteLogo				= $this->params->get('SiteLogo');
#-----------------------------Lets get the info we need for the grid-----------------------------#
// Check for modules in columns
// from http://groups.google.com/group/joomla-dev-general/bse_thread/thread/b54f3f131dd173d

$menu = (int) ($this->countModules('menu') > 0);
$mobileMenu = (int) ($this->countModules('mobile-menu') > 0);
$search = (int) ($this->countModules('search') > 0);
$tagline = (int) ($this->countModules('tagline') > 0);
$breadcrumbs = (int) ($this->countModules('breadcrumbs') > 0);

$bigtop = (int) ($this->countModules('bigtop') > 0);

$banner1 = (int) ($this->countModules('banner1') > 0);
$banner2 = (int) ($this->countModules('banner2') > 0);

$above1 = (int) ($this->countModules('above1') > 0);
$above2 = (int) ($this->countModules('above2') > 0);
$above3 = (int) ($this->countModules('above3') > 0);
$above4 = (int) ($this->countModules('above4') > 0);

$left = (int) ($this->countModules('left') > 0);
$right = (int) ($this->countModules('right') > 0);
$right = (int) ($this->countModules('right') > 0);

$below1 = (int) ($this->countModules('below1') > 0);
$below2 = (int) ($this->countModules('below2') > 0);
$below3 = (int) ($this->countModules('below3') > 0);
$below4 = (int) ($this->countModules('below4') > 0);

$bottom1 = (int) ($this->countModules('bottom1') > 0);
$bottom2 = (int) ($this->countModules('bottom2') > 0);
$bottom3 = (int) ($this->countModules('bottom3') > 0);
$bottom4 = (int) ($this->countModules('bottom4') > 0);

$footer1 = (int) ($this->countModules('footer1') > 0);
$footer2 = (int) ($this->countModules('footer2') > 0);
$footer3 = (int) ($this->countModules('footer3') > 0);
$footer4 = (int) ($this->countModules('footer4') > 0);

/* =====================================================================
 * Get the column widths
 * Alteration of original code
 * Purpose:		Add column width calculations and override theme defaults
 * Added:		March 13 2012
 * Author:		Chris Jones-Gill - KISS Web Design
/* ===================================================================== */

$logoCols = $this->params->get('logo');
$taglineCols = $this->params->get('tagline');
$searchCols = $this->params->get('search');

$banner1Cols = $this->params->get('banner1');
$banner2Cols = $this->params->get('banner2');

if ($this->params->get('CalculateAbove')) {
	// Divide the total columns by the number of active modules
	// Ensures the modules always fill the available width
	// Overrides the values specified in the template style
	$AboveCols = int_to_words(12/($above1 + $above2 + $above3 + $above4));
	$above1Cols = $this->params->set('above1', $AboveCols);
	$above2Cols = $this->params->set('above2', $AboveCols);
	$above3Cols = $this->params->set('above3', $AboveCols);
	$above4Cols = $this->params->set('above4', $AboveCols);
}
else {
	// Use the values specified in the template style
	$above1Cols = $this->params->get('above1');
	$above2Cols = $this->params->get('above2');
	$above3Cols = $this->params->get('above3');
	$above4Cols = $this->params->get('above4');
}

if ($this->params->get('CalculateMain')) {
	$leftCols = $this->params->set('left', 'three');
	$rightCols = $this->params->set('right', 'three');
	if (($right == "0") && ($left == "0")) {
		$mainCols = $this->params->set('main', 'twelve');
	}
	else if (($right != "0") && ($left !="0")){
		$mainCols = $this->params->set('main', 'six');
	}
	else if (($right == "0") || ($left == "0")) {
		$mainCols = $this->params->set('main', 'nine');
	}
}
else {
	// Use the values specified in the template style
	$leftCols = $this->params->get('left');
	$mainCols = $this->params->get('main');
	$rightCols = $this->params->get('right');
}

if ($this->params->get('CalculateBelow')) {
	// Divide the total columns by the number of active modules
	// Ensures the modules always fill the available width
	// Overrides the values specified in the template style
	$BelowCols = int_to_words(12/($below1 + $below2 + $below3 + $below4));
	$below1Cols = $this->params->set('below1', $BelowCols);
	$below2Cols = $this->params->set('below2', $BelowCols);
	$below3Cols = $this->params->set('below3', $BelowCols);
	$below4Cols = $this->params->set('below4', $BelowCols);
}
else {
	// Use the values specified in the template style
	$below1Cols = $this->params->get('below1');
	$below2Cols = $this->params->get('below2');
	$below3Cols = $this->params->get('below3');
	$below4Cols = $this->params->get('below4');
}

if ($this->params->get('CalculateBottom')) {
	// Divide the total columns by the number of active modules
	// Ensures the modules always fill the available width
	// Overrides the values specified in the template style
	$BottomCols = int_to_words(12/($bottom1 + $bottom2 + $bottom3 + $bottom4));
	$bottom1Cols = $this->params->set('bottom1', $BottomCols);
	$bottom2Cols = $this->params->set('bottom2', $BottomCols);
	$bottom3Cols = $this->params->set('bottom3', $BottomCols);
	$bottom4Cols = $this->params->set('bottom4', $BottomCols);
}
else {
	// Use the values specified in the template style
	$bottom1Cols = $this->params->get('bottom1');
	$bottom2Cols = $this->params->get('bottom2');
	$bottom3Cols = $this->params->get('bottom3');
	$bottom4Cols = $this->params->get('bottom4');
}

if ($this->params->get('CalculateFooter')) {
	// Divide the total columns by the number of active modules
	// Ensures the modules always fill the available width
	// Overrides the values specified in the template style
	$FooterCols = int_to_words(12/($footer1 + $footer2 + $footer3 + $footer4));
	$footer1Cols = $this->params->set('footer1', $FooterCols);
	$footer2Cols = $this->params->set('footer2', $FooterCols);
	$footer3Cols = $this->params->set('footer3', $FooterCols);
	$footer4Cols = $this->params->set('footer4', $FooterCols);
}
else {
	$footer1Cols = $this->params->get('footer1');
	$footer2Cols = $this->params->get('footer2');
	$footer3Cols = $this->params->get('footer3');
	$footer4Cols = $this->params->get('footer4');
}	

// Calculate the number of modules published in a position
// Used in template index.php file to activate (>0) or ignore (=0) the row
$bannerModules = $banner1 + $banner2;
$aboveModules = $above1 + $above2 + $above3 + $above4;
$belowModules = $below1 + $below2 + $below3 + $below4;
$bottomModules = $bottom1 + $bottom2 + $bottom3 + $bottom4;
$footerModules = $footer1 + $footer2 + $footer3 + $footer4;

/* =====================================================================
 * 	End of column width settings
/* ===================================================================== */

#-----------------------------See if we are on the homepage-----------------------------#
// from Anthony Olsen of Joomla Bamboo, http://www.joomlabamboo.com

$activeMenu = & JSite::getMenu();
if ($activeMenu->getActive() == $activeMenu->getDefault()) {$siteHome = 'home';}else{$siteHome = 'sub';}

#----------------------------- Construct Code Snippets-----------------------------#
// GPL code taken from Construct template framework by Matt Thomas http://construct-framework.com/

// To enable use of site configuration
$app 					= JFactory::getApplication();

// Returns a reference to the global document object
$doc 					= JFactory::getDocument();

// Define relative path to the  current template directory
$template 				= 'templates/'.$this->template;

// Define shortcuts for template parameters
$bodyFontFamily 		= $this->params->get('bodyFontFamily');
$googleWebFont 			= $this->params->get('googleWebFont');
$googleWebFontSize		= $this->params->get('googleWebFontSize');
$googleWebFontTargets	= $this->params->get('googleWebFontTargets');
$googleWebFont2			= $this->params->get('googleWebFont2');
$googleWebFontSize2		= $this->params->get('googleWebFontSize2');
$googleWebFontTargets2	= $this->params->get('googleWebFontTargets2');
$googleWebFont3			= $this->params->get('googleWebFont3');
$googleWebFontSize3		= $this->params->get('googleWebFontSize3');
$googleWebFontTargets3	= $this->params->get('googleWebFontTargets3');

// Change generator tag
$this->setGenerator($setGeneratorTag);

// Remove MooTools if set to no.
if ( !$loadMoo ) {
	$head=$this->getHeadData();
	reset($head['scripts']);
	unset($head['scripts'][$this->baseurl . '/media/system/js/mootools.js']);
	unset($head['scripts'][$this->baseurl . '/plugins/system/mtupgrade/mootools.js']);
	unset($head['scripts'][$this->baseurl . '/media/system/js/mootools-core.js']);
	unset($head['scripts'][$this->baseurl . '/media/system/js/mootools-more.js']);
	unset($head['scripts'][$this->baseurl . '/media/system/js/caption.js']);	// We may as well remove caption.js too - Seth Warburton @ http://internet-inspired.com	
	$this->setHeadData($head);
}

// Fix Google Web Font name for CSS
$googleWebFontFamily 	= str_replace(array('+',':bold',':italic')," ",$googleWebFont);
$googleWebFontFamily2 	= str_replace(array('+',':bold',':italic')," ",$googleWebFont2);
$googleWebFontFamily3 	= str_replace(array('+',':bold',':italic')," ",$googleWebFont3);

// Typography --- font size params removed by Seth Warburton @ http://internet-inspired.com
if ($googleWebFont) {
	$doc->addStyleSheet('http://fonts.googleapis.com/css?family='.$googleWebFont.'');
	$doc->addStyleDeclaration('  '.$googleWebFontTargets.' {font-family:'.$googleWebFontFamily.';}');
}
if ($googleWebFont2) {
	$doc->addStyleSheet('http://fonts.googleapis.com/css?family='.$googleWebFont2.'');
	$doc->addStyleDeclaration('  '.$googleWebFontTargets2.' {font-family:'.$googleWebFontFamily2.';}');
}
if ($googleWebFont3) {
	$doc->addStyleSheet('http://fonts.googleapis.com/css?family='.$googleWebFont3.'');
	$doc->addStyleDeclaration('  '.$googleWebFontTargets3.' {font-family:'.$googleWebFontFamily3.';}');
}
#----------------------------- End Construct Code -----------------------------#


#----------------------------- Inject extras into the head -----------------------------#
// Musthave JS
$doc->addCustomTag('<script src="'.$template.'/js/libs/modernizr.2.5.3.custom.js"></script>');
if ($jQuery) {
  $doc->addCustomTag('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>');
}

// Site icons
$doc->addFavicon($template.'/img/small/apple-touch-icon.png','image/png','shortcut icon');
$doc->addFavicon($template.'/img/small/apple-touch-icon-precomposed.png','image/png','apple-touch-icon-precomposed');
$doc->addCustomTag('<link href="'.$template.'/img/medium/apple-touch-icon.png" rel="apple-touch-icon-precomposed" sizes="72x72">');
$doc->addCustomTag('<link href="'.$template.'/img/large/apple-touch-icon.png" rel="apple-touch-icon-precomposed" sizes="114x114">');

// Style sheets
$doc->addStyleSheet($template.'/css/style.css');

if ($this->params->get('SocialDarkGlyphFont')) {
	$doc->addStyleSheet($template.'/css/social-dark.css');
}
if ($this->params->get('SocialLightGlyphFont')) {
	$doc->addStyleSheet($template.'/css/social-light.css');
}
if ($this->params->get('GeneralWebsiteGlyphFont')) {
	$doc->addStyleSheet($template.'/css/general-website.css');
}
// Metas
$doc->setMetaData( 'HandheldFriendly', 'True' );
$doc->setMetaData( 'MobileOptimized', '320' );
$doc->setMetaData( 'viewport', 'width=device-width, target-densitydpi=160dpi, initial-scale=1.0' );
$doc->setMetaData( 'apple-mobile-web-app-capable', 'True' );
$doc->setMetaData( 'apple-mobile-web-app-status-bar-style', 'black-translucent' );
$doc->setMetaData( 'cleartype', 'on', true );
$doc->setMetaData( 'X-UA-Compatible', 'IE=edge,chrome=1', true );

// If (polyfill) JS
$doc->addCustomTag('<!--[if (lt IE 9) & (!IEMobile)]>');
$doc->addCustomTag('<script src="'.$template.'/js/libs/selectivizr-min.js"></script>');
$doc->addCustomTag('<![endif]-->');

$doc->addCustomTag('<!--[if lt IE 7 ]>');
$doc->addCustomTag('<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script><script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script></script>');
$doc->addCustomTag('<![endif]-->');
#----------------------------- End head code -----------------------------#