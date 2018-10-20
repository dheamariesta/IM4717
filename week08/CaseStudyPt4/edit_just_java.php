
<?php

  @ $db = new mysqli('localhost', 'f31im', 'f31im', 'f31im');

  // var_dump($_POST['name']) ;
  foreach ($_POST['name'] as $key => $value) {
    $name=$_POST['name'][$key]; // make something with it
    $price=$_POST['price'][$key];  // it will get the same index $key
    if (!get_magic_quotes_gpc()) {
      $name = addslashes($name);
      $price = doubleval($price);
    }





    $query = "UPDATE menu SET price = '".$price."' where name = '".$name."'";
    $result = $db->query($query);

    // if (!$result) {
    //     header ("Location:admin.php");
    // } else {
    //     echo "An error has occurred.  The item was not added.";
    // }


  }
  $db->close();

  header("Location:admin.php");
// create short variable names
// $name=$_POST['name'];
// $price=$_POST['price'];

?>
