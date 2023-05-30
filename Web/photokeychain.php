<?php
    require_once __DIR__ . "/database/db.php";
    require_once __DIR__ . "/database/functions.php";    
?>

<!DOCTYPE html>
<html lang="en">
<html>
   <!--Це файл filel.html-->
   <head>
    <?php require_once 'head.php'; ?>
    <link rel="stylesheet" href="css/organizer.css" media="all">      
   </head>
<body>
    <div id="wrapper">
      <?php require_once 'header.php'; ?>
              
         <div class="pricing4 py-5 bg-light">
          <div class="container">
            <!-- Row  -->
            <div class="row justify-content-left">
              <div class="col-6" >
                <h3 class="mb-3" >Шкіряний фотобрелок</h3>
                <br>
              </div>
            </div>
            <!-- Row  -->
            <div class="row mt-4">
            <?php
            $photokeychains = get_photokeychains_all();
            foreach($photokeychains as $photokeychain): 
            ?>
              <!-- Column -->
              <div class="col-md-4">
                <div class="card card-shadow border-0 mb-4">
                  <br>
                  <img class="card-img-top" src="<?= $photokeychain["img_accessory"] ?>" alt="wrappixel kit" height="240px" width="240px">
                  <div class="p-3">
                    <h5 class="font-weight-medium mb-0"><?= $photokeychain["name_category"] ?> <?= $photokeychain["name_accessory"] ?></h5>
                    <h6 class="subtitle font-13">Матеріали: <?= $photokeychain["name_material"] ?></h6>
                    <ul class="list-inline font-14 mt-3">
                      <li class="py-1"><i class="icon-check text-success"></i> РОЗМІРИ: </li><br>
                      <li class="py-1"><i class="icon-check text-success"></i> ширина - <?= $photokeychain["width"] ?> см</li><br>
                      <li class="py-1"><i class="icon-check text-success"></i> довжина - <?= $photokeychain["length"] ?> см</li><br>
                      <li class="py-1"><i class="icon-check text-success"></i> товщина - <?= $photokeychain["height"] ?> см</li>
                    </ul>
                    <div class="d-flex mt-3 align-items-center">
                      <h2 class="price"><?= $photokeychain["price"] ?> ₴</h2>
                      <div class="ml-auto"><a class="btn btn-danger-gradiant rounded-pill text-white btn-md border-0" href="more_details_photokeychain1.php">Переглянути</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>              
            </div>
          </div>
        </div>
        <?php require_once 'footer.php'; ?>        
    </div>
  </body>
</html>