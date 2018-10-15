<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // create short variable names
      $name=$_POST['name'];
      $price=$_POST['price'];

      if (!$menu || !$price) {
         echo "You have not entered all the required details.<br />"
              ."Please go back and try again.";
         exit;
      }

      if (!get_magic_quotes_gpc()) {
        $menu = addslashes($menu);
        $price = doubleval($price);
      }

      @ $db = new mysqli('localhost', 'f31im', 'f31im', 'f31im');

      if (mysqli_connect_errno()) {
         echo "Error: Could not connect to database.  Please try again later.";
         exit;
      }

      $query = "insert into menu values
                ('".$name."', '".$price."')";
      $result = $db->query($query);

      if ($result) {
          echo  $db->affected_rows." book inserted into database.";
      } else {
      	  echo "An error has occurred.  The item was not added.";
      }

      $db->close();
    ?>


  </body>
</html>
