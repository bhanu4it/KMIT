<?php

include '../init.php';
//index.php
function make_query()
{
 $query = file_get_contents('test.json');
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
$output .= '<img src="banner/'.$result[0]->banner_image.'" class="d-block w-100" alt="'.$result[0]->banner_title.'" />
        <div class="carousel-caption">
            <h3>'.$result[0]->banner_title.'</h3>
        </div>
        </div>';

 
 foreach($result as $key => $value) 
 {
    $output .= '<div class="carousel-item">';
    $output .= '<img src="banner/'.$value->banner_image.'" class="d-block" alt="'.$value->banner_title.'" />
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
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
 </div>




  <div class="container">
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php echo make_slide_indicators(); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides(); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>

  <?php include ROOT_DIR .  '/common/footer.php'; ?>











