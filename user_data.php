<?php

if(isset($_POST["submit"]))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    
    $form_data = [$name, $email, $dob, $gender, $country 
    ];
    
    $filename = 'userdata.csv';
    $file = fopen($filename, 'a');
    fputcsv($file, $form_data );
    fclose($file);


    print_r($form_data);

}

?>