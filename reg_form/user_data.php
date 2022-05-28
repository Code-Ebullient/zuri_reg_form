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


//print_r (file_get_contents("userdata.csv"));
$file_to_read = fopen('userdata.csv', 'r');
 
if($file_to_read !== FALSE){
     
    echo "<table>\n";
    while(($data = fgetcsv($file_to_read, 100, ',')) !== FALSE){
        echo "<tr>";
        for($i = 0; $i < count($data); $i++) {
            echo "<td>".$data[$i]."</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
 
    fclose($file_to_read);
}


?>

