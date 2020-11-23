<?php
include '../init.php';
include ROOT_DIR .  '/common/header.php';
?>
<style>
.button {

  border:2px solid #5b9aa0;
 
  padding:initial;
  text-align: justify;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 6px;
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
<section  id="value-added services">
  <div  class="container">
  <div  class="row">
  <div class="col-md-12">
  <br>
  <header class="section-header">
  <h4 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">Value Add Services</h4>
  </header>

<p style="text-align:justify;font-size:90%;font-family:verdana;">
All Add-on programs under Finishing School, Trishul and SONET (School of New and Emerging Technologies) are provided free of cost to students. Selection of students for various programs is based on their performance in the written test and their performance in previous academic year.
</p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">
Bridge courses like Basic Communication skills, Scratch Programming and Vocational training programs are compulsory for all I year students. I year students have to opt any two of the vocational training programs. These are in addition to regular University courses and provided free of cost.
</p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">
The coaching for Cambridge English’s Business English Certificates is provided free of cost. Registration is on a first come first serve basis. 
</p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">
It is to be noted that all these courses are taught by faculty that have expertise in these areas. The management also invests in CPD (Continued Professional Development) of  these faculty to ensure that they’re up-to-date with the latest happenings in the field. This, the management believes, will only benefit the students. 
</p>
<table>
<tr>
<td>
<button class="button button2">
<a  class="btn btn-sm btn-general btn-blue"href="../intiatives/finishing-school.php" target="_parent">Finishing School</a>
</button></td>
<td>
<div>
<button type="button" class="button button2">
<a class="btn btn-sm btn-general btn-blue" href="../intiatives/sonet.php" target="_parent">SONET</a></button>
</div></td>
<td>
<button class="button button2">
<a  class="btn btn-sm btn-general btn-blue" href="../intiatives/bec.php" target="_parent">BEC</a>
</button></td>
</tr>
</table>

</div>
</div>
</div></section>
  <?php include ROOT_DIR .  '/common/footer.php'; ?>