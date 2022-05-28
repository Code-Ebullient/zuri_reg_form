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


print_r (file_get_contents("userdata.csv"));




// $name = $_POST ['name'];
// $email = $_POST ['email'];
// $dob = $_POST ['dob'];
// $gender = $_POST ['gender'];
// $country = $_POST ['country'];

// echo "Name: " . $name . "<br>";
// echo "Email: " . $email . "<br>";
// echo "Date_Of_Birth: " . $dob . "<br>";
// echo "Gender: " . $gender . "<br>";
// echo "Country: " . $country ;

// $filename = "./userdata.csv";
// $detail = fopen($filename, 'r+'); //opens the file in read mode
// $contents = fread($detail, filesize($filename)); //read the open file

// print_r($contents);// Prints the content of the file with an index
// fclose($detail);//Close the file


// $json = file_get_contents("userdata.csv");//Reads JSON file

// $json_data = json_decode($json, true);//Decode JSON file

// print_r($json_data);//Prints JSON data

// if(isset($_POST['submit'])){
//     $name = "Name: ".$_POST['name']." ";
//     $email = "Email: ".$_POST['email']." ";
//     $dob = "Date_Of_Birth: ".$_POST['dob']." ";
//     $gender = "Gender: ".$_POST['gender']." ";
//     $country = "Country: ".$_POST['country']." ";

//     //$filename = "./userdata.csv";
//     $file=fopen("file.txt", "a");
//     fwrite($file, $name);
//     fwrite($file, $email);
//     fwrite($file, $dob);
//     fwrite($file, $gender);
//     fwrite($file, $country);
//     fclose($file);
// }

?>

