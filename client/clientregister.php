
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Dropdown Menu Bar</title>
      <link rel="stylesheet" href="../style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
                  <li><a href="#">Add</a></li>
                  <li><a href="view.php">View</a></li>
                  <!-- <li><a href="#">Javascript</a></li> -->
               </ul>
            </li>
            
            <li><a href="#" class="log" ><i class="fa fa-fw fa-user-times"></i> Logout</a></li>
         </ul>
       
      </nav>
  <section>
      <div class="header1">
      <header>
	<img src="https://richardmiddleton.me/comic-60.png" alt="">
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Blog</a></li>
		<li><a href="">Signup</a></li>
		<li><a href="">Contact</a></li>
	</ul>
</header>

<!-- Hero Image -->

<section class="hero">
	<div class="hero-content">
		<h1>Let's create a modal</h1>
		<h3>Sign Up Now</h3>
		<a href="#" id="button" class="button">Click Me</a>
	</div>
</section>



<section class="card-container">
	<div class="card"></div>
	<div class="card"></div>
	<div class="card"></div>
</section>



<div class="bg-modal">
	<div class="modal-contents">

		<div class="close">+</div>
		<img src="https://richardmiddleton.me/comic-100.png" alt="">

		<form action="">
			<input type="text" placeholder="Name">
			<input type="email" placeholder="E-Mail">
			<a href="#" class="button">Submit</a>
		</form>

	</div>
</div>
      </div>
  </section>
 <footer>
  <div class="footer-bottom">
    <p>copyright &copy;2021  designed by <span>Digygo</span></p></div></footer>
<script>document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});</script>
   </body>
</html>