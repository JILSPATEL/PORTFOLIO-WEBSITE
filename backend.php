<?php
<?php
// Check if the form is submitted
    // Retrieve form data
    $myName = $_POST["MyName"];
    $coName = $_POST["CoName"];
    $myEmail = $_POST["MyEmail"];
    $myMobile = $_POST["Mymobile"];
    $myDate = $_POST["MyDate"];
    $myGender = $_POST["MyGender"];
    $myText = $_POST["MyText"];

    $conn = new mysqli('localhost','root','','portfolio_db');
    if($conn->connect_error){
        die('connection failed :'+$conn->connect_error);
}
else{
    $stmy=$conn->prepare("insert into contect(name,company,email,mobile,dob,gender,text) values(?,?,?,?,?,?,?)");
    $stmy->bind_param("sssiiss",$myName,$coName,$myEmail, $myMobile,$myDate,$myGender,$myText);
    $stmy->execute();
    echo"register successfully";
    $stmy->close();
    $conn->close();
}

?>


?>