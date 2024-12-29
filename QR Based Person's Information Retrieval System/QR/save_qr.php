<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the necessary data is received
if (isset($_POST['qrContent']) && isset($_POST['username'])) {
    // Assign received data to variables
    $qrBase64 = $_POST['qrContent'];
    $uname = $_POST['username'];

    // Database connection
    $con = new mysqli("localhost", "root", "", "DATABASE");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    }

    // Prepare and execute SQL statement to update QR code
    $sql = "UPDATE `userd` SET `qr_hash` = ? WHERE `userd`.`username` = ?";
    $stmt = $con->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ss", $qrBase64, $uname);

        if ($stmt->execute()) {
            echo "QR code saved successfully";
        } else {
            echo "Error saving QR code: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }

    $con->close();
} else {
    echo "Required data not received";
    if (ini_get('allow_url_fopen')) {
        echo 'allow_url_fopen is enabled';
    } else {
        echo 'allow_url_fopen is disabled';
    }
}
?>
