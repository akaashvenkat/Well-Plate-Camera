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
            <li class="current"><a href="index.php">View Images</a></li>
            <li><a href="./compare.php">Compare Images</a></li>
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
              <div class="form-group"><label for="imageid">Select Image:</label>
              <?php 
                for($x = 0; $x < 4; $x++) {
                  echo "&nbsp;";
                } 
              ?>  
              <select class="form-control" name='imageid'><option value=NULL></option>
                <?php
                  $count = count(glob("./images/" . "*"));
	                for ($img_id = 1; $img_id <= $count; $img_id++) {
					          if ($img_id < 10) {
                      $img_id = sprintf("%03d",$img_id);
                    }
					          else if ($img_id < 100) {
                      $img_id = sprintf("%03d",$img_id);
                    }
                    echo "<option value=" . $img_id . ">Image " . $img_id . "</option>";
			            }
                ?>
              </select>
              </select>
              </select>

              <?php 
                for($x = 0; $x < 7; $x++) {
                  echo "&nbsp;";
                } 
              ?>
              <button class="button_1" type="submit">View</button>
            </form>
          </div>

        <?php
          if (!isset($_GET["imageid"])) {
            for($x = 0; $x < 4; $x++) {
              echo "</div>";
            } 
            echo "</body>";
            for ($x = 0; $x < 20; $x++) {
		          echo "&nbsp</br>";   
		        }
            echo "<footer><p>Zheng Lab, Copyright &copy; 2018</p></footer>";
            exit(0);
          }

          $image_id = $_GET['imageid'];
          echo "&nbsp</br>"; 
          echo "<h2>IMAGE " . $image_id  . "</h2>";

		      date_default_timezone_set("America/Los_Angeles");
          $file_path = './images/image_' . $image_id . '.jpg';
          
          echo "<h4>Image Taken on " . date("F d, Y - H:i:s.", filemtime($file_path)) . "</h4>";
          echo "<img src='" . $file_path . "'/>";
		    ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</body>

<footer>
  <p>Zheng Lab, Copyright &copy; 2018</p>
</footer>
</html>