<?php
include('sql.php');
session_start();
if (isset($_SESSION['message'])) {
  echo '<div class="alert alert-success">'.$_SESSION['message']."</div>";
  unset($_SESSION['message']);
  }
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 </head>
 <div class="mynav">
<nav class="navbar navbar-st">
  <div class="container justify">
    <span class="navbar-brand mb-0 h1"><h4>Shaqadoon</h4></span>
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


    <?php  
        $sql="SELECT *FROM users";
        $result =mysqli_query($db,$sql);
 ?>
 
    <h1 class="text-center"> Data-Tables</h1>
    <div class="container-fluid">
    <div class="row">
      <div class="container">
    <table id="table_id" class="table">
    <thead>
        
            <th>Name</th>
            <th>Email</th>
            <th>Skills</th>
            <th>Education Level</th>
            <th>Current Wages</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Pictures</th>
            <th colspan="2">Buttons</th>

        
    </thead>
    <hr class="mt-3">
    </div>
    <div class="row">
    <tbody>
      <?php  foreach ($result  as $results){
        
      ?>
        <tr>
            <td> <?php echo $results['name'];?>     </td>
            <td> <?php echo $results['email'];?>    </td>
            <td> <?php echo $results['skills'];?>   </td>
            <td> <?php echo $results['education'];?></td> 
            <td> <?php echo $results['wages'];?>    </td>
            <td> <?php echo $results['address'];?>  </td>
            <td> <?php echo $results['Gender'];?>  </td>
            <td> <?php echo $results['Images'];?>
            <img src="upload/<?php echo $results['Images']?>" class="img-fluid rounded-circle">  
          </td>
            <td> <button class="btn btn-success">view</button> </td>
            <td>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Edit
            </button></td>
           
        </tr>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <?php }; ?>
    </tbody>
  </div>
</table>

</div>

<script type="text/javascript">

    $('#table_id').DataTable();

  </script>
</body>
<style type="text/css">
  img{
    height:  50px;
    width: 50px;

  }
  th{
   
    
    width: 50px;
  }
  td{
   
    
    width: 50px;
  }
  table .table{
    padding: 2px;
    border:1px;
    width: 50px;

  }
  body{
    background-color: #2d80f7e3;
  }
  span .navbar-brand .mb-0 .h1{
        color: #222;
      }
       h5{
        color: #fff;
      }
</style>
</html>