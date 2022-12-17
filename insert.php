<?php
include('sql.php');


if(isset($_POST['btnSubmit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $skills=$_POST['skills'];
    $education=$_POST['education'];
    $wages=$_POST['wages'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    
    if (isset$_FILES['image']) {
      
      $image_name=$_FILES['image']['name'];
      
      $tmp_name=$_FILES['image']['tmp_name'];
      $error=$_FILES['image']['error'];
      echo $image_name;
      if ($error === 0) {
        $img_ex= pathinfo($image_name, PATHINFO_EXTENSION);
        $img_ex_to_alc=strtolower($img_ex);

        $allowed_exs=array('jpg','jpeg','png');
        if(in_array($img_ex_to_alc, $allowed_exs)){
            $new_img_name=uniqid("IMG-",true).''.''.$img_ex_to_alc;
            $img_upload_path='../upload/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
             }else{
         echo "Fadlan dhameystir Magacaaga, Emailkaga iyo Xirfadada "."<a href='regist.php</a>'";

            } }
                  else{echo "Fadlan dhameystir Magacaaga, Emailkaga iyo Xirfadada "."<a href='regist.php</a>'";}
            }
               else{
             $sql="INSERT INTO users(name,email,skills,education,wages,address,Gender,Images)VALUES('$name','$email','$skills','$wages','$address','$education','$gender','$new_img_name')";
               $result=mysqli_query($db,$sql);

               if($result == true){
                  header('Location:data.php');
                  $_SESSION['message']='Waxaa soo galay shaqaale cusub';
                  }

       
    

    
    if(!empty($name)&&!(empty($email)&&!(empty($skills)))){
    $sql="INSERT INTO users(name,email,skills,education,wages,address,Gender,Images)VALUES('$name','$email','$skills','$wages','$address','$education','$gender','$image_name')";
    $result=mysqli_query($db,$sql);
    if($result == true){
      header('Location:data.php');
      $_SESSION['message']='Waxaa soo galay shaqaale cusub';
    }
  }else{
    echo "Fadlan dhameystir Magacaaga, Emailkaga iyo Xirfadada "."<a href='regist.php</a>'";
  }
}
}
?>
<html>
    <head>
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </head>
<nav class="navbar navbar-light bg-light">
  <div class="container justify">
    <span class="navbar-brand mb-0 h1">Shaqadoon</span>
    <ul class="nav ">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">Login</a>
  </li>
</ul>
  </div>
</nav>
    </nav>
<body>
  <div class="container">
    
  </div>

</body>
</html>