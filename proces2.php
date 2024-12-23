
<!-- საკონტაქტო ფორმა 
    ავტორი გურამ ლომაძე -->
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
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);
    $validation_stage = "";

    if (empty($fullname) || empty($email) || empty($phone) || empty($message)) {
        $validation_stage = "empty_fields";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
        $validation_stage = "invalid_name";
    } elseif (!preg_match("/^\+?\d+$/", $phone)) {
        $validation_stage = "invalid_phone";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation_stage = "invalid_email";
    } else {
        $validation_stage = "success";
    }

    // დანაპირები Switch ბლოკი აქ არის გიგა 
    switch ($validation_stage) {
        case "empty_fields":
            include "./component/form_error.php";
            break;

        case "invalid_name":
 
            echo "<body class='boduna'>
            <div class='divuna'>
                <h4>სახელში მხოლოდ ასოები შეიძლება!</h4>
                <a href='index.php'><button class='batuna'>მთავარ გვერდზე დაბრუნება</button></a>
            </div>
        </body>";
            break;

        case "invalid_phone":
          
            echo "<body class='boduna'>
            <div class='divuna'>
                <h4>ტელეფონში მხოლოდ ციფრები და + სიმბოლო უნდა იყოს!</h4>
                <a href='index.php'><button class='batuna'>მთავარ გვერდზე დაბრუნება</button></a>
            </div>
        </body>";
            break;

        case "invalid_email":
      
            echo "<body class='boduna'>
                <div class='divuna'>
                    <h4>გთხოვთ შეიყვანოთ ელ.ფოსტის სწორი ფორმატი!</h4>
                    <a href='index.php'><button class='batuna'>მთავარ გვერდზე დაბრუნება</button></a>
                </div>
            </body>";
            break;

        case "success":
            echo "<body class='boduna'>
                <div class='divuna'>
                    <h4>თქვენი შეტყობინება მიღებულია.</h4>
                    <p>თქვენი მონაცემები:</p>
                    <p>სახელი: " . ($fullname) . "</p>
                    <p>ელ. ფოსტა: " .($email) . "</p>
                    <p>ტელეფონი: " . ($phone) . "</p>
                    <p>შეტყობინება: " . ($message) . "</p>
                    <a href='index.php'><button class='batuna'>მთავარ გვერდზე დაბრუნება</button></a>
                </div>
            </body>";
            break;

        default:
            echo "დაფიქსირდა შეცდომა. გთხოვთ სცადოთ თავიდან.";
            break;
    }
}
?>
<!-- საკონტაქტო ფორმა 
    ავტორი გურამ ლომაძე -->