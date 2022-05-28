<?php

extract($_REQUEST);//Requesting to extract the input
$file=fopen("userdata.csv", "w");//opens the file to write ONLY

fwrite($file, "Name: ");
fwrite($file, $name . "\n");//Takes the inputted info on name input

fwrite($file, "Email: ");
fwrite($file, $email . "\n");//Takes the inputted info on email input

fwrite($file, "Date_Of_Birth: ");
fwrite($file, $dob . "\n");//Takes the inputted info on dob input

fwrite($file, "Gender: ");
fwrite($file, $gender . "\n");//Takes the inputted info on gender input

fwrite($file, "Country: ");
fwrite($file, $country . "\n");//Takes the inputted info on country input
fclose($file);

$csv = array_map('str_getcsv', file('userdata.csv'));
echo '<pre>';
print_r($csv);
echo '</pre>';

?>

