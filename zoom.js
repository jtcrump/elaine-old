<!-- // START ZOOM CODE AREA

// CHANGE ANY OF THESE VARIABLES TO SET THE ZOOM AND GRAY COLOR


var zoom_button	 	= "yes"		// ZOOM BUTTON yes/no
var zoom1		= "1.0"		// ZOOM AMOUNT
var zoom2		= "1.3"		// ZOOM AMOUNT
var zoom3		= "1.5"		// ZOOM AMOUNT
var zoom4		= "2.0"		// ZOOM AMOUNT








// COPYRIGHT 2009 © Allwebco Design Corporation
// Unauthorized use or sale of this script is strictly prohibited by law

// YOU DO NOT NEED TO EDIT BELOW THIS LINE



   if (zoom_button == "yes") {

browser_version= parseInt(navigator.appVersion);
browser_type = navigator.appName;
if (browser_type == "Microsoft Internet Explorer" && (browser_version >= 4) && (navigator.userAgent.indexOf("Windows") != -1)) {



document.write('<TABLE cellpadding="1" cellspacing="0" border="0"><tr><td>');
document.write('<input type="button" value="'+zoom1+'" onmouseover="this.className=\'buttonon\'" onmouseout="this.className=\'button\'" class="button" onClick=\'show.style.zoom="'+zoom1+'"\'><br>');
document.write('</td><td>');
document.write('<input type="button" value="'+zoom2+'" onmouseover="this.className=\'buttonon\'" onmouseout="this.className=\'button\'" class="button" onClick=\'show.style.zoom="'+zoom2+'"\'><br>');
document.write('</td><td>');
document.write('<input type="button" value="'+zoom3+'" onmouseover="this.className=\'buttonon\'" onmouseout="this.className=\'button\'" class="button" onClick=\'show.style.zoom="'+zoom3+'"\'><br>');
document.write('</td><td>');
document.write('<input type="button" value="'+zoom4+'" onmouseover="this.className=\'buttonon\'" onmouseout="this.className=\'button\'" class="button" onClick=\'show.style.zoom="'+zoom4+'"\'><br>');
document.write('</td></tr></table>');



}}






// END ZOOM CODE -->