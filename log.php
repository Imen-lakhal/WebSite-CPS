<?php 
 //Nous allons démarrer la session avant toute chose
   session_start() ;
  if(isset($_POST['boutton-valider'])){ // Si on clique sur le boutton , alors :
    //Nous allons verifiér les informations du formulaire
    if(isset($_POST['email']) && isset($_POST['mdp'])) { //On verifie ici si l'utilisateur a rentré des informations
      //Nous allons mettres l'email et le mot de passe dans des variables
      $email = $_POST['email'] ;
      $password = $_POST['mdp'] ;
      $erreur = "" ;
       //Nous allons verifier si les informations entrée sont correctes
       //Connexion a la base de données
       $nom_serveur = "localhost";
       $utilisateur = "root";
       $mot_de_passe ="";
       $nom_base_données ="utilisateur" ;
       $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
       //requete pour selectionner  l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrées
        $req = mysqli_query($con , "SELECT * FROM `login` WHERE email = '$email' AND password ='$password' ") ;
        $num_ligne = mysqli_num_rows($req) ;//Compter le nombre de ligne ayant rapport a la requette SQL
        if($num_ligne > 0){
            header("Location:get-involved.html") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
            // Nous allons créer une variable de type session qui vas contenir l'email de l'utilisateur
            $_SESSION['email'] = $email ;
        }else {//si non
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
        }
    }
  }
?>







<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPS ENSI</title>
    <link rel="icon" href="cps.png"/>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
            
          <li><a href="home.html"><strong>Home</strong></a></li>
              
          <li><a href="events.html"><strong>Events</strong></a></li>
          <li><a href="gallery.html"><strong>Gallery</strong></a></li>
          <li><a href="team.html"><strong>Team</strong></a></li>
          <li><a href="getintouch.html"><strong> Get In Touch</strong></a></li>
              
           </ul>
        </div>
    </header>
    
    <br><br><br><br><br><br><br><br><br>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          window.addEventListener('scroll', function() {
            var gap = 50;
            if (window.scrollY > gap) {
              document.querySelector('header').classList.add('active');
            } else {
              document.querySelector('header').classList.remove('active');
            }
          });
        });
      </script>
    
    <br><br>
    








    <section>
        <div class="imgBox"></div>
        <div class="contentBox">
            <div class="formBox">
                <h2>Login To Donate</h2>
                <?php 
       if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
           echo "<p id= erreur>".$erreur."</p>"  ;
       }
       ?>
                <form  action="" method="POST">
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="email">

                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="mdp">

                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember Me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Log In" class="submit" name="boutton-valider">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account ?  <a href="#" >Sign</a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>



    <!--------footer------------>
<footer>
    <div class="main-content">
      <div class="left box">
          <h2>Stay Updated</h2>
         <div class="content-footer">
            <p>Stay connected
             Keep up to date with all the CPS news and events by following us on social media . We regularly post about the newest updates, partnerships and upcoming events. You will learn what the CPS team is up to, and who is behind all those amazing work.</p>
             <div class="social">
               <a href ="#"><span class="fab fa-facebook-f"></span></a>
               <a href ="#"><span class="fab fa-instagram"></span></a>
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
               <button typr="submit">Send</button>
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
</body>
</html>