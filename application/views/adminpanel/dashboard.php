<?php
$this->load->view('adminpanel/layout/header');
?>
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
         if($this->session->flashdata('item')){ ?>
            <div class="alert alert-success" role="alert">
         <?php echo $this->session->flashdata('item') ?>
            </div>
         <?php }
         ;
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