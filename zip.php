<?php
/*======================================================================*\
|| #################################################################### ||
|| # ZipCode / Representative Matchup for MoreTurns v1.0.0            # ||
|| # Build Date: December 30, 2012                                    # ||
|| # Matches a representative to a specific zip code.                 # ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2008-2012 DBX Media, Inc. All Rights Reserved.        # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------------- THIS IS NOT FREE SOFTWARE ------------------ # ||
|| # Please visit http://www.dbxmedia.com/ for licensing details.     # ||
|| #################################################################### ||
\*======================================================================*/

// Input cleansing...
$zip = preg_replace("#[^0-9]#", "", $_GET['zip']); 
$zip = str_pad($zip, 5, '0', STR_PAD_LEFT);

// Do the actual matchup...
require_once('repref.php');
$repid = $repref[$zip];

// 2 = Fresno - East Bay
// 3 = North Bay
// 4 = Sacramento
// 5 = South Bay 
// 6 = Northern Nevada
// 7 = Northern Oregon
// 8 = Idaho
// 9 = Eastern Washington
// 10 = Northern Washington
// 11 = Seattle
// 12 = Southern Washington
// 13 = Alaska
// 14 = Montana
// Final redirect action...
switch($repid){
	case "2":		
	header('Location: mailto:kathie@moreturns.com');
	break;
	case "3": 
	header('Location: mailto:drichardson@moreturns.com');
	break;
	case "4": 
	header('Location: mailto:laura@moreturns.com');
	break;
	case "5": 
	header('Location: mailto:roxann@moreturns.com');
	break;
	case "6": 
	header('Location: mailto:laura@moreturns.com');
	break;
	case "7": 
	header('Location: mailto:pam@moreturns.com');
	break;
	case "8": 
	header('Location: mailto:kim@moreturns.com');
	break;
	case "9": 
	header('Location: mailto:joann@moreturns.com');
	break;
	case "10": 
	header('Location: mailto:terri@moreturns.com');
	break;
	case "11": 
	header('Location: mailto:julie@moreturns.com');
	break;
	case "12": 
	header('Location: mailto:sherry@moreturns.com');
	break;
	case "13": 
	header('Location: mailto:kelly@moreturns.com');
	break;
	case "14": 
	header('Location: mailto:deedee@moreturns.com');
	break;
	default:
	header('Location: http://www.moreturns.com/contact.html');
}
//EOF
?>