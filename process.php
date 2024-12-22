<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/new_style.css">
    <title>Thank You</title>
</head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $patient_name = trim($_POST['patient_name']);
    $doctor_name = trim($_POST['doctor_name']);
    $department_name = trim($_POST['department_name']);
    $phone = trim($_POST['phone']);
    $symptoms = trim($_POST['symptoms']);
    $appointment_date = trim($_POST['appointment_date']);

    
    if (empty($patient_name) || empty($doctor_name) || empty($department_name) || empty($phone) || empty($symptoms) || empty($appointment_date)) {
        
        include "./component/form_error.php";
  
    } else {
       
        echo "
      <body class='boduna'>
     <div class='divuna'>
        <h4>თქვენი ჯავშანი წარმატებით მიღებულია!</h4>
        <p>პაციენტის სახელი: $patient_name</p>
        <p>დოქტორი: $doctor_name</p>
        <p>დეპარტამენტი: $department_name</p>
        <p>ტელეფონი: $phone</p>
        <p>სიმპტომები: $symptoms</p>
        <p>ჯავშნის თარიღი: $appointment_date</p>
        <a href='index.php'><button class='batuna'>მთავარ გვერდზე დაბრუნება</button></a>
    </div>
    </body>";
    }
} else {
    echo "გთხოვთ გამოიყენოთ ფორმა!";
}

?>