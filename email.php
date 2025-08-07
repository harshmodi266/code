    <?php
function validateEmail($email) {
    $pattern = "/^[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{2,}$/";
    if (preg_match($pattern, $email)) {
        return "$email is a valid email address";
    } else {
        return "$email is not a valid email address";
    }
}

$email = "harshmodi266@gmail.com";
echo validateEmail($email); // Outputs: user@example.com is a valid email address
?>
