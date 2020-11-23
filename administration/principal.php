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
  top: 0;
  
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
  margin-top:1em;
}
</style>

  <section>
  <div class="container" >
		<header  class="section-header">
                <h4 class="blue-clr bold">Principal</h4>
                <hr>
        </header>
  </div>
    <div class="row">
    <div class="col-sm-1"></div>
        <div class="col-sm-2" style="display:table-cell; vertical-align:middle; text-align:center">
            <img src="../assets/principalphoto.png" alt="Principal's image" width="80%" img-align="center" >  
				<h5 class="center blue-clr bold" text-align="center" >Dr. D. Maheshwar </h5>
				<h6 class="center bold" text-align="center">Principal</h6>
        </div>
        
        <div class="col-sm-8">
            <h5 class="blue-clr bold">About Dr. D. Maheshwar</h5>
            <hr>
            <p style="text-align:justify;font-size:90%;font-family:verdana;"> Dr. D.Maheshwar has served as Professor / Principal in various engineering colleges in Telangana, Andhra Pradesh and Karnataka. He has completed his B.E(Mechanical Engineering) in 1992, M.E(Thermal power Engineering) in 1995 from Gulbarga University. In 2005 he received Ph.D from JNTUH. Awarded 6 Ph.Ds under his guidance and is currently supervising 4 Ph.Ds. He published more than 78 papers in National and International Journals. He presented and participated in 25 National and International conferences. He also presented papers, organized seminars,workshops for the benefit of student community and Faculty Career Development.</p>
            <br>
            <p style="text-align:justify;font-size:90%;font-family:verdana;"> <i><strong>"Education to me is about Self learning and acquiring the wisdom of life."</strong> </i></p>
            <br>
            <h5 class="blue-clr bold">Message</h5>
            <hr>
            <blockquote class="otro-blockquote">
            Keshav Memorial Institute of Technlolgy is in its 11th year of its existence, contributing to technical education in a big way. Endowed with a well laid out Campus, an excellent management, well qualified faculty and a good academic ambience, the college endeavours to be a top ranking higher educational institution in the city of Hyderabad. A large number of augmentation courses, several outreach programmes and a well disciplined student community distinguishes KMIT as a centre for quality education. The main strength of KMIT is its consistent growth in placements. We welcome all students to join us to make KMIT a place to grow and hone your skills.
            <span>Dr. D. Maheshwar Dutta</span>
        </blockquote>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="col-sm-2"></div>
  <section>
  
  <?php include ROOT_DIR .  '/common/footer.php'; ?>