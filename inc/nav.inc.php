<!-- row 1 -->
<!---
  	<nav class="navbar-inverse navbar-nav">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        </button>
      </div>



      <div class="collapse navbar-collapse" id="collapse">
     </nav> 
--->


<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #000;
}
</style>







<!---
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home<span class="caret"></span></a></li>

           <li class="dropdown"><a href="#" data-toggle="dropdown">Galleries<span class="caret"></span></a>
          	<ul class="dropdown-menu">
            	<li><a href="index.php?gal=earrings">Earrings</a></li>              
 		<li><a href="index.php?gal=necklaces">Necklaces and Pendants </a></li>
              <li><a href="index.php?gal=chains">Chains </a></li>
              <li><a href="index.php?gal=rings">Rings</a></li>
              <li><a href="index.php?gal=bracelets">Bracelets </a></li>c
--->

<div class="dropdown">
 <button class="dropbtn">   <a href="/" style="color: white;font-size: 16px;" >Home</a></button>
  </div>
        
<div class="dropdown">
  <button class="dropbtn">About Elaine and her Jewelry</button>
  <div class="dropdown-content">
    <a href="index.php?gal=earrings">Earrings</a>
    <a href="index.php?gal=necklaces">Necklaces and Pendants</a>
    <a href="index.php?gal=chains">Chains</a>
    <a href="index.php?gal=rings">Rings</a>
    <a href="index.php?gal=bracelets">Bracelets</a>
  </div>
</div>


              
<?php
// include("./inc/dbdfdsfghjyt.inc.php");
// $categories = GetCategories();


// foreach($categories as $cat){
// print '<li><a href="index.php?gal='.$cat['category'].'">'.$cat['category'].'</a></li>';
// }
?>

<!---
        
          <li class="dropdown"><a href="#" data-toggle="dropdown">About Elaine and her Jewelry<span class="caret"></span></a>
          	<ul class="dropdown-menu">
            	<li><a href="elaine_rader_artist_statement.php">Artist Statement</a></li>
		<li><a href="elaine_rader_artist_history.php">History and Stories</a></li>
                  <li><a href="http://paulrader.com/index.html">Her Dad, Artist Paul Rader </a></li>              
                  <li><a href="elaine_rader_artist_links.php">Favorite Links</a></li>
            </ul>          
          </li>   
--->


<div class="dropdown">
  <button class="dropbtn">About Elaine and her Jewelry</button>
  <div class="dropdown-content">
    <a href="#">Artist Statement</a>
    <a href="#">History and Stories</a>
    <a href="#">Her Dad, Artist Paul Rade</a>
    <a href="#">Favorite Links</a>
  </div>
</div>



 <!---     
           <li class="dropdown"><a href="#" data-toggle="dropdown">Exhibits and Events Calender<span class="caret"></span></a>
          	<ul class="dropdown-menu">
              <li><a href="elaine_rader_event_schedule.php">Schedule of Events </a></li>
              <li><a href="elaine_rader_event_holiday.php">Elaine Rader Holiday Show </a></li>
            </ul>          
          </li> 
--->



<div class="dropdown">
  <button class="dropbtn">Exhibits and Events Calender</button>
  <div class="dropdown-content">
    <a href="elaine_rader_event_schedule.php">Schedule of Events</a>
    <a href="elaine_rader_event_holiday.php">Elaine Rader Holiday Show</a>
  </div>
</div>


<!---
           <li class="dropdown"><a href="#" data-toggle="dropdown">Customer and Contact Information<span class="caret"></span></a>
          	<ul class="dropdown-menu">
            	<li><a href="elaine_rader_contact_info.php">Contact Information</a></li>
		<li><a href="elaine_rader_contact_help.php">Help with Site Browser</a></li>
              <li><a href="elaine_rader_contact_collector.php">Become a Collector </a></li>
            </ul>          
          </li>                
        </ul> 
      </div>
--->

<div class="dropdown">
  <button class="dropbtn">Customer and Contact Information</button>
  <div class="dropdown-content">
    <a href="elaine_rader_contact_info.php">Contact Information</a>
    <a href="elaine_rader_contact_help.php">Help with Site Browser</a>
    <a href="elaine_rader_contact_collector.php">Become a Collector</a>
  </div>
</div>














