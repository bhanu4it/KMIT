<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=First slide"
         alt="Second slide [800x400]" 
         src="Lab/images/dot1.jpg"
         data-holder-rendered="true">

         <div class="carousel-caption d-none d-md-block">
            <h5>Advanced English Communication Lab</h5>
        </div>
     <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
         alt="Second slide [800x400]" 
         src="Lab/images/dot2.jpg"
         data-holder-rendered="true">

         <div class="carousel-caption d-none d-md-block">
            <h5>Physics Lab</h5>
        </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
         alt="Second slide [800x400]" 
         src="Lab/images/dot3.jpg"
         data-holder-rendered="true">
         <div class="carousel-caption d-none d-md-block">
            <h5>Chemistry Lab</h5>
        </div>
    </div>

    <div class="carousel-item">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
         alt="Second slide [800x400]" 
         src="Lab/images/dot4.jpg"
         data-holder-rendered="true">
         <div class="carousel-caption d-none d-md-block">
            <h5>Drawing Lab </h5>
        </div>
    </div>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
     



<?php include ROOT_DIR .  '/common/footer.php'; ?>