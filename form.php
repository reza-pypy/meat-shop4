
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // در اینجا میتوانید دادهها را به پایگاه داده اضافه کنید
    // برای مثال، با استفاده از MySQLi یا PDO

    // مثال: اتصال به پایگاه داده
    $servername = "localhost";
    $db_username = "your_db_username";
    $db_password = "your_db_password";
    $dbname = "your_database_name";

    // ایجاد اتصال
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // بررسی اتصال
    if ($conn->connect_error) {
        die("اتصال ناموفق: " . $conn->connect_error);
    }

    // رمزنگاری گذرواژه
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // افزودن کاربر به پایگاه داده
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "ثبتنام با موفقیت انجام شد!";
    } else {
        echo "خطا در ثبتنام: " . $conn->error;
    }


    $conn->close();
}
?>
