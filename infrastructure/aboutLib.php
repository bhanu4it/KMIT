<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>


<!--- CSS--->
<style>#library-carousel{height:75%}#library-carousel   .owl-carousel   .owl-nav   .owl-next, .owl-carousel   .owl-nav   .owl-prev{position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);color:#fff!important;border:2px solid #fff!important}#library-carousel   .owl-carousel   .owl-nav   .owl-next{right:0}#library-carousel   .owl-carousel   .owl-nav   .owl-prev{left:0}#library-carousel   .owl-carousel   .owl-nav   button.owl-next, .owl-carousel   .owl-nav   button.owl-prev{padding:10px 15px!important}#library-carousel   .owl-carousel   .owl-dots{position:absolute;bottom:30px;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}#library-carousel   .owl-carousel   .owl-dot{display:inline-block;margin:0 2.5px;height:15px;width:15px}#library-carousel   .owl-theme   .owl-dots   .owl-dot   span{background:0 0;border:1px solid #fff}#library-carousel   .owl-theme   .owl-dots   .owl-dot.active   span{background-color:#fff}#library-carousel   button:focus{outline:0}#about-library{padding:60px 0 40px;position:relative}table   td, table   th{font-size:14px}.thead-blue{background:#14777f;color:#fff}h6   a{text-decoration:none;color:#14777f}.facilities-list{list-style:none;padding:0;margin:0}.facilities-list   li{color:#666}.facilities-list   li   svg{color:#14777f}</style>

<!-- Content -->
<!---- Slide Show--->

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

<!-- Library Description -->


<section  id="about-library">
<div  class="container">
<div  class="row">
<div  class="col-md-12">
<header  class="section-header">
<h4 >About Library </h4><hr></header>
<h5  class="blue-clr bold">OverView:</h5>
<p  style="text-align:justify;">The Library block is centrally located in the
 campus and is surrounded by academic classrooms, laboratories, workshops, placement wing 
 and sports grounds. It is divided into different sections like stack area, Reading room, 
 Reference and Periodical Section. Library remains open till 6 PM on all working days to
  allow students and faculty to spend time in the Library.</p>
  
  <p  style="text-align:justify;">The College library has 18195 books, 4293 
  titles and 82 journals that cater to all the branches of engineering, as well as other 
  disciplines. A Digital Library has also been set up, with full access to Digital Libraries.
   All major newspapers, news magazines and books of general interest 
   (non-fiction, biographies, etc.) are also made available.</p>


   <div  class="">
   <div  class="table-responsive">
   <table  class="table table-bordered">
   <tbody ><tr  class="thead-blue">
   <th  colspan="2" style="text-align:left;">Books</th></tr>
   <tr ><td >
   <strong >Total No. of Volumes</strong></td><td >
   <strong >18195</strong></td></tr>
   <tr ><td >
   <strong >Total No. of Titles </strong></td><td >
   <strong >4293</strong></td></tr><br >
   <tr  class="thead-blue">
   <td  colspan="2" style="text-align:left;">
   <strong >Journals:</strong></td></tr>
   <tr ><td >
   <strong >Total Number of Print Journals</strong></td>
   <td ><strong >82</strong></td></tr>
   <tr ><td ><strong >National</strong></td>
   <td ><strong >72</strong></td></tr>
   <tr ><td ><strong >International</strong>
   </td><td ><strong >10</strong></td></tr>
   <tr ><td >
   <strong >E Journals (DELNET)</strong></td><td >
   <strong >433</strong></td></tr></tbody></table></div></div>
   
   <br >
   <h6  class="blue-clr bold">BRACH-WISE DISTRIBUTION OF BOOKS AND JOURNALS</h6><div  class="table-responsive">
   <table  class="table table-bordered">
   <thead  class="thead-blue">
   <tr >
   <th  scope="col">S.No</th>
   <th  scope="col">Branch</th>
   <th  scope="col">Volumes</th>
   <th  scope="col">National Journals</th>
   <th  scope="col">International Journals</th>
   <th  scope="col">E- Journals (DELNET)</th></tr></thead>
   <tbody ><tr ><td >1 </td>
   <td >CSE </td><td >9844 </td>
   <td >13 </td><td >5 </td>
   <td  rowspan="2" style="text-align:center;">313 </td></tr>
   <tr ><td >2 </td><td >IT </td>
   <td >1958 </td><td >14 </td><td >3 </td></tr>
   <tr ><td >3 </td><td >ECE </td>
   <td >3024 </td><td >32 </td>
   <td >2 </td>
   <td  rowspan="2" style="text-align:center;">29 </td></tr>
   <tr ><td >4 </td><td >EIE </td>
   <td >1735 </td><td >11 </td><td ></td></tr>
   <tr ><td >5 </td><td >H&amp;S </td>
   <td >1634 </td><td >2 </td><td ></td>
   <td  style="text-align:center;">91 </td></tr></tbody></table></div></div></div></div></section>


<?php include ROOT_DIR .  '/common/footer.php'; ?>