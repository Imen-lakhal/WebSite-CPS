<<<<<<< HEAD
<?php 
session_start() ;
if(isset($_POST['boutton-valider'])){ 
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address'])&& isset($_POST['governorate']) && isset($_POST['state'])&& isset($_POST['zipcode']) && isset($_POST['cardname'])&& isset($_POST['cardnumber'])&& isset($_POST['expmonth']) && isset($_POST['expyear'])&& isset($_POST['cvv']) ) { 
       $nom_serveur = "localhost";
       $utilisateur = "root";
       $mot_de_passe ="";
       $nom_base_données ="utilisateur" ;
       $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);

       $e= $_POST['name'];
       $n= $_POST['email'];
       $p= $_POST['address'];
       $m= $_POST['governorate'];
       $v= $_POST['state'];
       $k= $_POST['zipcode'];
       $l= $_POST['cardname'];
       $s= $_POST['cardnumber'];
       $t= $_POST['expmonth'];
       $u= $_POST['expyear'];
       $w= $_POST['cvv'];
       $con = new mysqli($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
        if($con -> connect_error){
            die("connection non etablie : " .$con -> connect_error);
        }
        $requet = "INSERT INTO financially(name,email,address,governorate,state,zipcode,cardname,cardnumber,expmonth,expyear,cvv) values ('$e','$n','$p','$m','$v','$k','$l','$s','$t','$u','$w')";


        if (empty($e) || empty($n) || empty($p) || empty($m) || empty($v) || empty($k) || empty($l) || empty($s) || empty($t) || empty($u) || empty($w)) {
        $erreur= "All fields are requiered !";
      }
      else if ($con->query($requet) === true) {
        $msg = "Your Message Successfully Sent!";
    } 
     
         }
         mysqli_close($con);

        }

?>


=======
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="donate.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CPS ENSI</title>
  <link rel="icon" href="cps.png"/>
  <script src="https://kit.fontawesome.com/514c1af453.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>
<body>
  <header>
  <div class="logo">
    <img src="cps.png"> 
</div>
<div class="navigation">
    <input type="checkbox" id="nav">
    <label for="nav" class="navig">
        <img src="menu.png" alt="open" class="open">
        <img src="close2.jpg" alt="close" class="close">
    </label>
    

<ul class="nav-barre">            
    
<<<<<<< HEAD
  <li><a href="#home"><strong>Home</strong></a></li>
              
  <li><a href="events.html"><strong>Events</strong></a></li>
  <li><a href="pics.html"><strong>Gallery</strong></a></li>
  <li><a href="team.html"><strong>Team</strong></a></li>
  <li><a href="getintouch.html"><strong> Get In Touch</strong></a></li>
=======
<li><a href="home.php"><strong>Home</strong></a></li>
              
              <li><a href="events.php"><strong>Events</strong></a></li>
              <li><a href="gallery.php"><strong>Gallery</strong></a></li>
              <li><a href="team.php"><strong>Team</strong></a></li>
              <li><a href="getintouch.php"><strong>Get In Touch</strong></a></li>
              <li><a href="log.php"><strong> Log out</strong></a></li>
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
      
   </ul>
</div>
     
  </header>
  <br><br><br><br><br><br><br><br><br>
   <!--Home-->
  <section>
    <div class="donate-class">

<<<<<<< HEAD
        <form action="" method="Post">
=======
        <form action="pdf.html">
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9

            <div class="row">

                <div class="col">

                    <h3 class="title">DONATE</h3>
<<<<<<< HEAD
                    <?php 
       if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
           echo "<p id= erreur >".$erreur."</p>"  ;
       }
       ?>

                    <div class="inputBox">
                        <span>Full name :</span>
                        <input type="text" placeholder="Your Name" name="name" id="name" requiered>
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Email Address" name="email" id="email" requiered>
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="room - street - locality" name="address" id="address" requiered>
                    </div>
                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" placeholder="City Name" name="governorate" id="governorate" requiered>
=======

                    <div class="inputBox">
                        <span>Full name :</span>
                        <input type="text" placeholder="Your Name">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="room - street - locality">
                    </div>
                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" placeholder="City Name">
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>State :</span>
<<<<<<< HEAD
                            <input type="text" placeholder="State" name="state" id="state" requiered>
                        </div>
                        <div class="inputBox">
                            <span>Zip Code :</span>
                            <input type="text" placeholder="123 456" name="zipcode" id="zipcode" requiered>
=======
                            <input type="text" placeholder="State">
                        </div>
                        <div class="inputBox">
                            <span>Zip Code :</span>
                            <input type="text" placeholder="123 456">
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
                        </div>
                    </div>

                </div>

                <div class="col">

                    <div class="inputBox">
                        <span>Cards Accepted :</span>
                        <img src="card/master.png" alt="">
                        <img src="card/poste.jpg" alt="">
                        <img src="card/visa.jpg" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Name On Card :</span>
