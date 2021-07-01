<?php
session_start();
if (isset($_SESSION['uname']) ) {
	

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Digygo</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
      .error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}</style>
   </head>

   <body>
      <nav>
         <!-- <label class="logo">CodingNepal</label> -->
         <img src="logo.png" class="logoimg">
         <ul>
            <li><a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li>
               <a href="#"><i class="fa fa-fw fa-user"></i>Client
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <!-- <label for="show" class="show-btn"><li >Add</li></label> -->
                  <li><a href="view.php">View</a></li>
                  <!-- <div></div> -->
                  
                  <li onclick="togglePopup()"><a href="#">Add</a></li>
                  
                 
                  <!-- <li><a href="#">Javascript</a></li> -->
               </ul>
            </li>
            
            <li onclick="logot()"><a href="#" class="log" ><i class="fa fa-fw fa-user-times"></i> Logout</a></li>
         </ul>
       
      </nav>
  <section>  
  
    
		<form action="client/newregister.php" class="login-email" method="POST">
         <div class="popup" id="popup-1">
            <div class="content">
               <div class="close-btn" onclick="togglePopup()">
                  ×</div>
               <h1 class="head1">Add new</h1>
               <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
               <div class="input-field">
                  <input type="text" placeholder="Register id" class="validate" name="regid" required>
               </div>
               <div class="input-field">
                  <input type="text" placeholder="Name" class="validate" name="name" required>
               </div>
               <div class="input-field"><input type="text" placeholder="Phone" class="validate" name="phone" required>
               </div>
               <div class="input-field">
                  <input type="text" placeholder="Email" class="validate" name="mail" required>
               </div>
               <div class="input-field">
                  <input type="text" placeholder="Address" class="validate" name="address" required>
               </div>
              <button class="second-button" name="submit" value="submit">Register</button>  
		</form>
	</div></div></section>
  
 
 <!-- <footer>
  <div class="footer-bottom">
    <p>copyright &copy;2021  designed by <span>Digygo</span></p></div></footer> -->
    <script>
      function togglePopup() {
      document.getElementById("popup-1")
       .classList.toggle("active");
     }
     function logot(){
      if(confirm("Dou you want Logout?")){
         window.location.href='client/logout.php';
         return true;
      }}
     </script>
   </body>
</html>
<?php
}
 else{
 	header("location: index.php");
 }
 ?>