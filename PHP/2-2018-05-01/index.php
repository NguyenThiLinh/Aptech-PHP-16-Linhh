<!-- 
<?php
//declare variable
// $a = 5;
// $b =6;
//  echo "$b <br>"  ;
//  echo"$a <br>";
//  echo $a + $b;


// // $a = 5;//int 
//  var_dump($a);
//  echo"<br>";
// $b =6.6;// float
//  echo "$b <br>"  ;
//  echo"$a <br>";
//  echo $a + $b;//float
 

 //strings
//  $address ='38 yen bai';
//  echo "<br>$address";

//noi chuoi
//  $so ='5';
//  $tong = '6';
//  echo $so."-". $tong;
//  echo"<br>";
//  echo $so.$tong;
//  echo "<br>";
 
//  //dieu kien

//  $age = 10;
//  if ($age == 20){
//      echo "you are too young !";
//  }
//  else echo "you lie !";




?>
  -->

   //Bai tap data
 <!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th >#</th>
      <th>Type</th>
      <th>Price</th>
      <th>Size</th>
      <th>Ram</th>
      <th>Made in</th>
      <th>Made by</th>
    </tr>
  </thead>
  <tbody> 
    <?php
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];
    foreach ($data as $x=>$x_value){
        echo '<tr>';
        echo '<td scope="row">'.$x.'</td>';
        echo '<td>'.$x_value['type'].'</td>';
        echo '<td>'.$x_value['property']['price'].'</td>';
        echo '<td>'.$x_value['property']['size'].'</td>';
        echo '<td>'.$x_value['property']['ram'].'</td>';
        echo '<td>'.$x_value['property']['made']['in'].'</td>';
        echo '<td>'.$x_value['property']['made']['by'].'</td>';
        echo '</tr>';
    }
?>
  </tbody>
</table>
</body>
</html>