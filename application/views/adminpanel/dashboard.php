<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">
    <title>Mohan Matka Add New user</title>
  </head>
  <body>
  <!-- <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mohan Matka</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?php echo site_url('admin/login/logout')?>">Sign out</a>
    </li>
  </ul>
</nav> -->
<?php
  $this->load->view('adminpanel/layout/uppernav');
?>

<div class="container-fluid">
  <div class="row">

    <?php
    $this->load->view('adminpanel/layout/sidemenu');
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
    </div>
       
   <div class="row">
      <div class="col-md-6">
          <h2>Add New User </h2>
         <?php 
         if(validation_errors()!= FALSE){?>
            <div class="alert alert-warning" role="alert">
          <?php echo validation_errors(); ?>
            </div>
         <?php }
         echo $this->session->flashdata('item');
         ?>

          <form method="post" action="<?php echo base_url().'admin/dashboard/newUser' ?>">  
      <div class="form-group">
       <label for="exampleInputEmail1">Username</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
          
      </div>
          <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
          </div>
  <div class="form-group">
    <label>Address</label>
    <textarea  class="form-control" id="exampleCheck1" name="address"></textarea>
    </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" name="phone"   id="phone">
          </div>

          <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control" id="exampleFormControlSelect1" name="status">
      <option value="active">Active</option>
      <option value="deactivate">Deactivate</option>
      
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
   </div>
   
   </div>    
    
    
    </main>
  </div>
</div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>