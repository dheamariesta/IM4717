<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaJam Coffee House</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="main.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      Product Page Update
  	</nav>
  </div>
  <div id="rightcolumn">

    <div class="content clearfix">
      <h2>Coffee at JavaJam</h2>

      <table align="center">
        <form id="jsform" action="edit_just_java.php" method="POST">
          <tr>
            <th>

            </th>
            <th>
              Menu Name
            </th>
            <th>
              Description
            </th>

          </tr>
          <tr>


              <th>
                <input type="checkbox" name="edit-just-java"  id="edit-just-java" onchange="editJustJava()"/>
              </th>
              <th>
                Just Java
                <input type="hidden" name="name[]" value="Just Java" />
              </th>
              <td>
                Regular house blend, decaffeinated coffee, or flavor of the day.<br />

                <input type="hidden" id="hidden-price" name="price[]" value="<?php
                echo $just_java;
                ?>" />

                Endless Cup $<div class="edit" id="just-java-price">
                  <?php
                  echo $just_java;
                  ?></div>

              </td>
              <span id="error"></span>
          </tr>
          <tr>
            <!-- <form id="cafeform" target="edit_just_java.php" method="POST"> -->
              <th>
                <input type="checkbox" id="edit-cafe-au-lait" onchange="editCafeAuLaitPrice()"/>
              </th>
              <th>
                Cafe au Lait

              </th>
              <td>

                  House blended coffee infused into a smooth, steamed milk.<br />
                  Single
                  <input type="hidden" name="name[]" value="Cafe Au Lait Single" />
                  <input type="hidden" id="cafe_single_price" name="price[]" value="<?php echo $cafe_single; ?>"/>
                   $<div class="edit" id="cafe-au-lait-single-price">
                    <?php
                    echo $cafe_single;
                    ?>
                  </div>

                  <br />
                  Double
                  <input type="hidden" name="name[]" value="Cafe Au Lait Double" />
                  <input type="hidden" id="cafe_double_price" name="price[]" value="<?php echo $cafe_double; ?>" />
                   $<div class="edit" id="cafe-au-lait-double-price">
                    <?php
                    echo $cafe_double;
                    ?></div>






              </td>
            <!-- </form> -->
          </tr>
          <tr>
            <th>
              <input type="checkbox" id="edit-cappuccino" onchange="editIcedCappuccinoPrice()"/>
            </th>
            <th>
              Iced Cappuccino
            </th>
            <td>
              Sweetened espresso blended with icy-cold milk and served in a chilled
              <br />
              Single
              <input type="hidden" name="name[]" value="Iced Cappuccino Single" />
              <input type="hidden" id="iced_single_price" name="price[]" value="<?php echo $iced_single; ?>"/>

               $<div class="edit" id="cappuccino-single-price">
                <?php
                echo $iced_single;
                ?>
              </div>
              <br />


              Double
              <input type="hidden" name="name[]" value="Iced Cappuccino Double" />
              <input type="hidden" id="iced_double_price" name="price[]" value="<?php echo $iced_double; ?>" />

               $<div class="edit" id="cappuccino-double-price">
                <?php
                echo $iced_double;
                ?>
              </div>


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
