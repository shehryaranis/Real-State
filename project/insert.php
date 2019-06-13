<?php include 'header.php';?>
 <pre>
 <?php print_r($_POST)?></pre>
 <?php
 
 $mysqli=new mysqli('localhost','root','','realstate');
    if($mysqli->connect_error)
    {
      printf("can not connect database %s\n",$mysqli->connect_error);
      exit();
    }
if(isset($_POST['submit'])){

  $name=$_POST['name']; 
  $monthly=$_POST['monthly'];
  $address=$_POST['address'];
  $access=$_POST['access'];
  $floor=$_POST['floor'];
  $utility=$_POST['utility'];
  $descrip=$_POST['descrip'];

  $target_dir="uploads/";
  $target_file= $target_dir . basename($_FILES["images"]["name"]);
  $temp_file=$_FILES["images"]["name"];
  move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
  
  $query="INSERT INTO property ( name,monthly,address,access,floor,utility,descrip,images) VALUES ('$name','$monthly','$address','$access','$floor','$utility','$descrip','$temp_file')";
  $insert=$mysqli->query($query);
}
//  $mysqli=new mysqli('localhost','root','','realstate');
//    if($mysqli->connect_error){

//    printf("can not connect databse %s\n" ,$mysqli->connect_error);
//    exit();
//  }

// if(isset($_POST['submit'])){

//  $name=$_POST['name'];
//  $monthly=$_POST['monthly'];
//  $address=$_POST['address'];
//  $access=$_POST['access'];
//  $floor=$_POST['floor'];
//  $utility=$_POST['utility'];
//  $descrip=mysqli_real_escape_string($mysqli ,$_POST['descrip']);
 
//  $target_dir="uploads/";
//  $target_file= $target_dir . basename($_FILES["images"]["name"]);
//  $temp_file=$_FILES["images"]["name"];
//  move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
 
//  $query="INSERT INTO 'property1' (name,monthly,address,access,floor,utility,descrip,images) 
// VALUES ('$name','$monthly','$address','$access','$floor','$utility','$descrip','$temp_file')";
//  $insert=$mysqli->query($query);
//  $last_id = $mysqli->insert_id;
//  $c=count($_FILES['img']['name']);
//  if($insert){

//    if($c < 10){

//      for ($i=0; $i <$c; $i++) { 
//        $img_name=$_FILES['img']['name'][$i];
//        move_uploaded_file($_FILES['img']['tmp_name'][$i] , "uploads/" .$img_name);
//        $query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
//        $ins=$mysqli->query($query_multi);
//      }
//      // else{
//      // 	echo "MAX LIMIT EXCEED";
//      // }

//    }

//  }


// }
//  $mysqli=new mysqli('localhost','root','','property');
//  if($mysqli->connect_error){
//  printf("can not connect data base %s\n",$mysqli->connect_error);
//  exit();
//  }
//  if(isset($_POST['submit'])){
// 	$name=$_POST['name']; 
// 	$monthly=$_POST['monthly'];
// 	$address=$_POST['address'];
// 	$access=$_POST['access'];
// 	$floor=$_POST['floor'];
// 	$utility=$_POST['utility'];
// 	$descrip=$_POST['descrip'];
// 	$target_dir="uploads/";
// 	$target_file=$target_dir.basename($_FILES["images"]["name"]);
// 	$temp_file=$_FILES["images"]["name"];
// 	move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
// 	//$query=INSERT INTO `propety`( name,monthly,address,access,floor,utility,descrip,images),
// 	//VALUES('$name','$monthly','$access','$floor','$utility','$descrip','$temp_file')"; -->
	
// 	$query="INSERT INTO `propety`(`id`, `name`, `monthly`, `address`, `access`, `floor`, `utility`, `descrip`, `images`)
// 	VALUES ([$name],[$monthly],[$address],[$access],[value-5],[$floor],[$utility],[$descrip],[$temp_file])";
// 	$insert=$mysqli->query($query);
//  }
  
?>
 
 
 
 
 <div class="container">
 <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Add a property</legend>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name of property</label>
      <div class="col-lg-10">
        <input type="text" name="name" class="form-control" placeholder="Name of property">
      </div>
    </div>
   
    <div class="form-group">
      <label for="exampleInputPassword1" class="col-lg-2 control-label">Monthly charge</label>
	  <div class="col-lg-10" >
      <input type="text" name="monthly" class="form-control" placeholder="Monthly charge">
    </div>
	</div>
	
	<div class="form-group">
      <label for="exampleTextarea" class="col-lg-2 control-label">Address</label>
	  <div class="col-lg-10">
      <textarea class="form-control" name="address" id="exampleTextarea" rows="3"></textarea>
    </div>
    </div>
	
	<div class="form-group">
      <label for="exampleInputPassword1" class="col-lg-2 control-label">Access</label>
	  <div class="col-lg-10" >
      <input type="text" name="access" class="form-control" placeholder="Access">
    </div>
	</div>
	
	<div class="form-group">
      <label for="exampleInputPassword1" class="col-lg-2 control-label">Floor Space</label>
	  <div class="col-lg-10" >
      <input type="text" name="floor" class="form-control" placeholder="Floor Space">
    </div>
	</div>
   <div class="form-group">
      <label for="exampleInputPassword1" class="col-lg-2 control-label">Utility</label>
	  <div class="col-lg-10" >
      <input type="text" name="utility" class="form-control" placeholder="Utility">
    </div>
	</div>
   
    <div class="form-group">
      <label for="exampleTextarea" class="col-lg-2 control-label">Description</label>
	  <div class="col-lg-10">
      <textarea class="form-control" name="descrip" id="exampleTextarea" rows="3"></textarea>
    </div>
    </div>
	<div class="form-group">
      <label for="exampleTextarea" class="col-lg-2 control-label">Feature image</label>
	  <div class="col-lg-10">
	  <input type="file" name="images">
      </div>
    </div>
	<div class="form-group">
      <label for="exampleTextarea" class="col-lg-2 control-label">Rooms images</label>
	  <div class="col-lg-10">
	  <input type="file" name="img[]" multiple>
      </div>
    </div>
     
   <div class="form-group">
	  <div class="col-lg-10 col-lg-offset-2">
	  <button type="reset" class="btn btn-danger">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
     
       
   
	
  </fieldset>
</form></div>





   <?php include 'footer.php';?>