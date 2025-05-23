
<?php
// save_sms.php
// This script saves the SMS data to a text file
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $date    = date("Y-m-d H:i:s");

    $log = "[$date] Name: $name | Email: $email | Subject: $subject | Message: $message" . PHP_EOL;

    file_put_contents("./sms_log.txt", $log, FILE_APPEND | LOCK_EX);

    // Redirect or show a success message
    header("Location: index.html?success=1");
    exit();
}
?>