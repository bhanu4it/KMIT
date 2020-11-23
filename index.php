
<!-- Content -->
<!-- Slider -->
<?php 
include 'init.php'; 
function make_query()
{
 $query = file_get_contents('common/slides.json');
 $result = json_decode($query);
 return $result;
}

function make_slide_indicators()
{
 $result = make_query();
 $output = ''; 
 foreach($result as $key => $value) 
 {
    $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.count($result).'"></li>';
 }
 
 
 
 return $output;
}

function make_slides()
{
 $output = '';
 $count = 0;
 $result = make_query();


 $output .= '<div class="carousel-item active">';
$output .= '<img src="assets/banner/'.$result[0]->banner_image.'" class="d-block w-100" alt="'.$result[0]->banner_title.'" />
        <div class="carousel-caption">
            <h3>'.$result[0]->banner_title.'</h3>
        </div>
        </div>';

 
 foreach($result as $key => $value) 
 {
    $output .= '<div class="carousel-item">';
    $output .= '<img src="assets/banner/'.$value->banner_image.'" class="d-block w-100" style="height:350px;" alt="'.$value->banner_title.'" />
            <div class="carousel-caption">
                <h3>'.$value->banner_title.'</h3>
            </div>
            </div>';
   
 }
 return $output;
}
?>

<?php include ROOT_DIR .  '/common/header.php'; ?>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php echo make_slide_indicators(); ?>
    </ol>
    <div class="carousel-inner">
        <?php echo make_slides(); ?>
    </div>
    <a  class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a  class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
 </div>

<!-- End of Slider -->

<!-- Welcome msg section-->
<br><br>
    <div class="container-fluid">
        <div class="row">
			<div class="col-md-3">
                <div class="welcome-msg">
                    <img src='assets/blockb.jpg' onerror="this.src='assets/college_campus.jpg'" class="img-fluid" alt="KMIT college" style="height:50%;">
                </div>	

            </div>

            <div class="col-md-5">
                <header class="section-header">
                    <h4 class="blue-clr bold" >
						Welcome To Keshav Memorial Institute of Technology
					 
                    </h4>
                </header>
                <p style="text-align:justify;">Keshav Memorial Institute of Technology(KMIT), established in year 2007, is one of the premier engineering
                    colleges in the state of Telangana. KMIT is sponsored by Keshav Memorial Education Society (KMES), well
                    known in Hyderabad, for the past 75 years, for running various educational institutions of repute. KMIT
                    is approved by All India Council for Technical Education (AICTE), New Delhi, and affiliated to Jawaharlal
                    Nehru Technological University (JNTU), Hyderabad and recognized by Govt of Telangana. KMIT is co-promoted
                    and powered by GENESIS SOLUTIONS PVT LTD, a premier and pioneer institute in Hyderabad imparting industry
                    focused software training and education in emerging technologies and having tie-ups with leading MNCs.
                    KMIT campus is located in Narayanaguda, a central place in the city of Hyderabad.</p>
            </div>
</div>
</div>
            
<!-- News & Events section-->
<section id="news-events">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-4">
                        <header class="section-header">
                            <h4 class="blue-clr bold">KMIT
                                <span>TV</span>
								 
                            </h4>
                        </header>
                        <div class="founders-msg-section">
                            <a  href="http://www.kmittv.com/">
                                <img src="assets/kmittv.jpg" style="padding:1px;border:1px solid #ddd;width:100%;height: 140px;" class="img-fluid" align="left"
                                    alt="Director's">
                            </a>
                            <p>Students who miss the lectures during the day can watch them online at their convenience.
                                <a  href="#" target="_blank" class="blue-clr bold">Read More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-4">
                        <header class="section-header">
                            <h4 class="blue-clr bold">
                                Swayam Corner
								 
                            </h4>
                        </header>
                        <div class="founders-msg-section">
                            <a  href="https://nptel.ac.in/LocalChapter/statistics/2380/" target='_blank'>
                                <img src='assets/swayam.webp' onerror="this.src='assets/swayam.webp'" style="height: 120px;padding:1px;border:1px solid #ddd;width:100%;" class="img-fluid" align="left"
                                    alt="Director's">
                                    
                            </a>
                            <p style="font-size: 13px;">NPTEL is very happy to be associated with <b>KESHAV MEMORIAL INSTITUTE OF TECHNOLOGY (KMIT)</b> institute and its students.We are thankful to <b>S.V. VASANTHA</b> for being a pillar of support in NPTEL initiatives.
                                <a  href="https://nptel.ac.in/LocalChapter/statistics/2380/" target="_blank" class="blue-clr bold">Read More</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12  col-lg-4">
                        <header class="section-header">
             <h4 class="blue-clr bold">Initiatives @ KMIT
                 <!-- <span class="blue-clr">Keshav Memorial Institute of Technology</span> -->
				  
             </h4>
         </header>
 <div style="width:100%;" class="row">
