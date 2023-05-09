<?php
session_start();

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// echo 'csrf_token from form: ' . $_POST['csrf_token'] . '<br>';
// echo 'csrf_token from session: ' . $_SESSION['csrf_token'] . '<br>';

// Check CSRF token
if (
    isset($_POST['csrf_token']) &&
    $_POST['csrf_token'] === $_SESSION['csrf_token']
) {
    // CSRF token is valid, process form data
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $errors = [];

    function test_input($data)
    {
        // Trim whitespace, remove slashes, and convert special characters
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validate name field
    if (empty($_POST['firstname'])) {
        $errors[] = 'Name is required.';
    } else {
        $name = test_input($_POST['firstname']);
        if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
            $errors[] = 'Only letters and white space allowed in name.';
        }
    }

    // Validate last name field
    if (empty($_POST['lastname'])) {
        $errors[] = 'Last name is required.';
    } else {
        $lastname = test_input($_POST['lastname']);
        if (!preg_match('/^[a-zA-Z ]*$/', $lastname)) {
            $errors[] = 'Only letters and white space allowed in last name.';
        }
    }

    // Validate company field
    if (empty($_POST['company'])) {
        $errors[] = 'Company is required.';
    } else {
        $company = test_input($_POST['company']);
        if (!preg_match('/^[a-zA-Z ]*$/', $lastname)) {
            $errors[] = 'Only letters and white space allowed in company.';
        }
    }

    // Validate email field
    if (empty($_POST['email'])) {
        $errors[] = 'Email is required.';
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format.';
        }
    }

    // Validate message field
    if (empty($_POST['message'])) {
        $errors[] = 'Message is required.';
    } else {
        $message = test_input($_POST['message']);
    }

    // Check if there are any errors
    if (count($errors) > 0) {
        // Output error messages
        foreach ($errors as $error) {
            $_SESSION['message'] = $error;
            header('Location: index.php');
            exit();
            //echo '<script>alert("Security: An error occured, support will be notified.");</script>';
        }
    } else {
        // Send email
        $to = 'connect@leikur.com';
        $subject = "New form submission from Leikur's website";
        $body = "Name: $name\nLast Name: $lastname\nCompany: $company\nEmail: $email\nMessage: $message";

        // Send email
        if (mail($to, $subject, $body)) {
            // Email sent successfully
            $_SESSION['message'] = 'Message sent successfully!';
            header('Location: index.php');
            exit();
            //echo '<script>alert("Message sent successfully!");</script>';
        } else {
            // Error sending email
            $_SESSION['message'] =
                'Error sending message. Please try again later.';
            header('Location: index.php');
            exit();
            //echo '<script>alert("Error sending message. Please try again later.");</script>';
        }
    }
} else {
    // CSRF token is invalid, display error message or redirect to error page
    $_SESSION['message'] = 'Error! Support has been notified.';
    header('Location: index.php');
    exit();
    //echo '<script>alert("Error! sending message. Please try again later.");</script>';
}
?>

