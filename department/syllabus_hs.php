<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

<br>
  <section  id="achievements-cse">
<div  class="container">

<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">
 Syllabus</h5>
</div></section>


<section  id="e-resources-cse">
<div  class="container">
<div  class="row">

<div  class="col-md-12">
<div  class="tab-content">

<div  class="tab-pane active show" id="assignments">
<div  aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
<!--add REGULATION-->
<div  class="panel panel-default">
<div  class="panel-heading" id="headingOne1" role="tab">
<h4  class="panel-title">
<a   class="blue-clr bold" style="font-family:timesnewroman;font-size:80%;color:brown;" aria-controls="collapseOne1" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseOne1" role="button"> 
R18 - I Year(Admitted Batches 2018-19 & 2019-20) 
</a>
</h4>
</div>
<!--add SYLLABUS-->
<div  aria-labelledby="headingOne" class="panel-collapse collapse in" id="collapseOne1" role="tabpanel">
<div  class="panel-body">
<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">
</h5>
<ol  class="course-material-list">

<li >  <a type="button" class="button" data-whatever="syllabus/cse_r18-1st.pdf" data-toggle="modal" data-target="#exampleModal">CSE </a></li>
<li ><a type="button" class="button" data-whatever="syllabus/it_r18-1st.pdf" data-toggle="modal" data-target="#exampleModal">IT </a></li>
<li ><a type="button" class="button" data-whatever="syllabus/ece_r18-1st.pdf" data-toggle="modal" data-target="#exampleModal">ECE </a></li>
<li ><a type="button" class="button" data-whatever="syllabus/eie_r18-1st.pdf" data-toggle="modal" data-target="#exampleModal">EIE </a></li>


</ol>
</div>
</div>
</div>

<!--add regulatiion-->
<div  class="panel panel-default">
<div  class="panel-heading" id="headingTwo2" role="tab">
<h4  class="panel-title">
<a  class="blue-clr bold" style="font-family:timesnewroman;font-size:80%;color:brown;" aria-controls="collapseTwo2" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo2" role="button">
 R16 - I Year(Admitted Batches 2016-17 & 2017-18)
 </a>
 </h4>
 </div>

 <!--add syllabus-->
 <div  aria-labelledby="headingTwo" class="panel-collapse collapse" id="collapseTwo2" role="tabpanel">
<div  class="panel-body">
<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">
</h5>
<ol  class="course-material-list">

<li ><a type="button" class="button" data-whatever="syllabus/cse_r16-1st.pdf" data-toggle="modal" data-target="#exampleModal">CSE </a></li>
<li ><a type="button" class="button" data-whatever="syllabus/it_r16-1st.pdf" data-toggle="modal" data-target="#exampleModal">IT </a></li>
<li ><a type="button" class="button" data-whatever="syllabus/ece_r16-1st.pdf" data-toggle="modal" data-target="#exampleModal">ECE </a></li>
<li ><a type="button" class="button" data-whatever="syllabus/eie_r16-1st.pdf" data-toggle="modal" data-target="#exampleModal">EIE </a></li>

</ol>
</div>
</div>

</div>

<!--add semester-->
<div  class="panel panel-default">
<div  class="panel-heading" id="headingThree3" role="tab">
<h4  class="panel-title">
<a   class="blue-clr bold" style="font-family:timesnewroman;font-size:80%;color:brown;" aria-controls="collapseThree3" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree3" role="button"> 
R15 (Admitted Batches 2015-16)
</div>
<!--add subjects-->
<div  aria-labelledby="headingThree" class="panel-collapse collapse" id="collapseThree3" role="tabpanel">
<div  class="panel-body">

</div>
</div>
</div>
</div>
</div>

</div>
 </div>
   </div>
   </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:80%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CSE Syllabus</h5>
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
   </section>
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var pdf = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('id').text(pdf)
  PDFObject.embed(pdf, "#example1");
})
</script>



<?php include ROOT_DIR .  '/common/footer.php'; ?>