<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  
  </head>
  <body>
           <div id="dropdowns">
        <div id="center" class="cascade">
        <?php
        include 'config.php';
        $sql = "SELECT * FROM country ORDER BY name";
        $query = mysqli_query($conn, $sql);
        ?>
        <label>Country:
        <select name="country" id = "drop1">
        <option value="">Please Select</option>
        <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC )) { ?>
        <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></option>
        <?php } ?>
        </select>
        </label>
        </div>
        <div class="cascade" id="state"></div>
        <div id="city" class="cascade"></div>
        </div>
        <p style="text-align: justify;">
  </body>
</html>