# var_dump-


<?php 
    $characters = 
[
  "ELHADJ BAH" => [ "city" =>"Paris",
                  "Weapon"=>"arrow"
              ], 
     
    
    "Negan" =>  [
                 "city" => "The Sanctuary",
                 "weapon" => "Lucille"
                ],
     "Daryl" => [
                  "city" => "Alexandria",
                  "weapon" => "crossbow"
                ],
      "Ezekiel" => [
                     "city" => "The Kingdom",
                     "weapon" => "Shiva"
    ]
];
echo "<pre>";
var_dump($characters);
echo "</pre>";
?>