<div  class="bestpracticeskmit col-md-6 col-sm-12">
	 <div ><a  href="#"><span>TESSELLATOR</span></a></div>
	 <div><a  href="#"><span>Placements</span></a></div>
	 <div><a  href="#"><span>Finishing School</span></a></div>
	 <div><a  href="#"><span>BEC</span></a></div>
	<div><a  href="#"><span>ARJUNA</span></a></div>
</div>

<div  class="bestpracticeskmit  col-md-6 col-sm-12">
	<div ><a  href="#"><span>kMITRA</span></a></div>
	<div><a  href="#"><span>ALUMINI</span></a></div>
	<div><a  href="#"><span>KMIT TV</span></a></div>
	<div><a  href="#"><span>Events</span></a></div>
	<div><a  href="#"><span>Nirantar FS</span></a></div>
			</div>
		</div>
     </div>
</div>
	</div>
	<!-- Bulleting Board Carousel-->
	<div class="col-md-4">

	</div>

        <!-- End News & Events Carousel-->
		<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Why KMIT section-->
                    <h4 class="blue-clr bold">Why KMIT?
					 
                    </h4>
                <p>Keshav Memorial Institute of Technology (KMIT) has been started to work for the all round development of
                    students with an integral approach to education keeping in view the ever changing social media. The fast
                    developing technology and the growing job opportunities it offers must be brought within the reach of
                    our youth. Hyderabad which has grown into a metro city at a rapid pace is an ideal place for such a technological
                    institute. So Keshav Memorial Technical Educational society has decided to start an Institute of Technology
                    in its campus at Narayanguda in Hyderabad in the name and style of "Keshav Memorial INSTITUTE OF TECHNOLOGY"</p>
                <!-- End Why KMIT section-->
            </div>
    </div>
</section>

<!-- Initiatives section-->
<section id="home-initiatives">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <header class="section-header">
                    <h4 class="blue-clr bold">Connect with Us </h4>
                </header>

                <div class="row">
                    <div class="col-md-6">
                        <header class="section-header">
                            <h5 class="blue-clr bold">Android Apps</h5>
							 
                        </header>
                        <!-- Initiatives Accrodin -->
                        <div class="bd-callout bd-callout-danger" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="appsHeadingOne">
                                    <a  class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#appsCollapseOne" aria-expanded="true" aria-controls="appsCollapseOne">
                                        Sanjaya App
                                    </a>
                                </div>

                                <div id="appsCollapseOne" class="collapse show fade" aria-labelledby="appsHeadingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p style="text-align:justify;">
                                            Sanjaya is an Android App built to give parents all the details that they need to about their ward’s progress at KMIT. From
                                            Sanjaya App parents can not only check the attendance, time-table, performance,
                                            events and results, but also look at the class room. The live-class....
                                            <a  href="#" class="blue-clr bold">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="appsHeadingTwo">
                                    <a  class="btn btn-link collapsed btn-block text-left" data-toggle="collapse" data-target="#appsCollapseTwo" aria-expanded="false"
                                        aria-controls="appsCollapseTwo">
                                        Drona App
                                    </a>
                                </div>
                                <div id="appsCollapseTwo" class="collapse fade" aria-labelledby="appsHeadingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p style="text-align:justify;">
                                            Drona is an Android App built for KMIT faculty, for ease of marking attendance , rating ...
                                            <a  href="#" class="blue-clr bold">Read More</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="appsHeadingThree">
                                    <a  class="btn btn-link collapsed btn-block text-left" data-toggle="collapse" data-target="#appsCollapseThree" aria-expanded="false"
                                        aria-controls="appsCollapseThree">
                                        Netra App
                                    </a>
                                </div>
                                <div id="appsCollapseThree" class="collapse fade" aria-labelledby="appsHeadingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p style="text-align:justify;">
                                            Netra is an Android App built for KMIT students. From Netra App they have access to all the details that they need to know
                                            while they are at KMIT. From Netra App students can not only cross-check the
                                            attendance...
                                            <a  href="#" class="blue-clr bold">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Initiatives Accrodin -->
                    </div>
                    <div class="col-md-6">
                        <header class="section-header">
                            <h5 class="blue-clr bold">Our Initiatives</h5>
							 
                        </header>
                        <!-- Initiatives Accrodin -->
                        <div class="accordion" id="accordionExampletwo">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a  class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Finishing School
                                    </a>
                                </div>

                                <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExampletwo">
                                    <div class="card-body">
                                        <p style="text-align:justify;">
                                            Having started in 2007, KMIT's first batch graduated in the year 2011. With the sole objective of producing industry ready
                                            engineering students. KMIT has instituted a comprehensive Finishing School program
                                            for its Final year students....
                                            <a  href="#" class="blue-clr bold">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a  class="btn btn-link collapsed btn-block text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        BEC
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExampletwo">
                                    <div class="card-body">
                                        <p style="text-align:justify;">
                                            To survive in today’s highly competitive world, it has become imperative for graduates have certain edge. Recognizing the importance of this, and the fact that communication skills play a major role in recruitments, KMIT kick-started the BEC programme in 2011
                                            <a  href="#" class="blue-clr bold">Read More</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a  class="btn btn-link collapsed btn-block text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        SONET
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExampletwo">
                                    <div class="card-body">
                                        <p style="text-align:justify;">SONET stands for
                                            <strong>S</strong>chool
                                            <strong>O</strong>f
                                            <strong>N</strong>ew &
                                            <strong>E</strong>merging
                                            <strong>T</strong>echnologies. Around 2000 students trained in 2017-18 Academic year.
                                            It offers following courses.</p>
                                        <ul>
                                            <li>
                                                <i class="far fa-check-circle"></i> INTRODUCTION TO MATLAB AND OCTAVE</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> VLSI DESIGN IN MATLAB</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> DIGITAL SIGNAL PROCESSING USING MATLAB</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> SALESFORCE</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> WEBSECURITY</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> NOSQL</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> HADOOP</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> DATA SCIENCE/ MACHINELEARNING </li>
                                            <li>
                                                <i class="far fa-check-circle"></i> UNITY</li>

                                            <li>
                                                <i class="far fa-check-circle"></i> BLOCKCHAIN</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> AEM</li>
                                            <li>
                                                <i class="far fa-check-circle"></i> IOT</li>
                                        </ul>
                                        <a  href="#" class="blue-clr bold">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Initiatives Accrodin -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<!-- End Initiatives section-->


