




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



<div class="container px-4">
        <div class="row gx-5">
          <div class="col">
           <div class="p-3  bg-light">
            <a class="list-group-item list-group-item-action text-center" id="list-profile-list" data-bs-toggle="list" href="<?php echo 'employees.php'?>" role="tab" aria-controls="profile">EMPLOYEES</a>
           </div>
          </div>
          <div class="col">
            <div class="p-3  bg-light">
                
                    <a class="list-group-item list-group-item-action text-center" id="list-messages-list" data-bs-toggle="list" href="<?php echo 'projects.php'?>" role="tab" aria-controls="messages">PROJECTS</a>

                </div>
            </div>
          </div>
        </div>
      </div>


      <?php

$arr=[

'petras' => 20,
'andrius' => 50,
'tomas' => 100,
'saulius' => 150
];

// r


   print('<pre>');

   print_r(min($arr));
print_r(max($arr));
print_r(array_search(min($arr),$arr));
print_r(min($arr));
      print('</pre>');

// for($i=0; count($arr);$i++){
   
// };

     

print("<br>");
$array_family = array(
    "mom" => "30",
    "dad" => "35",
    "kid1" => "5",
    "kid2" => "7"
);
print_r($array_family);

// jauniausias
print("<br>");
print "jauniausias seimoje yra : " . array_search(min($array_family), $array_family) . " " ;

// vyriausias
print("<br>");
print "vyriausias seimoje : " . array_search(max($array_family), $array_family) . " " . max($array_family);

// amziaus suma
print("<br>");
print "seimos bendras amzius :" . "\n" . array_sum($array_family) . "\n";

$arr5 = array("Agne" => "59", "Julius" => "80", "Vilius" => "78", "Mila" => "60");
asort($arr5);
foreach($arr5 as $key => $value) {
    print ("$key = $value ");
}


$my_arr10 = array(5,4,6,7,8,9,6,6,7);

// for($i=0;$i<count($my_arr10);$i+=2){
//     echo '<br>';
//     print($my_arr10[$i]);
// }

// $my_arr10 = array(
//     "Mindaugas" => [10, 9, 8, 10],
//     "Maksas" => [9, 8, 8, 5],
//     "Petras" => [10, 9, 8, 9, 5],
//     'andrius' => [5,6,4]
//   );
// echo '<br>';
// for($i=0;$i<count(array_keys($my_arr10));$i+=2){
//    print_r( array_keys($my_arr10)[$i].' ');
//    for($j=0;$j<count($my_arr10[array_keys($my_arr10)[$i]]);$j++){
//        print($my_arr10[array_keys($my_arr10)[$i]][$j]);
// }
// }


//foreach($my_arr10 as $k=>$v){
//     print_r( $k. '  >' );
    
//     foreach($v as $vi){
//         print_r($vi);
//         echo '<br>';
//     }
// }
 
foreach($my_arr10 as $number){
    
   if($number<8){
print_r($number.',') ;
   
   }
}

    ?>






</body>
</html>






