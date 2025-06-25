<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // აქ შეგიძლია ჩასვა მონაცემების შენახვა ბაზაში

    // დროებითი წარმატების გამოძახება
    header("Location: success.html");
    exit();
} else {
    echo "Შეცდომა: მონაცემები არ მოეწოდა სწორად.";
}
?>
