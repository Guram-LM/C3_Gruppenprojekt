<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thank You</title>
</head>

<?php
// proces2-ის გვერდი
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // მიღება ფორმიდან
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // ვალიდაცია: ყველა ველი უნდა იყოს შევსებული
    if (empty($fullname) || empty($email) || empty($phone) || empty($message)) {
 
        include "./component/form_error.php";
    }
    // ვალიდაცია: სახელის ველი მხოლოდ ასოები
    elseif (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
        echo "სახელში მხოლოდ ასოები შეიძლება!";
    }
    // ვალიდაცია: ტელეფონი მხოლოდ ციფრები და + სიმბოლო
    elseif (!preg_match("/^\+?\d+$/", $phone)) {
        echo "ტელეფონში მხოლოდ ციფრები და + სიმბოლო უნდა იყოს!";
    }
    // ვალიდაცია: ელფოსტა
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "გთხოვთ შეიყვანოთ ელ.ფოსტის სწორი ფორმატი!";
    }
    else {
        echo "<body class='boduna'>
     <div class='divuna'>
        <h4>თქვენი შეტყობინება მიღებულია.</h4>
        <p>თქვენი მონაცემები:</p>
        <p>სახელი: $fullname</p>
        <p>ელ. ფოსტა: $email</p>
        <p>ტელეფონი: $phone</p>
        <p>შეტყობინება: $message</p>
        <a href='index.php'><button class='batuna'>მთავარ გვერდზე დაბრუნება</button></a>
    </div>
    </body>";



       
    }
}
?>