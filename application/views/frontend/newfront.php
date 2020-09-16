<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <title>Mohan Matka</title>
  </head>
  <body>
    <div class="wrap white border border-primary">
      <h4 class="text-danger"> Mohanmatka.com</h4>
      <p class="display-4 font-weight-bold text-head">Satta Matka Mohan Matka Result</p>
    </div>
    <div class="wrap white border border-success">
     <marquee class="text-danger font-weight-bold"><h5>सबके सामने खुलने वाला एकमात्र मटका मोहन मटका !</h5></marquee>
    </div>
    <div class ="wrap white">
      <p class="font-weight-bold">India's No.1 Matka Site mohan matka Heartly Welcome. Here You Will Get Perfect Guessing By Top Guesser And Fast Matka Result. Aaj Ka Satta. Here You Find Top Matka Market Of India Guessing By Mohan Matka Site.</p>
    </div>
    <div class ="wrap white">
      <h2 class="font-weight-bold">* Live Results *</h2>
    </div>
  <?php 
    date_default_timezone_set('Asia/Kolkata');
    foreach($query->result() as $row):
      $start_time = $row->start_time;
      $end_time = $row->end_time;
      $current_time = date("H:i");
      //  echo date("g:i a", strtotime($current_time)); 
      $start_time_val = strtotime("2020-01-01 ".$start_time);
       $end_time_val = strtotime("2020-01-01 ".$end_time);
     $current_time_val = strtotime("2020-01-01 ".$current_time);
    //  echo $current_time;
     if($current_time_val>=$start_time_val && $current_time_val<=$end_time_val)
     { ?>
     <div class="wrap yellow border border-success">
    <h4 class="font-weight-bold blue-text"><?php echo $row->username; ?></h4>
    <h4 class="font-weight-bold"><?php echo $row->morning ?></h4>
    <form><input type="button" class="btn btn-light" value="REFRESH RESULT" onClick='parent.location="javascript:location.reload()"' />
  </div>
     <?php }
     else
     {
    //     echo "MISS";   
     }

    
  endforeach;
  ?>          
 
  <div class ="wrap white border border-primary">
      <h6 class="font-weight-bold"><u>All India Matka Results</u></h6>
    </div>
    
    
    <?php 
    $count = 0;
   foreach ($query->result() as $row): ?>

    <div class="wrap  <?php echo ($count%2==0)?"green ":"yellow "; ?>  border border-success">
    <h4 class="font-weight-bold blue-text"><?php echo $row->username; ?></h4>
    <h4 class="font-weight-bold"><?php echo $row->morning ?></h4>
    <p><?php echo $row->start_time."-".$row->end_time;  ?></p>
    
   </div>
   <?php
  $count++;
  endforeach; ?>
  
<div class="wrap white border border-success">
  <h5 class="text-danger font-weight-bold ">$ यदि आप अपना मटका चलाना चाहते हैं तो इस नंबर पर फोन करें 9468588923 $</h5>   
</div>
<div class="wrap white border border-primary">
<div style="display:none;">
  <form style="display:none" method="post" action="front/login_post">
 <h3 class="text-danger">Login</h3>
  <div class="form-group">
    <label for="user">Username</label>
    <center><input type="text" name="user" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp"></center>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
   <center> <input type="password" name="password" class="form-control w-25 col-md-4 col-md-offset-4" id="exampleInputPassword1"></center>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="submit" value="Log in" />
  </form> 
</div>
<form method="post" action="front/login_post" >
Login:
<br/>
<input type="text" name="user"   />
<br/>
Password:
<br/>
<input type="password" name="password"   />
<br/>
<input type="checkbox" name="remember" value="1"  />
 Automatic login 
 <small>
     (you must allow cookies in phone)
     </small>
     <br/>
     <input type="submit" name="submit" value="Log in" />
     </form>


</div>
<div class="wrap white border border-success">
  <h1>All Charts</h1>
</div>
<?php
$count = 0; 
foreach($chart->result() as $row1): ?>
<div class="chart <?php echo ($count%2==0)?"green ":"yellow " ?>border border-primary">
<h4 style="text-align:center" class="font-weight-bold "><a href="<?php echo base_url()."uploads/".$row1->filename; ?>" class="text-danger"><?php echo $row1->username; ?></a></h4>
</div>
   <?php 
  $count++;
  endforeach; ?>
<div class="wrap white border border-success">
  <h4>Satta Matka</h4>
<p>What is Satta Matka</p>
<small>Satta Matka is a sort of lottery. It begins from before the time of Indian independence when it was known as Ankada Jugar ("figures wagering"). Satta matka or Madhur matka has a history in India during the 1960s, and the structure was replaced with various strategies for creating random numbers, including pulling slips from a large earthenware pot known as a matka, or overseeing playing a game. Matka gambling is llegal in India.</small>
<p>We are the most popular online SATTA MATKA Website that provides the quick Satta Matka Result and Satta Number. Be in touch with our website for fastest Satta Matka Tips. We are giving you an opportunity to become a Satta King using Our Online Satta Matka Result.</p>
</div>

<div class="wrap white border border-success" style="border-bottom:5px;">
 <marquee class="font-weight-bold"> mohanmatka.com is additionally mentioned as Satta Matka 143 also a world of Experts Guessing Forum website and one among the foremost Visited Satta Site amongst people engaged in Satta Matka, Satta Bazar, Matka Bazar, Time Bazar, Milan Day/Night, Kalyan Matka, Rajdhani Day/Night Satta, Mumbai foremost which we provide Super Fast, and Fastest Matka results aside from Other Players in Industry. Our Content Helps You Too Big wins. We offer Live Updates, Guessing Forum, Where Our Experts Helps You To Quickest Earnings. Free Open and shut for Public Welfare Weekly Jodi & Panna with Lifetime Golden win Chart in 143 SPECIAL ZONE you'll get to understand Evergreen Tricks Zone and old charts of Kalyan Matka And Main Mumbai Matka Of 1972 to 2020 With King Maker Khatri Favorite Panna also know as Mortgage leaf and behalf of CHARTS ZONE we offer You Kalyan Matka Madhur Matka Satta Main Ratan Super Bombay Madhur Bazar And Milan day Or Rajdhani Night Online Satta With Penal Patti leaves. Satta to call a couple of. Our website has begun as an undisputed leader during this arena since we started working over the years ago, which we attribute this success to our consistent efforts in publishing the results of all Satka Matka game at the earliest and quicker Credit than all other players during this market Today At SattaMatka.Net, In</marquee>
</div>
<div class="wrap white border border-success" style="border-bottom:5px;">
 <marquee class="font-weight-bold text-danger">Disclaimer :- mohanmatka.com visit and browse Viewing This web site Is On Your Own Risk. The web site is based Over subject conjointly star divination For data functions. We'Re Not Inherent In Either Illegitimate Matka look regarding Gamblers. Gambling in Your Country might even be prohibited or outlaw. This web site Not accountable Any Scams And problems If Yo Not Agree Please Visit Our website like a shot. <marquee>
</div>
<a onclick=" window.location.reload()" class="refresh-btn">REFRESH </a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>