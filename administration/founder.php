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

  <!-- <app-directors>-->
  <section id="directors">
  <div class="container" >
  
		<header  class="section-header">
                <h4 class="blue-clr bold">Founder</h4>
                <hr>
        </header>
</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-2" style="display:table-cell; vertical-align:middle; text-align:center">
        <img src="../assets/Neil_Gogte.png" alt="Founder's image" width= "80%" style="img-align:left"> 
                        <h5 class="blue-clr bold" text-align="center" >Mr. Neil Gogte </h5>
                        <h6 class="bold">Founder</h6>
    </div>
    <div class="col-sm-8">
    <h5 class="blue-clr bold">About Mr. Neil Gogte</h5>
    <hr>
		    <p style="text-align:justify;font-size:90%;font-family:verdana;"> Mr. Neil Gogte is the Founder and heads the Keshav memorial Institute of technology. He is a Masters Degree holder in Computer Science from IIT - Mumbai and got his B.E degree from Osmania University, Hyderabad in 1985. He started his career with CMC Ltd., and was part of the development team of OfficeMate, an Office Automation application. He was then part of the team at Sun Microsystems, USA, for the development of SUNRAI, an interface to the backend ERP applications running on IBM systems.</p>
            <h5 class="blue-clr bold">Message</h5>
            <hr>
            <blockquote class="otro-blockquote">
            Keshav Memorial Institute of Technology Hyderabad has been serving as nation’s flagship comprehensive institution of higher education. We are advancing institute’s tradition of excellence in Engineering and Technology Education through high quality teaching methodology in our Finishing School. KMIT promotes research, on-site industry executive training and service. We continue to rank among the nation’s best intensive industry interactive Engineering schools. Our distinguished faculty has extensive ties with leading engineering and research community, are able to bring the best scientist and engineers into our programs as visiting faculty and guest speakers.
            <span>Mr. Neil Gogte</span>
            </blockquote>
    </div>
    <div class="col-sm-1"></div>
</div>
</section>
  
  <?php include ROOT_DIR .  '/common/footer.php'; ?>