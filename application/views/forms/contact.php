<!-- <?php

include 'config/database.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Create a connection
    $mysqli = new mysqli($db['default']['hostname'], $db['default']['username'], $db['default']['password'], $db['default']['database']);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Retrieve and sanitize form data
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $subject = $mysqli->real_escape_string($_POST['subject']);
    $message = $mysqli->real_escape_string($_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($mysqli->query($sql) === TRUE) {
        // Send email notification
        $to = 'muktabhosale3@gmail.com'; // Replace with your email address
        $subject_email = "New Contact Form Submission: $subject";
        $message_email = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject_email, $message_email, $headers)) {
            echo "OK";
        } else {
            echo "Error: Unable to send email.";
        }
    } else {
        echo "Error: " . $mysqli->error;
    }

    $mysqli->close();
}
?> -->
