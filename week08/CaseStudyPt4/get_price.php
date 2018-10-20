<?php
  $msg = null;
  @ $db = new mysqli('localhost', 'f31im', 'f31im', 'f31im');

  $query = "SELECT * from menu;";
  $result = $db->query($query);

  if ($result) {
    if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        if ($row["name"] == "Just Java"){
          $just_java = $row["price"];
        } else if ($row["name"] == "Cafe Au Lait Single"){
          $cafe_single = $row["price"];
        } else if ($row["name"] == "Cafe Au Lait Double"){
          $cafe_double = $row["price"];
        } else if ($row ["name"] == "Iced Cappuccino Single"){
          $iced_single = $row["price"];
        } else {
          $iced_double = $row["price"];
        }

      }
    }
  } else {
      echo "An error has occurred.  The item was not added.";
  }

  $db->close();

  $msg = null;
  function editPricePhp(){
    
  }
?>
