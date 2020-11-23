<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

 <style>
 .button1 {
border:2px solid #5b9aa0;
padding:initial;
text-align: justify;
text-decoration: none;
display: inline-block;
font-size: 10px;
margin: 2px 4px;
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
     <div class="embed360" data-rotation="0 90 -10">
       
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=First slide"
         alt="Second slide [800x400]" 
         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175abec181c%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175abec181c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" 
         data-holder-rendered="true">

         <div class="carousel-caption d-none d-md-block">
            <h5>Test 1</h5>
            <p>Description</p>
        </div>
     <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
         alt="Second slide [800x400]" 
         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175abec181c%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175abec181c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" 
         data-holder-rendered="true">

         <div class="carousel-caption d-none d-md-block">
            <h5>Test 2</h5>
            <p>Description</p>
        </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
         alt="Second slide [800x400]" 
         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175abec181c%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175abec181c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" 
         data-holder-rendered="true">
         <div class="carousel-caption d-none d-md-block">
            <h5>Test 3</h5>
            <p>Description</p>
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
   

</div>
    
    <script>
    embed360('.embed360');
    </script>


   <!-- <app-extra-circular>-->
  <section id="extra-circular">
  <div class="container" >
  
		<header class="section-header">
			<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">Student Clubs</h5>
				<hr>
        </header>
        <p style="text-align:justify;font-size:90%;font-family:verdana;"></p>
    </div>

<div class="container">
<div class="panel-group" id="accordion">
<div class="box">

<div class="accordion" id="accordionExample">

  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;" >
        <button class="btn btn-link blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Aakarshan - The Art Club
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
 
							
      </div>
    </div>
  </div>

  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Aalap - The Music Club
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
     
      </div>
    </div>
  </div>

  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Core Values
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      

      </div>
    </div>
  </div>

  
<div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Kaivalya - The Yoga Club
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      

      
  
        </div></div></div>

      
        <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;" >
        <button class="btn btn-link blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
        Kdarshan - The Creative Club
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
 
							
      </div>
    </div>
  </div>

  
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Kreeda - The Sports Club
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
     
      </div>
    </div>
  </div>

  
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Mudra - Dance Club
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
      

      </div>
    </div>
  </div>

  
<div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Recurse - The Technical Club
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
      

      
  
        </div>
        </div>
        </div>


        <div class="card">
    <div class="card-header" id="headingNine">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        Traces of Lenses - The Photography Club
        </button>
      </h2>
    </div>
    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
      <div class="card-body">
      

      
  
        </div>
        </div>
        </div>

        <div class="card">
    <div class="card-header" id="headingTen">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
        VACHAN - The Speakers' Club
        </button>
      </h2>
    </div>
    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
      <div class="card-body">
      

      
  
        </div>
        </div>
        </div>



























































</div>



























</div>
</div>
</div>

    </section>
   
    <?php include ROOT_DIR .  '/common/footer.php'; ?>