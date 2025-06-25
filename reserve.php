<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guest = htmlspecialchars($_POST['guest']);
    $date = htmlspecialchars($_POST['date']);
    $people = htmlspecialchars($_POST['people']);
    
    // აქ შეგიძლია ჩასვა მონაცემების შენახვა ბაზაში

    // დროებითი წარმატების გამოძახება
    header("Location: success.html");
    exit();
} else {
    echo "Შეცდომა: მონაცემები არ მოეწოდა სწორად.";
}
?>
