<?php

    require_once "db.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){

    	$id = $_GET['id'];

    	$select = "select * from image_ajax where id=$id";

    	$query = mysqli_query($con, $select);

	   	$fetch = mysqli_fetch_array($query);
    	

   		 if(unlink("images/".$fetch['name'])){
			

   		 	$delete = "delete from image_ajax where id=$id";

	   		 $query = mysqli_query($con, $delete);

			if($query == 1){
				//header('location:list.php');

				echo "<br><h1 style='color:red;' align='center'> \"". $fetch['name']."\" deleted successfully !!</h1>";
			}
		}

    	//echo $id;
    }

?>