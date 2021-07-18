<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-white">
  <a class="navbar-brand" href="#" style="font-family: 'Akaya Kanadaka', cursive;"><b>College ERP System</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <?php 
    if(isset($_SESSION['loggedin'])){
$name=$_SESSION['name'];
$position=$_SESSION['position'];

   
    
    
    ?>
      <li class="nav-item mx-1">
        <a class="btn btn-warning my-1" type="button" href="#" disabled><i class="fa fa-graduation-cap" aria-hidden="true"></i>
&nbsp;<b><?php echo $position ?></b></a>
      </li>
      <li class="nav-item mx-1">
      <a class="btn btn-success my-1" type="button" href="#" disabled><i class="fa fa-user-circle-o" aria-hidden="true"></i>
&nbsp;<b><?php echo $name ?></b></a>

      </li>
      <li class="nav-item mx-1">
      <a href="../logout.php" class="btn btn-danger my-1" type="button" style="color: black;" href="#" disabled><i class="fa fa-sign-out" aria-hidden="true"></i>
&nbsp;<b>Logout</b></a>



      </li>
      <?php

    }
?>
      
    </ul>
    
  </div>
</nav>