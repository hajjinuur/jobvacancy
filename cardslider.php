
<!DOCTYPE html>
<html>
<head>
	<title>card slider</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 <!-- Swipper Css -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="style.css">

</head>
<div class="mynav">
<nav class="navbar navbar-st">
  <div class="container justify">
    <span class="navbar-brand mb-0 h1"> <h4>Shaqadoon</h4></span>
    <ul class="nav ">
  <li class="nav-item">
    <a class="nav-link active" href="index.php"><h5>Home</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="data.php"><h5>Employee</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><h5>contact</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" tabindex="-1" aria-disabled="false"><h5>Login</h5></a>
  </li>
</ul>
<div class="float-right"> 
            <a href="regist.php">Add New Employee</a>
        </div>
  </div>
</nav>
    </nav>
  </div>

<body>

	<div class="slide-container swiper">
		
		<div class="slide-content ">
	
			<div class="card-wrapper swiper-wrapper">
					
        			<div class="col-md-4">
					<div class="card swiper-slide">

					<div class="image-content">
						<span class="overlay"></span>
						<div class="card-image">
							<img src="upload/1.png" alt="" class="card-img">
						</div>
					</div>
					<div class="card-content">
						<h2 class="name">Usaame</h2>
						<p class="description"> Laascanood </p>
						<p class="description"> Arday dhigta jaamac </p>

						<button class="button"> View More</button>
					</div>
				</div>
				</div>
			
        		
		        
			</div>
		
		</div>
		<div class="swiper-button-next"></div>
     	<div class="swiper-button-prev"></div>
      	<div class="swiper-pagination"></div>
	</div>



</body>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/java.js"></script>


<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Lato&display=swap');
*{
	margin: 0;
	padding:0;
    box-sizing: border-box;
    font-family: 'Lato',sans-serif;
}
	body{
		min-height: 100vh;
		
		
		background-color: #EFEFEF;
}
	.slide-container{
		max-width: 1120px;
		width: 100%;
		height: 78%;
		position: absolute;
		top: 100px;
		align-items: center;
		justify-content: center;
		background-color: #9db7ffe7;
		padding: 40px;
		
	}
	.slide-content{
		margin:0 40px;
	}
	.card{
		width: 320px;
		border-radius:25px;
		background-color: #fff; 
	}
	.image-content, .card-content{
		height: 70%;

		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		padding:10px 14px;

	}
		.image-content{
		position: relative;
		row-gap:5px;
		padding:15px 0;

	}
	.overlay{
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width:100%;
		background-color: #4070f4;
		border-radius: 25px 20px 0 25px;
	}
	.overlay::before,
	.overlay::after{
		content: '';
		position: absolute;
		right: 0;
		bottom: -40px;
		height: 40px;
		width: 40px;
		background-color: #4070f4;

	}
	.overlay::after{
		border-radius: 0 25px 0 0;
		background-color: #fff;
	}
	.card-image{
		position: relative;
		height: 160px;
		width: 160px;
		border-radius: 90px;
		background-color:#fff;
		padding:3px;
	}
	
	h5{
        color: #fff;
      }

	
	.card-image .card-img{
		height: 100%;
		width:100%;
		display: flex;
		object-fit: cover;
		border-radius: 90px;
		border:4px solid #4070f4;
	}
	.name{
		font-size: 20px;
		font-weight: 500;
		color: #333;
	}
	.description{
		font-size: 14px;
		color: #707070;
		text-align: center;
	}
	.button{
		border: none;
		font-size: 15px;
		color: #fff;
		padding: 8px 16px;
		background-color: #4070f4; 
		border-radius: 5px;
		margin: 14px;
		cursor: pointer;
		transition: all 0.3s ease;
	}
	.button:hover{
		background:#265DF2;
	}
</style>
<!-- Swiper Javascript -->

</html>