<<<<<<< HEAD
                        <input type="text" placeholder="Your Name" name="cardname" id="cardname" requiered>
                    </div>
                    <div class="inputBox">
                        <span>Credit Card Number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444" name="cardnumber" id="cardnumber" requiered>
                    </div>
                    <div class="inputBox">
                        <span>Exp Month :</span>
                        <input type="text" placeholder="month" name="expmonth" id="expmonth" requiered>
=======
                        <input type="text" placeholder="Your Name">
                    </div>
                    <div class="inputBox">
                        <span>Credit Card Number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>Exp Month :</span>
                        <input type="text" placeholder="month">
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Exp Year :</span>
<<<<<<< HEAD
                            <input type="number" placeholder="year" name="expyear" id="expyear" requiered>
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="cvv" name="cvv" id="cvv" requiered>
=======
                            <input type="number" placeholder="year">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="cvv">
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
                        </div>
                    </div>

                </div>

            </div>

<<<<<<< HEAD
            <input type="submit" value="Proceed To Checkout" class="submit-btn" name='boutton-valider'>

            <?php 
       if(isset($msg)){// si la variable $msg existe , on affiche le contenu ;
           echo "<p id=msg align=center>".$msg."</p>"  ;
       }
       ?>
=======
            <input type="submit" value="Proceed To Checkout" class="submit-btn">
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9

        </form>

    </div>
</section>

<footer>
  <div class="main-content">
    <div class="left box">
        <h2>Stay Updated</h2>
       <div class="content-footer">
          <p>Stay connected
           Keep up to date with all the CPS news and events by following us on social media . We regularly post about the newest updates, partnerships and upcoming events. You will learn what the CPS team is up to, and who is behind all those amazing work.</p>
           <div class="social">
<<<<<<< HEAD
             <a href ="#"><span class="fab fa-facebook-f"></span></a>
             <a href ="#"><span class="fab fa-instagram"></span></a>
=======
             <<a href ="https://www.facebook.com/CPSENSI"><span class="fab fa-facebook-f"></span></a>
             <a href ="https://www.instagram.com/cps.ensi/"><span class="fab fa-instagram"></span></a>
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
           </div>
          
         </div>
     </div>

     <div class="center box">
       <h2>Address</h2>
       <div class="content-footer">
         <div class="place">
           <span class="fas fa-map-marker-alt"></span>
           <span class="text">Tunisie,la Manouba</span>
         </div>
         <div class="phone">
           <span class="fas fa-phone-alt"></span>
           <span class="text">+21622909766</span>
         </div>
         <div class="email">
           <span class="fas fa-envelope"></span>
           <span class="text">cps.ensi@gmail.com</span>
         </div>
       </div>
     </div>


     <div class="right box">
       <h2>Contact Us</h2>
       <div class="content-footer">
         <form action="#">
           <div class="email">
             <div class="text">Email *</div>
             <input type="email" required>
           </div>
           <div class="msg">
             <div class="text">Message *</div>
             <textarea rows="2" cols="25" required></textarea>
           </div>
           <div class="btn">
<<<<<<< HEAD
             <button type="submit">Send</button>
             
=======
             <button typr="submit">Send</button>
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
           </div>

         </form>
       </div>
     </div>
 </div>
 <div class="bottom">
   <center>
     <span class="credit">Created By <a href="#"> BenHassen Mariem,Lakhal Imen et Nakbi Soumaya</a></span>
       <span class="far fa-copyright"></span> <span> 2023 All rights reserved.</span>   
   </center>
 </div>
</footer>

<<<<<<< HEAD



<!-- <script>
function message(){
    var Name = document.getElementById('name');
    var email = document.getElementById('email');
    var address = document.getElementById('address');
    var governorate = document.getElementById('governorate');
    var state = document.getElementById('state');
    var zipcode = document.getElementById('zipcode');
    var cardname = document.getElementById('cardname');
    var cardnumber = document.getElementById('cardnumber');
    var cvv = document.getElementById('cvv');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(Name.value === '' || email.value === '' || address.value === ''|| governorate.value === '' || state.value === '' || zipcode.value === '' || cardname.value === '' || cardnumber.value === '' || cvv.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            Name.value = '';
            email.value = '';
            adress.value = '';
            governorate.value = '';
            state.value = '';
            zipcode.value = '';
            cardname.value = '';
            cardnumber.value = '';
            cvv.value = '';
        }, 2000);

        success.style.display = 'block';
    }


    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);

}
</script> -->
=======
>>>>>>> 583c9b8931aa31e5d1441158b5a3c052a7dffea9
</body>
</html>
