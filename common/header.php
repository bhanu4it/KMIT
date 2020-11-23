
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  <title>KMIT</title>
  <link rel="icon" href="<?php echo ROOT_URL .'/images/kmitlogo.jpg'; ?>" type="image/icon type" />
  <link rel="stylesheet" href="<?php echo ROOT_URL .'/css/mystyle.css'; ?>" />
  <link rel="stylesheet" href="<?php echo ROOT_URL .'/css/svg.css'; ?>" />
  <link rel="stylesheet" href="<?php echo ROOT_URL .'/css/footer.css'; ?>" />
  <link rel="stylesheet" href="<?php echo ROOT_URL .'/css/homepage.css'; ?>" />
  <link  href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet" lazyload>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo ROOT_URL .'/css/navgation.css'; ?>" />

  <link rel="stylesheet" href="<?php echo ROOT_URL .'/css/custom.css'; ?>"/>
  
  <script src="https://cdn.jsdelivr.net/npm/pdfobject@2.2.4/pdfobject.min.js" ></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  
  <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.5.207/build/pdf.min.js" ></script>

  <script>

    ///////////////// fixed menu on scroll for desktop
if ($(window).width() > 392) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 40) {
        $('#main_bar').addClass("fixed-top");
        //$('#navbar_top').addClass("fixed-top");

        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight()  + 'px');
      }else{
        $('#main_bar').removeClass("fixed-top");
        //$('#navbar_top').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
} // end if


// Prevent closing from click inside dropdown
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

// make it as accordion for smaller screens
if ($(window).width() < 392) {
  $('.dropdown-menu a').click(function(e){
    e.preventDefault();
      if($(this).next('.submenu').length){
        $(this).next('.submenu').toggle();
      }
      $('.dropdown').on('hide.bs.dropdown', function () {
     $(this).find('.submenu').hide();
  })
  });
}


    </script>


</head>


<style>
    .pdfobject-container { height: 50rem; border: 0.5rem solid rgba(0,0,0,.1); }
  </style>
<body>

  <header>
	<?php
       // require "helper/path.php";
       // require base_path('common/mainheader.php');

       //include '../init.php';
       include ROOT_DIR .  '/common/mainheader.html';

		//require_once($_SERVER['DOCUMENT_ROOT'].'/common/mainheader.php');
	?>
  </header>
