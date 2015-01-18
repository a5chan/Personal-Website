
<!DOCTYPE html>
<html lang="en">
  <head>

      <?php
      if (!empty($_POST['languages'])) {
    $dropDownVal = $_POST['languages'];
} else {
    $dropDownVal = 'en-ca';
}
      ?>
        <form action = "#" method = "POST" id = "languageselect">
         <div class="dropdown1">
              <select onchange = "languageselect()" id = "languages" name = "languages" class="form-control">
            <option value= "en-ca" <?php if ($dropDownVal=='en-ca') echo 'selected="selected"';?>>English</option> 
            <option value= "en-ch" <?php if ($dropDownVal=='en-ch') echo 'selected="selected"';?>>Chinese</option>
              </select>
         </div>
        </form>

    
      <?php
include "languagetrans.php";
if(isset($_POST['languages'])){
$lang = $_POST['languages'];
}else{
    $lang = "en-ca";
}
$languagetranslate = new language($lang);

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$languagetranslate->localizeit('title')?></title>
    
    
    <div class = "btn-group pull-right">
    <script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-url="ca.linkedin.com/pub/allen-chan/98/757/a33/" data-counter="right"></script>
   <div class="fb-share-button" data-href="https://facebook.com/"></div>
  <a href="https://twitter.com/twitter" class="twitter-follow-button" data-show-count="false">Follow on twitter</a>
  
    </div>
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="allen.css" rel="stylesheet">
  </head>
  <body>
    <h1><?=$languagetranslate->localizeit('welcome')?></h1>
<div class="myown">
 <ul class="nav nav-tabs" role="tablist">
     
  <li class="active"><a href="#"><?=$languagetranslate->localizeit('home')?></a></li>
  <li><a href="about.php"><?=$languagetranslate->localizeit('about')?></a></li>
  <li><a href="#"><?=$languagetranslate->localizeit('contact')?></a></li>
</ul>
    <br>
    </br>
     <div id="myCarousel" class="carousel slide">
         
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class=""><a href="#x col-xs-6"><img class = "allen" src="allen.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                       
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class=""><a href="#x col-xs-6"><img class = "allen" src="allen.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                    </div>
                    </div>
                <div class="item">
                        <div class="row">
                            <div class=""><a href="#x col-xs-6"><img class = "allen" src="allen.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                    </div>

                    </div>
                     <div class="item">
                        <div class="row">
                            <div class=""><a href="#x col-xs-6"><img class = "allen" src="allen.jpg" alt="Image" class="img-responsive"></a>
                            </div>
                    </div>

                    </div>
                </div>
               
                
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
            </div>
          
    
    <?php

    echo '    
    <div class="dropdown">';
       echo '<select onchange = "showpropertraits()" id = "traits" class="form-control">';
       
            echo '<option value= "0">'.$languagetranslate -> localizeit('skillset').'</option>';   
          echo '<option value= "1">'.$languagetranslate -> localizeit('projects').'</option>';   
             echo '<option value= "2">'.$languagetranslate -> localizeit('workexperience').'</option>';   
          echo '</select>';
       echo '</div>';
    ?>
    
    <br>
    
    </br>
    <div id = "traitslist">
        <div class = "hidden center-block jumbotron" id = "myskillset">
    <h1><?=$languagetranslate -> localizeit('skillsetdesc')?></h1>
  <ul type="1">
 <?=$languagetranslate -> localizeit('skillsetdescinner')?>
</ul>
    <br>
    </br>
    <p><a class="btn btn-primary btn-lg" role="button" href = "about.php" ><?=$languagetranslate -> localizeit('learnmore')?></a></p>
        </div>
        
              <div class = "hidden center-block jumbotron" id = "projects">
    <h1><?=$languagetranslate -> localizeit('projectsdone')?></h1>
  <p><a class="btn btn-primary btn-lg" role="button"><?=$languagetranslate -> localizeit('learnmore')?></a></p>
        </div>
        
              <div class = "hidden center-block jumbotron" id = "workplaces">
    <h1><?=$languagetranslate -> localizeit('workedat')?></h1>
  <p><a class="btn btn-primary btn-lg" role="button"><?=$languagetranslate -> localizeit('learnmore')?></a></p>
        </div>
    </div>
        </div>    
  </body>
  
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src = "js/allen_website.js"></script>
    
  <footer>
      <br>
      </br>
      THIS IS MY WEBSITE
  </footer>
</html