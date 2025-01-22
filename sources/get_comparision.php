<?php
$id = $_POST["phone_id"];
$id1 = $_POST["phone_id_1"];

function decSym($x) {
    if($x!=0)
      return "<span class=\"fa fa-check-circle text-success\"></span> YES ";
    else
      return "<span class=\"fa fa-times-circle text-danger\"></span> NO ";
}



include("DB_connection.php");
$row = $dbhandler->query("select * from phones_details where phone_id = '$id' ")->fetch();
$row1 = $dbhandler->query("select * from phones_details where phone_id = '$id1' ")->fetch();
echo "<table class=\"table table-striped table-dark col-md-8\" border=\"2\" style=\"margin:auto;\">";
echo "<thead>";

    echo "<tr>";
      echo "<th scope=\"col\">#</th>";
      echo "<th scope=\"col\">Specification</th>";
      echo "<th scope=\"col\">Value</th>";
      echo "<th scope=\"col\">Value</th>";
    echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

    echo "<tr>";
      echo "<th scope=\"row\">1</th>";
      echo "<td>Phone ID </td>";
      echo "<td>".$row["phone_id"]."</td>";
      echo "<td>".$row1["phone_id"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">2</th>";
      echo "<td>Brand </td>";
      echo "<td>".$row["company_name"]."</td>";
      echo "<td>".$row1["company_name"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">3</th>";
      echo "<td> Model Name </td>";
      echo "<td>".$row["model_name"]."</td>";
      echo "<td>".$row1["model_name"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">4</th>";
      echo "<td>Price </td>";
      echo "<td>".$row["price"]." rs </td>";
      echo "<td>".$row1["price"]." rs </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">5</th>";
      echo "<td>Overall Rating </td>";
      echo "<td>".$row["rating"]." / 100 </td>";
      echo "<td>".$row1["rating"]." / 100 </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">6</th>";
      echo "<td>Release Date </td>";
      echo "<td>".$row["release_date"]."</td>";
      echo "<td>".$row1["release_date"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">7</th>";
      echo "<td>Dual Sim Capability </td>";
      echo "<td>".decSym($row["dual_sim"])."</td>";
      echo "<td>".decSym($row1["dual_sim"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">8</th>";
      echo "<td>Hybrid Sim Capability </td>";
      echo "<td>".decSym($row["hybrid_sim"])."</td>";
      echo "<td>".decSym($row1["hybrid_sim"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">9</th>";
      echo "<td>Dimensions </td>";
      echo "<td>".$row["dimensions"]." mm </td>";
      echo "<td>".$row1["dimensions"]." mm </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">10</th>";
      echo "<td>Weight</td>";
      echo "<td>".$row["weight"]." gms </td>";
      echo "<td>".$row1["weight"]." gms </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">11</th>";
      echo "<td>Display Type  </td>";
      echo "<td>".$row["display_type"]."</td>";
      echo "<td>".$row1["display_type"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">12</th>";
      echo "<td>Display Size  </td>";
      echo "<td>".$row["display_size"]." inch </td>";
      echo "<td>".$row1["display_size"]." inch </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">13</th>";
      echo "<td>Display Pixel  </td>";
      echo "<td>".$row["display_pixel"]." pixels </td>";
      echo "<td>".$row1["display_pixel"]." pixels </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">14</th>";
      echo "<td>Aspect Ratio  </td>";
      echo "<td>".$row["aspect_ratio"]."</td>";
      echo "<td>".$row1["aspect_ratio"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">15</th>";
      echo "<td>Ram Size  </td>";
      echo "<td>".$row["ram"]." GB </td>";
      echo "<td>".$row1["ram"]." GB </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">16</th>";
      echo "<td>Internal Storage  </td>";
      echo "<td>".$row["internal_storage"]." GB </td>";
      echo "<td>".$row1["internal_storage"]." GB </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">17</th>";
      echo "<td>Card Capability  </td>";
      echo "<td>".$row["card_slot"]."</td>";
      echo "<td>".$row1["card_slot"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">18</th>";
      echo "<td>GPRS Capabilities  </td>";
      echo "<td>".decSym($row["gprs"])."</td>";
      echo "<td>".decSym($row1["gprs"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">19</th>";
      echo "<td>2g Capabilities  </td>";
      echo "<td>".decSym($row["is2g"])."</td>";
      echo "<td>".decSym($row1["is2g"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">20</th>";
      echo "<td>3g Capabilities</td>";
      echo "<td>".decSym($row["is3g"])."</td>";
      echo "<td>".decSym($row1["is3g"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">21</th>";
      echo "<td>4g Capabilities  </td>";
      echo "<td>".decSym($row["is4g"])."</td>";
      echo "<td>".decSym($row1["is4g"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">22</th>";
      echo "<td>Volte Capabilities  </td>";
      echo "<td>".decSym($row["volte"])."</td>";
      echo "<td>".decSym($row1["volte"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">23</th>";
      echo "<td>Wifi Capabilities  </td>";
      echo "<td>".decSym($row["wifi"])."</td>";
      echo "<td>".decSym($row1["wifi"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">24</th>";
      echo "<td>Bluetooth Capabilities  </td>";
      echo "<td>".decSym($row["bluetooth"])."</td>";
      echo "<td>".decSym($row1["bluetooth"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">25</th>";
      echo "<td>IR Capabilities  </td>";
      echo "<td>".decSym($row["ir"])."</td>";
      echo "<td>".decSym($row1["ir"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">26</th>";
      echo "<td>Fingerprint Capabilities  </td>";
      echo "<td>".decSym($row["fingerprint"])."</td>";
      echo "<td>".decSym($row1["fingerprint"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">27</th>";
      echo "<td>Sensors  </td>";
      echo "<td>".$row["sensors"]."</td>";
      echo "<td>".$row1["sensors"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">28</th>";
      echo "<td>3.5mm Headphone Jack Capabilities</td>";
      echo "<td>".decSym($row["has35mm"])."</td>";
      echo "<td>".decSym($row1["has35mm"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">29</th>";
      echo "<td>Front Camera  </td>";
      echo "<td>".$row["front_camera"]." MP </td>";
      echo "<td>".$row1["front_camera"]." MP </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">30</th>";
      echo "<td>Back Camera  </td>";
      echo "<td>".$row["back_camera"]." MP </td>";
      echo "<td>".$row1["back_camera"]." MP </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">31</th>";
      echo "<td>Operating System</td>";
      echo "<td>".$row["os"]."</td>";
      echo "<td>".$row1["os"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">32</th>";
      echo "<td>CPU  </td>";
      echo "<td>".$row["cpu"]."</td>";
      echo "<td>".$row1["cpu"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">33</th>";
      echo "<td>Core Details  </td>";
      echo "<td>".$row["core_details"]."</td>";
      echo "<td>".$row1["core_details"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">34</th>";
      echo "<td>GPU  </td>";
      echo "<td>".$row["gpu"]."</td>";
      echo "<td>".$row1["gpu"]."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">35</th>";
      echo "<td>Java Support  </td>";
      echo "<td>".decSym($row["java"])."</td>";
      echo "<td>".decSym($row1["java"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">36</th>";
      echo "<td>Removable Battery Capabilities  </td>";
      echo "<td>".decSym($row["battery_removable"])."</td>";
      echo "<td>".decSym($row1["battery_removable"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">37</th>";
      echo "<td>Battery Capacity  </td>";
      echo "<td>".$row["battery_size"]." Mah </td>";
      echo "<td>".$row1["battery_size"]." Mah </td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">38</th>";
      echo "<td>Fast Charging Support  </td>";
      echo "<td>".decSym($row["fast_charging"])."</td>";
      echo "<td>".decSym($row1["fast_charging"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">39</th>";
      echo "<td>Front Flash Support  </td>";
      echo "<td>".decSym($row["front_flash"])."</td>";
      echo "<td>".decSym($row1["front_flash"])."</td>";
    echo "</tr>";

    echo "<tr>";
      echo "<th scope=\"row\">40</th>";
      echo "<td>Rear Flash Support  </td>";
      echo "<td>".decSym($row["back_flash"])."</td>";
      echo "<td>".decSym($row1["back_flash"])."</td>";
    echo "</tr>";

  echo "</tbody>";
echo "</table>";
?>
