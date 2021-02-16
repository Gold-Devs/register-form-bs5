<?php

?>
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="assets/dist/css/signin.css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <!--<p><span class="error">* required field</span></p>-->
    <main class="form-signin"></main>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <img class="mb-4" src="assets/brand/logo.svg" alt="OpenSrc" width="200" height="200">
     <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        <label for="email" class="visually-hidden">Email address</label>
        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="url" name="website" value="<?php echo $website; ?>" class="form-control">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40" class="form-control"><?php echo $comment; ?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female" class="">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male" class="">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other" class="">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit" class="w-100 btn btn-lg btn-primary">
    </form>
    </main>
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

</body>

</html>