<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaJam Coffee House</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="main.css" />
<script src="script.js"></script>
</head>
<body>

<?php
include "get_price.php";
?>

<div id="wrapper">
  <header>
  <img src="javajam.jpg" />
  </header>
  <div id="leftcolumn">
    <nav>
      <a href="index.html">Home</a>
      <a href="menu.php" id="current-page">Menu</a>
      <a href="music.html">Music</a>
      <a href="jobs.html">Jobs</a>
	</nav>
  </div>
  <div id="rightcolumn">

    <div class="content clearfix">
      <h2>Coffee at JavaJam</h2>
      <table align="center">
        <form id="cart_form" action="cart.php" method="POST" >
          <tr>
            <th>
              Menu Name
            </th>
            <th>
              Description
            </th>
            <th>
              Quantity
            </th>
            <th>
              Subtotal ($)
            </th>
          </tr>
          <tr>
            <th>
              Just Java
            </th>
            <td>
              Regular house blend, decaffeinated coffee, or flavor of the day.<br />

              <input type="radio" name="just-java" value="<?php echo $just_java; ?>" onchange="selectedMenu()" checked/>Endless Cup $<?php echo $just_java; ?>


            </td>
            <td>
              <input type="text" name="just-java-quantity" placeholder="Enter Quantity" id="just-java-qty" value=0  onchange="selectedMenu()"/>
            </td>
            <td>
              <input type="text" name="just-java-subtotal" id="just-java-subtotal" value=0 />
            </td>
          </tr>
          <tr>
            <th>
              Cafe au Lait
            </th>
            <td>
              House blended coffee infused into a smooth, steamed milk.<br />

              <input type="radio" name="cafe-au-lait" value="<?php echo $cafe_single; ?>" onchange="selectedMenu()" checked/>
              Single $<?php echo $cafe_single; ?> <br /><input type="radio" name="cafe-au-lait" value="<?php echo $cafe_double ?>"  onchange="selectedMenu()"/>Double $<?php echo $cafe_double ?>


            </td>
            <td>
              <input type="text" name="cafe-au-lait-quantity" placeholder="Enter Quantity" id="cafe-au-lait-qty" value=0 onchange="selectedMenu()" />
            </td>
            <td>
              <input type="text" name="cafe-au-lait-subtotal" id="cafe-au-lait-subtotal" value=0 />
            </td>
          </tr>
          <tr>
            <th>
              Iced Cappuccino
            </th>
            <td>
              Sweetened espresso blended with icy-cold milk and served in a chilled
              <br />

              <input type="radio" name="iced-cappuccino" value="<?php echo $iced_single; ?>" onchange="selectedMenu()" checked/>Single $<?php echo $iced_single; ?><br />
              <input type="radio"  name="iced-cappuccino" value="<?php echo $iced_double;?>" onchange="selectedMenu()"/>Double $<?php echo $iced_double;?>


            </td>
            <td>
              <input type="text" name="iced-quantity" placeholder="Enter Quantity" id="iced-cappuccino-qty" value=0 onchange="selectedMenu()"/>
            </td>
            <td>
              <input type="text" name="iced-subtotal" id="iced-cappuccino-subtotal" value=0 />
            </td>
          </tr>
          <tr>
            <td>

            </td>
            <td>

            </td>
            <td>
              Total Price ($):
            </td>
            <td>
              <input type="text" name="total" id="total" value=0 />
            </td>
          </tr>
          <tr>
            <td>

            </td>
            <td>

            </td>
            <td>
              
            </td>
            <td>
              <input type="submit" />
            </td>
          </tr>
        </form>
      </table>
    </div>

  </div>
  <footer>Copyright &copy; 2014 JavaJam Coffee House<br />
    <a href="mailto:dheamariesta@chanjaya.com" target="_blank">dheamariesta@chanjaya.com</a>
  </footer>
</div>
</body>
</html>
