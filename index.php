<?php 

include('header.php');
session_start();
if (isset($_SESSION['message'])) {
  echo '<div class="alert alert-success">'.$_SESSION['message']."</div>";
  unset($_SESSION['message']);

}
?>
<html>
<head>
	
</head>
<body>
<div class="container py-5">
	<div class="container-fluid">
		<div class="row-md-3">
	<div class="row mt-4">
		<?php  
		include('sql.php');
		$sql="SELECT *FROM users";
        $result =mysqli_query($db,$sql);
        $check_conn=mysqli_num_rows($result) > 0;

        if($check_conn){
        	while ($row=mysqli_fetch_array($result)) {
        		?>
        		 
        		<div class="col-md-3">
        		
			    <div class="card">
			    	
			    	<div clas="row justify-content-center">
			    <a href="data.php">
			    	<div class="alb">
				<img src="upload/<?php  echo $row['Images']; ?>" class="card-img-top" alt="Profile Pic"></a>
				<p class="card-title"><strong> <?php  echo $row['name']; ?></strong> </p>
				<div class="buttons">
				
				<button class="btn btn-danger">Delete</button>	
				<button class="btn btn-primary">Edit</button>
				</div>
			</div>
			</div>
			</a>
			</div>
		</div>

        		<?php
        		
        	}
        }else{
        	echo 'no personal data entry';
        }
		?>
		</div>
	</div>
</div>


<style type="text/css">
	.card{
		background-color: blue;
		border: 2px;
		border-radius: 15px;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	body{
		background-color: #2d80f7e3;
	
		justify-content: center;
		flex-wrap: wrap;

	}
	img .card-img-top{
		height: 90px;
		width: 90px;
	}
	.card-title{
		color:blue;
		font-size: 18;
	}
	.buttons{
		margin-left: 40px;
		margin-bottom: 5px;
		border-radius: 15px;
	}
	.btn .btn-success{
		border-radius: 15px;
	}
</style>
</body>
</html>