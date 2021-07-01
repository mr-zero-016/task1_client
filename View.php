<?php
session_start();
if (isset($_SESSION['uname']) ) {
	

?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title> Client</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
   </head>
<body class="view">
<nav>
       
         <img src="logo.png" class="logoimg">
         <ul>
            <li><a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li>
               <a class="active" href="#"><i class="fa fa-fw fa-user"></i>Client
               </i>
               </a>
               <ul>
                  
                  <li><a href="#">View</a></li>
                  <li onclick="togglePopup()"><a href="#">Add</a></li>
                  
               </ul>
            </li>
            
            <li onclick="logot()"><a href="#" class="log" ><i class="fa fa-fw fa-user-times"></i> Logout</a></li>
         </ul>
       
      </nav>
    
 
    
<div class="table_responsive">
  <table>
    <thead>
      <tr>
        <th>Sl</th>
        <th>Reg ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead> <tbody>
<?php
include 'client/db.php';
$count=0;
$sel=mysqli_query($con,"SELECT * FROM `creg` WHERE `status`='0'") or die(mysqli_error($con));
while($val=mysqli_fetch_array($sel))
{ 
    $count++ ; ?>

   
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $val['regid']; ?></td>
        <td><?php echo $val['name']; ?></td>
        <td><?php echo $val['phone']; ?></td>
        <td><?php echo $val['email']; ?></td>
        <td><?php echo $val['address']; ?></td>

        <td>
          <span class="action_btn">
            <a href="#" onclick="togglePopuptwo('<?php echo $val['email']; ?>')" value="<?php echo $val['email'];$ema=$val['email']; ?> ">Edit</a>
            
            
            
            <a href="#" onclick="deleteme('<?php echo $val['email']; ?>')">Remove</a>
            
          </span>
        </td>
      </tr>
      <?php
      }
      ?>


      
      
    </tbody>
  </table>
</div>
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
</div></div>
<form action="client/registerupdate.php" class="login-email" method="POST">
       <div class="pop_up" id="popup-2">
          <div class="content">
             <div class="close-btn" onclick="togglePopuptwo()">
                ×</div>
             <h1 class="head1">Update</h1>
             <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
             <div class="input-field">
                <input type="text" placeholder="Register id" class="validate" name="regid" >
             </div>
             <div class="input-field">
                <input type="text" placeholder="Name" class="validate" name="name">
             </div>
             <div class="input-field"><input type="text" placeholder="Phone" class="validate" name="phone" >
             </div>
             <div class="input-field">
                <input type="text" placeholder="Email" class="validate" name="mail" id="cd"  required>
             </div>
             <div class="input-field">
                <input type="text" placeholder="Address" class="validate" name="address">
             </div>
            <button class="second-button" name="submit" value="submit">Update</button>  
  </form>
</div></div>
</section>
<!-- <footer>
  <div class="footer-bottom">
    <p>copyright &copy;2021  designed by <span>Digygo</span></p></div></footer> -->
    <script>
      let v;
      function togglePopup() {
      document.getElementById("popup-1")
       .classList.toggle("active");
     }
     function togglePopuptwo(v) {
      document.getElementById("popup-2")
       .classList.toggle("active");
       console.log(v);
       document.getElementById("cd").value=v ;
           
          
     }
     
     function deleteme(a){
       if(confirm("Dou you want to delete")){
         window.location.href='client/clientdelete.php?username='+a+'';
         return true;
       }
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