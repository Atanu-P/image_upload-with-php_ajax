<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>

<div style='display:inline-block;margin-right:10px' align="center">
	<form action="" method="POST" enctype="multipart/form-data">
		Upload Image:
		<input type="file" id="image" name="image" required="">
		<button type="submit">Upload</button>
	</form>
</div>

<div class="status" style='display:inline-block;margin-right:10px'></div>
<div class="img" style='display:inline-block'></div>
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(e){
		$("form").on('submit',(function(e){
				e.preventDefault();
				
				//var image = $("#image").val();

				//var form = $('form')[0];
				//var formData = new FormData(form);

				$.ajax({

					url:"upload.php",
					type:"POST",
					data: new FormData(this),
					 //dataType: 'json',
					contentType:false,
        			cache:false,
					processData:false,
					success:function(response){
								var res = JSON.parse(response);
								console.log(res);

								if(res.status == 1){
									$('form')[0].reset();
									$('.status').html('<h2 style="color:green" align="center">'+res.message+'</h2>');
									$('.img').html('<img src="'+res.image+'"  width="200" height="110">');
									$("#list").load("index.php #list");
									$("#deleted").load("index.php  #deleted");
								}else{
									$('.status').html('<h2 style="color:red" align="center">'+res.message+'</h2>');
								}
								
									   					 
							}

					})
				event.preventDefault();
			}));
		});
</script>
</body>
</html>