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
    @ $db = new mysqli('localhost', 'f31im', 'f31im', 'f31im');

    $menu=array();

    $query = "SELECT name from menu;";
    $result = $db->query($query);

    if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        array_push($menu, $row['name']);

      }
    }
    // var_dump($menu);



    // var_dump($sales_by_menu);




  ?>





<div id="wrapper">
  <header>
  <img src="javajam.jpg" />
  </header>
  <div id="leftcolumn">
    <nav>
      Daily Sales Report
  	</nav>
  </div>
  <div id="rightcolumn">

    <div class="content clearfix">
      <h2>Sales Quantity By Product Categories</h2>

      <table>
        <tr>
          <th>
            Menu
          </th>
          <th>
            Quantity
          </th>
        </tr>
        <?php
        $arrlength = count($menu);

        for($x = 0; $x < $arrlength; $x++) {
          $query = "SELECT sum(quantity) from transaction where menu = '".$menu[$x]."';";
          $result = $db->query($query);

          if ($result) {
            if ($result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
                if (is_null($row['sum(quantity)'] )){
                  echo '<tr>
                  <td>
                  ' .$menu[$x]. '
                  </td>
                  <td>
                  0
                  </td>
                  </tr>';
                } else {
                  echo '<tr>
                  <td>
                  ' .$menu[$x]. '
                  </td>
                  <td>
                  ' .$row['sum(quantity)']. '
                  </td>
                  </tr>';
                }

              }
            }
          }
        }
         ?>
      </table>

    </div>

  </div>
  <footer>Copyright &copy; 2014 JavaJam Coffee House<br />
    <a href="mailto:dheamariesta@chanjaya.com" target="_blank">dheamariesta@chanjaya.com</a>
  </footer>
</div>
<?php     $db->close(); ?>
</body>
</html>
