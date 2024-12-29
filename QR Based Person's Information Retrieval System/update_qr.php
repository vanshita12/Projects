<?php
// Check if the QR content is received
if(isset($_POST['qrContent'])) {
    $qrContent = $_POST['qrContent'];

    // Generate QR code image
    $qrCodeImage = file_get_contents("https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=$qrContent");

    // Database connection
    $con = new mysqli("localhost", "root", "", "DATABASE");
    if($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } 
    else {
        $sql = "UPDATE `userd` SET `qrhash` = ?";

        $stmt = $con->prepare($sql);
        if($stmt) {
            $stmt->bind_param("b", $qrCodeImage);

            if($stmt->execute()) {
                echo "QR code image updated successfully";
            } 
            else {
                echo "Error updating QR code image: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } 
        else {
            echo "Error: " . $con->error;
        }

        // Close the connection
        $con->close();
    }
} 
else {
    echo "QR content not received";
}
?>
