<?php
 
	 $con = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($con, 'imageupload');

   // echo ($db == 1)? "connected" :"not";