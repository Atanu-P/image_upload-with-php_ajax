<?php
	require_once "db.php";

	$response = array(
		'status' => 0,
		'message' => 'Image upload failed, please try again.',
		'image' => 'no image'
	);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
    	$name = $_FILES['image']['name'];      			 
		$type = $_FILES['image']['type'];      			
		$temp = $_FILES['image']['tmp_name'];
		$size = $_FILES['image']['size'];
		$location = "images/".$name;

		//echo $name;

		$check = 1;

		# limit image type
		if($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png'){
			$check = 1;
		} else {
		//	echo "<script>alert('Only JPG, JPEG, PNG files are allowed !!')</script>";
			$response['message'] = 'Only JPG, JPEG, PNG files are allowed !!';
			$check = 0;
		}



		if(file_exists($location)){
		//	echo "<script>alert('Image file already exists !!')</script>";
			$check = 0;

			$response['message'] = 'Image file already exists !!';
		
		}else if($size > 1000000) {
		//	echo "<script>alert('Sorry, your image size is more than 1mb !!')</script>";
			$check = 0;
			$response['message'] = 'Sorry, your image size is more than 1mb !!';
		}



		if($check == 1){

			if(move_uploaded_file($temp, $location)){
				//echo "<div  style='display:inline-block;'><h2 style='color:green; margin-top: 0px;margin-bottom: 0px; margin-left: 270px;'>\" ". htmlspecialchars( basename( $name)). "\" has been uploaded.</h2></div>";

				$insert = "insert into image_ajax values('','$name','$type','$size')";
				mysqli_query($con, $insert);
				$i = htmlspecialchars( basename( $name));
				$response['message'] = $i.' has been uploaded.';
				$response['status'] = 1;


				$response['image'] = $location;
			}



		}
		
		echo json_encode($response);
		
	}

	//echo json_encode($response);
?>