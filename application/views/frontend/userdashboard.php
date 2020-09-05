<?php
$this->load->view('frontend/layout/header');
?>
<?php
  $this->load->view('frontend/layout/uppernav');
?>

<div class="container-fluid">
  <div class="row">

    <?php
    $this->load->view('frontend/layout/sidemenu');
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
     </div>
       
   <div class="row">
      <div class="col-md-6">
          <h2>Add Matka Rates </h2>
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
          <?php
          if(isset($query)){
            foreach ($query->result() as $row): 
              $value1 = $row->morning;
             endforeach;
          }
            ?>
        
          <form method="post" action="<?php echo base_url().'front/newMatkaRate' ?>">  
            <div class="form-group">
              <label for="exampleInputEmail1">Value</label>
               <input type="text" class="form-control" id="exampleInputEmail1" value=<?php echo isset($value1)?$value1:" "; ?> name="morning" aria-describedby="emailHelp">
           </div>
                
          <div class="form-group">
         <label for="exampleFormControlSelect1">Start Time</label>
         <input type="time" class="form-control" name="start_time"   id="time">
      </div>

     <div class="form-group">
       <label for="exampleFormControlSelect1">End Time</label>
       <input type="time" class="form-control" name="end_time"   id="time1">
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