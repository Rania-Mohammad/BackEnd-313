<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>uploadfile</title>
  </head>
  <body>


  <h1 class="border p-1 my-2 text-center bg-success ">upload file php </h1>

  <div class="container">
    <div class="row">
     

         
         
    <form method="POST"  action ="<?php $_SERVER['PHP_SELF']?>" class="col-sm-6" enctype="multipart/form-data" >

       <div class="form-group">
        <label >Image</label>
        <input type="file" name="image" class="form-control">
       </div>

       <div class="form-group">
        <hr>
        </div>

     <button type="submit" class= "btn btn-primary">Submit</button>
    </form>
<div class="col-sm-6">
<?php
$error='';
$success='';
if($_SERVER['REQUEST_METHOD']=="POST"){
   $file = $_FILES['image'];

   $name=$file['name'];
   $type=$file['type'];
   $tmp_name=$file['tmp_name'];
   $f_error=$file['error'];
   $size=$file['size'];

   if($name != ''){

    $extension=pathinfo($name);
 
        $origin_name=$extension['filename'];
        $origin_ext=$extension['extension'];
        $allowed_ext=array('png','jpg','gif','jpeg','jfif','JPG');
        if(in_array($origin_ext,$allowed_ext)){
            if($f_error===0){
                if($size<50000){
                   //upload file on server//
                   //1- new name -->should be unique
                   $new_name=uniqid('',true).".".$origin_ext;
                   //2-its Place on server
                //    $destination="upload_file".$new_name;//لو عاوزه اضيفها جمب البروجيكت مباشره 
                $destination="uploads/".$new_name;//لو عاوزه اضيفها فى فولدر من فولدرز البروجيكت ه 

                   move_uploaded_file($tmp_name,$destination);
                   $success="Your file have been loaded successfully";
                }
                else{
                    $error= "Your file is tooo big";
                }

            }
            else{
                $error= "You Have An Error";
            }

        }
        else{
            $error= "file not allowed ";
        }

   }
   else
   $error=  "please chose image";

 }
?>


 
<?php if($error != '') {?>
 <h4 class="alert alert-danger col text-center"><?php echo $error;?> </h4> 
<?php } ?> 
 
<?php if($success != '') {?>
 <h4 class="alert alert-success col text-center"><?php echo $success;?> </h4> 
<?php } ?> 



</div>
</div>
</div>

















     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>