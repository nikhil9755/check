<?php 
$names = ["Aman", "Ashok","Bhumi", "rahul", "disha", "kevin", "aashish", "neha", "vishal", "kamal", "bharat", "chetan", "kishan"];

foreach($names as $name) {
    $first = substr($name, 0, 1);
    $temp_names[$first][] = $name;
}
echo "<pre>";
print_r($temp_names);

?>