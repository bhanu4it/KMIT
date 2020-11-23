<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>
<style>
.blockquote {
    padding: 60px 80px 40px;
    position: relative;
}
.blockquote p {
    font-family: "Utopia-italic";
    font-size: 35px;
    font-weight: 700px;
    text-align: center;
}
.blockquote:before {
  position: absolute;
  font-family: 'FontAwesome';
  top: 10;
  
  content:"\f10d";
  font-size: 200px;
  color: rgba(0,0,0,0.1);
   
}

.blockquote::after {
    content: "";
    top: 20px;
    left: 50%;
    margin-left: -100px;
    position: absolute;
    border-bottom: 3px solid #bf0024;
    height: 3px;
    width: 200px;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic);
.otro-blockquote{
  font-size: 1.1em;
  width:100%;
  
  font-family:Open Sans;
  font-style:italic;
  text-align:justify;
  color: #555555;
  padding:1.2em 30px 1.2em 75px;
  border-left:8px solid #78C0A8 ;
  line-height:1.6;
  position: relative;
  background:#EDEDED;
}

.otro-blockquote::before{
  font-family:Arial;
  content: "\201C";
  color:#78C0A8;
  font-size:4em;
  position: absolute;
  left: 10px;
  top:-10px;
}

.otro-blockquote::after{
  content: '';
}

.otro-blockquote span{
  display:block;
  color:#333333;
  font-style: normal;
  font-weight: bold;
  margin-top:2em;
}
</style>

  <!-- <app-directors>-->
  <section id="directors">
  <div class="container" >
		<header  class="section-header">
                <h4 class="blue-clr bold">Director</h4>
                <hr>
        </header>
</div>
    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-2" style="display:table-cell; vertical-align:middle; text-align:center">
        <img src="../assets/nithin.png" alt="Director's image" width="80%" style="img-align:left"> 
                        <h5 class="blue-clr bold" text-align="center" >Mr. Nithin </h5>
                        <h6 class="bold">Director</h6>
    </div>
    <div class="col-sm-8">
    <h5 class="blue-clr bold">About Mr. Nitin</h5>
    <hr>
	    <p style="text-align:justify;font-size:90%;font-family:verdana;"> Mr. S.Nitin is the Director of Genesis Solutions Pvt. Ltd. He is Bachelors graduate in Electronics & Communications Engineering. Prior to this assignment ,he worked with various companies in India & Abroad in Senior Sales positions. He brings along with him more than 25 years of experience of direct Project & Product Sales in Healthcare and IT Industry.</p>
        <h5 class="blue-clr bold"> Message</h5>
        <hr>
        <blockquote class="otro-blockquote">
            The prestigious, Keshav Memorial Institute of Technology , since its inception in 2007 has made remarkable progress by following the mantra of student centric approach, whether it is in academics or in extra co-curricular activities. The institute possess a state of art infrastructure with equipped laboratories, well stocked library and highly qualified faculty. We at, KMIT introduce our students to the Outcome Based Education and trained with skills in various disciplines. In addition to developing excellent scientific and engineering skills, the students are motivated not only to dream big but also encouraged to think unconventionally to face the challenges of the future, incorporating employability skills in tune with the industry requirement and provide platform for Entrepreneurship. It has been our constant endeavour to instill in our students ethical values hereby making them socially responsible citizens. The institution has stood for quality and excellence and still thriving to be the best in the years to come. Keeping our vision and mission of the institution, we believe in Imagine-Invent-Inspire. In the making of dynamic individuals in the society. 
            <span>Mr. Nitin</span>
        </blockquote>
    </div>
    <div class="col-sm-1"></div>
</div>
</section>
  
  <?php include ROOT_DIR .  '/common/footer.php'; ?>