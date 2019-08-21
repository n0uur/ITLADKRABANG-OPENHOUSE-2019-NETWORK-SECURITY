<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
  <div class="container-fluid">
    <div class="header">
      <h1>Album</h1>
    </div>
    
    <div class="container album">
      <div class="row">
      <?php
        if ($dir = opendir("./uploads/")) {
          $img_item = array();
          $counter = 0;
          while (($file = readdir($dir)) !== false) {
            if ($file == '.' || $file == '..') {
              continue;
            }

            array_push($img_item, $file);
          }

          shuffle($img_item);
          $section = array("<div class='col'>", "<div class='col'>", "<div class='col'>");
          foreach ($img_item as $v) {
            $section[$counter%3] = $section[$counter%3]."<img src='./assets/loading.gif' data-src='./uploads/$v' class='lazy' alt='K-Pop Image'>";
            $counter++;
          }
          
          foreach ($section as $value) {
            echo $value."</div>";
          }
        }
      ?>
      </div>
    </div>

    <div class="container-fluid nav">
      <a href="./upload.php">Upload Picture</a>
    </div>
  </div>
  

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="./assets/js/jquery.lazy-master/jquery.lazy.min.js"></script>
    <script src="./assets/js/jquery.lazy-master/jquery.lazy.plugins.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>
</html>