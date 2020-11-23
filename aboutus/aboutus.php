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


   <!-- <app-about-us>-->
  <section id="about-us">
  <div class="container" >
  
		<header class="section-header">
			<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">About Us</h5>
				<hr>
        </header>
        <p style="text-align:justify;font-size:90%;font-family:verdana;">Keshav Memorial Institute of Technology(KMIT), established in year 2007, is one of the premier engineering colleges in the state of Telangana. KMIT is sponsored by Keshav Memorial Education Society (KMES), well known in Hyderabad, for the past 75 years, for running various educational institutions of repute. KMIT is approved by All India Council for Technical Education (AICTE), New Delhi, and affiliated to Jawaharlal Nehru Technological University (JNTU), Hyderabad and recognized by Govt of Telangana. KMIT is co-promoted and powered by GENESIS SOLUTIONS PVT LTD, a premier and pioneer institute in Hyderabad imparting industry focused software training and education in emerging technologies and having tie-ups with leading MNCs. KMIT campus is located in Narayanaguda, a central place in the city of Hyderabad.</p>
    </div>

<div class="container">
<div class="panel-group" id="accordion">
<div class="box">

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;" >
        <button class="btn btn-link blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Vision and Mission
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <h5 class="blue-clr bold"> Vision </h5>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To be the fountain head in producing highly skilled, globally competent engineers.</p>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> Producing quality graduates trained in the latest software technologies and related tools and striving to make India a world leader in software products and services.</p>
		<h5 class="blue-clr bold"> Mission </h5>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To provide a learning environment that inculcates problem solving skills, professional, ethical responsibilities, lifelong learning through multi modal platforms and prepare students to become successful professionals.</p>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To establish industry institute Interaction to make students ready for the industry.</p>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To provide exposure to students on latest hardware and software tools. </p>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To promote research based projects/activities in the emerging areas of technology convergence. </p>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To encourage and enable students to not merely seek jobs from the industry but also to create new enterprises.  </p>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To induce a spirit of nationalism which will enable the student to develop, understand lndia's challenges and to encourage them to develop effective solutions. </p>
							<p style="text-align:justify;font-size:90%;font-family:verdana;"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg> To support the faculty to accelerate their learning curve to deliver excellent service to students. </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Quality Policy
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <p style="text-align:justify;font-size:90%;font-family:verdana;"> KMIT is committed to achieve global excellence and standards in teaching, research, consulting and placements by providing conducive environment in the fields of computer sciences and information technology, with professional and global outlook thereby ensuring continuous advancement.</p>
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
      <p style="text-align:justify;font-size:90%;font-family:verdana;">A cynic is one who knows the price of everything but the value of nothing.”
Hence it should be a constant endeavour among institutional and organizational
communities to nurture what can be treasured as core values.</p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">
A few carefully assorted core values are assiduously set into the general
ambience of KMIT and aligned to its mission and vision and reflected in the
general development of curricular and personal growth of Faculty, Staff and
students. Here are some of the envisioned core values which not only uphold the
ideals of the College but also connect with the National spirit making Higher
Educational Institution a temple of learning and knowledge.</p>
    
<button type="button" class="button1 button2">
<a class ="btn btn-sm btn-general btn-blue" type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/core_values.pdf">
View/Download
</a>
</button>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h5 class="modal-title" id="exampleModalLabel">Core Values</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="example1"></div>
      </div>
    </div>
  </div>
	
</div>
</div>
<div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0" style="font-family:verdana;font-size:120%;">
        <button class="btn btn-link collapsed blue-clr bold" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
        Achievements(Accrediations)
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      

      <div class="box">
	    <a type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/Naac.pdf">
            NAAC Accrediation
        </a>
		</div>
		<div class="box">
		<a type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/RatingCertificate_2019-20.pdf">
            IIC Certificate
        </a>
		</div>
        <div class= "box">
        <a type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/IT_NBA_Accredition_Approval_20190111.pdf">
            NBA Accreditation – IT Department
        </a>
        </div>

        <div class="box">
        <a type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/AISHE_2018-19.pdf">
            AISHE Certificate 2018-19
        </a>
        </div>

  <div class="box">
  <a type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/aciteapproval.pdf">
  AICTE Recognition
      </a>
  </div>

  <div class="box">
  <a type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/jntuaffiliation.pdf">
  JNTUH Affiliation
      </a>
  </div>
  
        </div></div></div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h5 class="modal-title" id="exampleModalLabel">Accrediations</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="example1"></div>
      </div>
    </div>
  </div>
</div>

	</div>
</div>
</div>
</div>

    </section>
   
   <script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var pdf = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.id').text(pdf)
  PDFObject.embed(pdf, "#example1");
})


</script>
    <?php include ROOT_DIR .  '/common/footer.php'; ?>