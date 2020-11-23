<?php 
include 'init.php';
include ROOT_DIR .  '/common/header.php'; ?>

  <style>
    .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
  </style>
 
       
    <center>
        <div id="example1"></div>
    </center>
   
    <script>PDFObject.embed("new_features/sample.pdf", "#example1");</script>


    <?php include ROOT_DIR .  '/common/footer.php'; ?>