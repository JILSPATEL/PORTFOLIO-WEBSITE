<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $adr = $_POST['adr'];
    $doc = $_POST['doc'];

    $conn = mysqli_connect("localhost", "root", "", "portfolio_db");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO contect (first_name, last_name, email, dob, gender, address, id_proof)
                VALUES ('$fname', '$lname', '$email', '$date', '$gender', '$adr', '$doc')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Inserted Successfully')</script>";
        
        ?>

        <meta http-equiv="refresh" content="0; URL=http://localhost/PhpProject1/PORTFOLIO_WEBSITE/contectme.html" />
        
        <?php
    } else {
        echo "<script>alert('Something went wrong: " . mysqli_error($conn) . "')</script>";
    }

    mysqli_close($conn);
}
?>
