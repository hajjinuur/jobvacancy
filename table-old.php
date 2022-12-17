<?php
include('sql.php');

session_start();
if (isset($_SESSION['message'])) {
  echo '<div class="alert alert-success">'.$_SESSION['message']."</div>";
  unset($_SESSION['message']);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
  
    <link rel="stylesheet" href="style.css">
    <title>Shaqadoon Job Vancancy</title>
    <div class="mynav">
<nav class="navbar navbar-st">
  <div class="container justify">
    <span class="navbar-brand mb-0 h1"> <h4>Shaqadoon</h4></span>
    <ul class="nav ">
  <li class="nav-item">
    <a class="nav-link active" href="home.php"><h5>Home</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="table.php"><h5>Employee</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><h5>Contact Us</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" tabindex="-1" aria-disabled="false"><h5>About</h5></a>
  </li>
</ul>
<div class="float-right"> 
            <a href="regist.php">Add New Employee</a>
        </div>
  </div>
</nav>
    </nav>
  </div>
  </head>
  <body>

    <?php  
        $sql="SELECT *FROM users";
        $result =mysqli_query($db,$sql);
    ?>
    <div class="table-responsive-sm">
    <h2 class="text-center">ShaqaDoon Data-Table</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
              <table id="datatable" class="table table-sm">
                <thead>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Skills</th>
                  <th>Education</th>
                  <th>Current-W.</th>
                  <th>Address</th>
                  <th>Gender</th>
                  <th>Pictures</th>
                  <th>Button</th>
                </thead>
                <tbody>
                  <?php  foreach ($result  as $results){
        
                   ?>
                  <tr>
                    <td class="fonts"> <?php echo $results['id'];?>     </td>
                    <td class="fonts"> <?php echo $results['name'];?>     </td>
                    <td class="fonts"> <?php echo $results['email'];?>    </td>
                    <td class="fonts"> <?php echo $results['skills'];?>   </td>
                    <td class="fonts"> <?php echo $results['education'];?></td> 
                    <td class="fonts"> <?php echo $results['wages'];?>    </td>
                    <td> <?php echo $results['address'];?>  </td>
                    <td> <?php echo $results['Gender'];?>  </td>
                    <td> <?php echo $results['Images'];?>
                    <img src="upload/<?php echo $results['Images']?>">  
                    </td>
                    <td> <button class="btn btn-success">view</button> </td>
                    <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                   Edit
                    </button></td>
                      <?php }; ?>
                  </tr>    
                </tbody>
              </table>
            </div>
            <div class="col-md-05"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
        $(document).ready( function () {
        $('#datatable').DataTable();
} );
    </script>
    
   
  </body>
  <style type="text/css">
    img{
      height: 50px;
      width: 50px;
    }

 
    h5{
        color: #fff;
      }
      td{
        font-size: 16px;
        color: #fff;
        background-color: gray;
      }
      tbody{
        background-color: #4070f4;
      }
  </style>
</html>