<!DOCTYPE html>
<html lang="en"><html>
  <link type="text/css" rel="stylesheet" href="./css/stylez.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head><meta charset="utf-8"></head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
	        <h1>Incubator Photo Library</h1>
        </div>
        <nav>
          <ul>
            <li><a href="./index.php">View Images</a></li>
            <li class="current"><a href="compare.php">Compare Images</a></li>
            <li><a href="./setup.php">Setup Videos</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </head>
  <body>
    <div class="light">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <form method = 'GET' action='#'> 
              <div class="form-group"><label for="imageid1">Image 1:</label>
              <?php 
                for($x = 0; $x < 4; $x++) {
                  echo "&nbsp;";
                } 
              ?>  
              <select class="form-control" name='imageid1'><option value=NULL></option>
                <?php
                  $count = count(glob("./images/" . "*"));
	                for ($img_id1 = 1; $img_id1 <= $count; $img_id1++) {
					          if ($img_id1 < 10) {
                      $img_id1 = sprintf("%03d",$img_id1);
                    }
					          else if ($img_id1 < 100) {
                      $img_id1 = sprintf("%03d",$img_id1);
                    }
                    echo "<option value=" . $img_id1 . ">Image " . $img_id1 . "</option>";
			            }
                ?>
              </select>
                    
              <?php 
                for($x = 0; $x < 19; $x++) {
                  echo "&nbsp;";
                } 
              ?>    

              <class="form-group">
                <label for="imageid2">Image 2:</label>
                <?php 
                  for($x = 0; $x < 4; $x++) {
                    echo "&nbsp;";
                  } 
                ?> 
                <select class="form-control" name='imageid2'>
                  <option value=NULL></option>
                  <?php
                    $count = count(glob("./images/" . "*"));
	                  for ($img_id2 = 1; $img_id2 <= $count; $img_id2++) {
					            if ($img_id2 < 10) {
                        $img_id2 = sprintf("%03d",$img_id2);
                      }
					            else if ($img_id2 < 100) {
                        $img_id2 = sprintf("%03d",$img_id2);
                      }
                      echo "<option value=" . $img_id2 . ">Image " . $img_id2 . "</option><br />";
			              }
                  ?>
                </select>
                </select>

                <?php 
                  for($x = 0; $x < 20; $x++) {
                    echo "&nbsp;";
                  } 
                ?>
                <button class="button_1" type="submit">Compare</button>
            </form>
          </div>

        <?php
          if (!isset($_GET["imageid1"])) {
            for ($x = 0; $x < 4; $x++) {
		          echo "</div>";   
            }
            echo "</body>";
            for ($x = 0; $x < 20; $x++) {
		          echo "&nbsp</br>";   
		        }
            echo "<footer><p>Zheng Lab, Copyright &copy; 2018</p></footer>";
            exit(0);
          }

          echo "&nbsp;</br>";
   
          if ($_GET["imageid1"] == "NULL" && $_GET["imageid2"] == "NULL") {
	          print "Invalid Images 1 and 2.";
            exit(0);
          }
	        else if ($_GET["imageid1"] == "NULL") {
	          print "Invalid Image 1.";
            exit(0);
          }
	        else if ($_GET["imageid2"] == "NULL") {
	          print "Invalid Image 2.";
            exit(0);
          }
	   
		      $image_id1 = $_GET['imageid1'];
          $image_id2 = $_GET['imageid2'];
          
		      echo "<h2>#1: IMAGE " . $image_id1;
		      for ($x = 0; $x < 91; $x++) {
            echo "&nbsp;";
          }
          echo "#2: IMAGE " . $image_id2  . "</h2>";
          
          date_default_timezone_set("America/Los_Angeles");
		      echo "<h4>Image Taken on " . date("F d, Y - H:i:s.", filemtime('./images/image_' . $image_id1 . '.jpg'));
		      for ($x = 0; $x < 105; $x++) {
            echo "&nbsp;";
          }
          echo "Image Taken on " . date("F d, Y - H:i:s.", filemtime('./images/image_' . $image_id2 . '.jpg')) . "</h4>";
          
		      echo "<img src='./images/image_" . $image_id1 . ".jpg';>";
		      for ($x = 0; $x < 30; $x++) {
            echo "&nbsp;";
          }
		      echo "<img src='./images/image_" . $image_id2 . ".jpg';>";
        ?>
        </div>
      </div> 
    </div>
  </div>
</body>

<footer>
  <p>Zheng Lab, Copyright &copy; 2018</p>
</footer>
</html>