<!-- Courses section-->
<section id="prog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <header class="section-header">
                    <h4 class="blue-clr bold">Courses
					 
                    </h4>
                </header>
			  <div class="card-deck">
				<div class="card">
				<img class="card-img-top" src="assets/cse.jpg" style="height:210px" alt="Card image">
				  <div class="card-body text-center">
						<h2 class="title">
							<a  href="#" class="blue-clr bold" >CSE</a>
						</h2>
						<p style="text-align: justify;">
							The Department of Computer Science and Engineering at Keshav Memorial Institute of Technology was established in the year
							2007 with an intake of 60. The intake is gradually increased to 300 ...
						</p>
					</div>
				</div>
				<div class="card">
				<img class="card-img-top" src="assets/it.jpg" style="height:210px" alt="Card image">
				  <div class="card-body text-center">
						<h2 class="title">
							<a  href="#" class="blue-clr bold">IT</a>
						</h2>
						<p style="text-align: justify;">
							The Department of IT at Keshav Memorial Institute of Technology was established in the year 2007 with an intake of 60. The
							Department focuses on preparing the students ...
						</p>
				  </div>
				</div>
				<div class="card">
				<img class="card-img-top" src="assets/ece.jpg" style="height:210px" alt="Card image">
				  <div class="card-body text-center">
						<h2 class="title">
							<a  href="#" class="blue-clr bold">ECE</a>
						</h2>
						<p style="text-align: justify;">
							The department of Electronics & Communication Engineering started right from the inception of the college in the year 2001.
							The primary objective of the department has ...
						</p>
				  </div>
				</div>
				<div class="card">
				<img class="card-img-top" src="assets/eie.jpg" style="height:210px" alt="Card image">
				  <div class="card-body text-center">
						<h2 class="title">
							<a  href="#" class="blue-clr bold">EIE</a>
						</h2>
						<p style="text-align: justify;">
							Electronics and Instrumentation Engineering program was introduced in Keshav Memorial Institute of Technology with a sanctioned
							intake of 60 students in the academic year 2007 – 08.
						</p>
				  </div>
				</div>  
			  </div>
			  </div>
			</div>
        </div>
    </div>
<br>
</section>
<!-- End Courses section-->


<!-- start of recruiter section-->

<section id="recruiter-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">       
	  <header class="section-header">
                    <h4 class="blue-clr bold">Recruiters
                    </h4>
                </header>
  <marquee behavior="scroll" direction="left" scrollamount="5">
  <div class="recruiters">
<?php
 $query = file_get_contents('common/complogo.json');
 $result = json_decode($query);
foreach($result as $key => $value) { ?>
				<img src="<?php echo $value->companylogo; ?>" height="70px" alt="<?php echo $value->company; ?>">
 <?php
} ?>
<div>
</marquee>
        </div>
		</div>
      </div>
</section>

<style>
.bestpracticeskmit div a{
color: teal ;
font-weight: bold;cursor:pointer;
}
.bestpracticeskmit div{
border: 2px solid teal;
padding: 5px;

}
.bestpracticeskmit div{
text-align:center;
float:left;    
margin: 4px;
font-color:#14777f;
float: initial!important;
}
.bestpracticeskmit div:hover a{
background:teal !important;
color:#fff !important;cursor:pointer;
}
.bestpracticeskmit div:hover,
.bestpracticeskmit .first,.bestpracticeskmit .first a{
background:teal !important;
color:#fff !important;cursor:pointer;
}
.accordion .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0;
}
.card-header {
    padding: 0;
    border-left: 3px solid #14777f;
    border-bottom: none;
}

</style>
<?php include ROOT_DIR .  '/common/footer.php'; ?>
