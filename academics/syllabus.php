<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>
<style>
.button {

  border:1px solid #5b9aa0;
 
  padding:initial;
  text-align: justify;
  text-decoration: none;
  display: inline-block;
  font-size: 8px;
  transition-duration: 0.4s;
  cursor: pointer;
 
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #5b9aa0;
}

.button2:hover {
  background-color: #5b9aa0;
 
}


</style>
  <section>
  <div class="container">
<h2 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">Syllabus</h2>

  <!--<button type="button" class="btn btn-outline-secondary"><a href="csesyllabus.php" target="_parent">CSE</a></button>
  <button type="button" class="btn btn-outline-dark"><a href="itsyllabus.php" target="_blank">IT</a></button>
  <button type="button" class="btn btn-outline-secondary"><a href="ecesyllabus.php" target="_blank">ECE</a></button>
  <button type="button" class="btn btn-outline-info"><a href="eiesyllabus.php" target="_blank">EIE</a></button>
  </DIV>-->
  <br>

  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../images/info.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Computer Science &amp Engineering</h5>
     
      <p><button class="button button2">
	  <a href="csesyllabus.php" class="btn btn-sm btn-general btn-blue"target="_parent">View CSE Syllabus</a>
	  </button></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/info.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Information Technology</h5>
	  <br>
      <p class="card-text">
	  <button class="button button2">
	  <a href="itsyllabus.php" class="btn btn-sm btn-general btn-blue"target="_parent">View IT Syllabus</a>
	  </button>
	  <p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/ecedept.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Electronics &amp Communication Engineering </h5>
	  <br>
        <p class="card-text">
		<button class="button button2">
		<a href="ecesyllabus.php" class="btn btn-sm btn-general btn-blue" target="_parent">View ECE Syllabus</a>
		</button>
		</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../images/ecedept.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Electronics &amp Instrumentation Engineering</h5>
      <br>
      <p class="card-text">
	  <button class="button button2">
	  <a href="eiesyllabus.php" class="btn btn-sm btn-general btn-blue" target="_parent">View EIE Syllabus</a>
	  </button>
	  </p>
    </div>
  </div>
</div>
  </section>
  <br>
  
  <?php include ROOT_DIR .  '/common/footer.php'; ?>