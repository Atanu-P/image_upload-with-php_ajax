<?php
    require_once "db.php";
?>

<html>
    <head> 
        <title>Image List</title>
    </head>
    <body> 
        
        

        <?php  require_once "form.php"; ?> 

        <hr>  

        <h2 align="center">List of Image</h2> 
        <table border="1px" cellpadding="10px" cellspacing="0px" align="center" id="list">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Preview</th>
                    <th>Delete</th>
                    
                </tr>
                <?php 
                        $select = "select * from image_ajax";

                        $query = mysqli_query($con, $select);


                        
                        while($fetch = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td><?= $fetch['name'] ?></td>
                    <td><?= $fetch['type'] ?></td>
                    <td><?= round($fetch['size']/ 1024, 1) ?> kb</td>
                    <td><a href="#" onclick="loadimg('<?=   $fetch['id']   ?>')">Preview</a></td>
                    <td><a href="#" onclick="deleteimg('<?=   $fetch['id']   ?>')">Delete</a></td>
                </tr>

                
                <?php
                        }
                ?>

        </table>
        <hr>

        <!--img id="preview" /-->

        <div id="preview"></div>
        <div id="deleted"></div>


        <script type="text/javascript">
            
            function loadimg(id) {
                var xhttp = new XMLHttpRequest();
                   
                
                xhttp.onreadystatechange = function() {
                        
                        
                         if (this.readyState == 4 && this.status == 200) {
                             document.getElementById("preview").innerHTML = this.responseText;
                              $(".status").load("form.php  .status");
                              $(".img").load("form.php  .img");
                              $("#deleted").load("index.php  #deleted");
                            }

                    };

                
                xhttp.open("GET", "preview.php?id="+id, true);
                xhttp.send();
            }

            function deleteimg(id) {
              
                if (confirm("Do you want to delete the image ?") == true) {
                        var xhttp = new XMLHttpRequest();
                         
                        xhttp.onreadystatechange = function() {
                        
                        
                            if (this.readyState == 4 && this.status == 200) {
                                 document.getElementById("deleted").innerHTML = this.responseText;
                                 $("#list").load("index.php #list");
                                 $(".status").load("form.php  .status");
                                 $(".img").load("form.php  .img");
                                  $("#preview").load("form.php  #preview");
                            }

                         };

                
                        xhttp.open("GET", "delete.php?id="+id, true);
                        xhttp.send();
                
                }
              
            }

        </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
