<html>
    <head></head>
    <body>

    Your order has been submitted
    <?php
    // var_dump($_POST);

    @ $db = new mysqli('localhost', 'f31im', 'f31im', 'f31im');

    $just_java_price = $_POST['just-java'];
    $just_java_quantity = $_POST['just-java-quantity'];
    $just_java_subtotal = $_POST['just-java-subtotal'];

    $cafe_au_lait_price = $_POST['cafe-au-lait'];
    $cafe_au_lait_quantity = $_POST['cafe-au-lait-quantity'];
    $cafe_au_lait_subtotal = $_POST['cafe-au-lait-subtotal'];

    $iced_price = $_POST['iced-cappuccino'];
    $iced_quantity = $_POST['iced-quantity'];
    $iced_subtotal = $_POST['iced-subtotal'];

    $total = $_POST['total'];  
    
    //CHECK WHICH CAFE AU LAIT IS SELECTED
    $cafe_name = "";
    $query = "SELECT name FROM menu WHERE name LIKE 'Cafe Au Lait%' and price = $cafe_au_lait_price;";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $cafe_name = $row['name'];
        }
    } else {
        echo "0 results";
    }

    //CHECK WHICH ICED CAPPUCCINO IS SELECTED

    $iced_name = "";
    $query = "SELECT name FROM menu WHERE name LIKE 'Iced Cappuccino%' and price = $iced_price;";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $iced_name = $row['name'];
        }
    } else {
        echo "0 results";
    }

    $query = "INSERT INTO sales (total) VALUES ('".$total."');";
    $result = $db->query($query);

    if ($result) {
        $last_id = $db->insert_id;
        $query1 = "INSERT INTO transaction(id, menu, price, quantity, subtotal) VALUES ($last_id, 'Just Java', $just_java_price, $just_java_quantity, $just_java_subtotal);";
        $db->query($query1);

        $query2 = "INSERT INTO transaction(id, menu, price, quantity, subtotal) VALUES ($last_id, '".$cafe_name."', $cafe_au_lait_price, $cafe_au_lait_quantity, $cafe_au_lait_subtotal);";
        $db->query($query2);

        $query3 = "INSERT INTO transaction(id, menu, price, quantity, subtotal) VALUES ($last_id, '".$iced_name."', $iced_price, $iced_quantity, $iced_subtotal);";
        $db->query($query3);

    } 

    $db->close();

    
?>
    </body>
</html>



