<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

<style>
.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: white;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>

  <div class="card-deck">

  <div class="card">
    <div class="card-body">
    <img class="card-img-top" src="logo.jpg" height="150"  alt="Card image cap">
      <h5 class="card-title">Sanjaya Application</h5>
      <p class="card-text">
      Sanjaya is an Android App built to give parents all the details that they need to about 
  their ward’s progress at KMIT.
      </p>
      <div class="text-block"><a href="sanjya.php" class="btn btn-primary">Visit </a></div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
    <img class="card-img-top" src="logo.jpg" height="150" alt="Card image cap">
      <h5 class="card-title">Drona Application</h5>
      <p class="card-text">Drona is an Android App built for KMIT faculty, for ease of marking attendance , rating the student based on his/her performance.</p>
      <div class="text-block"><a href="drona.php" class="btn btn-primary">Visit </a></div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
    <img class="card-img-top" src="logo.jpg" height="150" alt="Card image cap">
      <h5 class="card-title">Netra Application </h5>
      <p class="card-text">Netra is an Android App built for KMIT students. From Netra App they have access to 
all the details that they need to know while they are at KMIT. </p>
     <div class="text-block"><a href="netra.php" class="btn btn-primary">Visit </a></div>
    </div>
  </div>

</div>
  





<?php include ROOT_DIR .  '/common/footer.php'; ?>