<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 5</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
        input[type="number"]{
            border:none;
            outline:none;
        }
    </style>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        First Name- <input type="text" name="fname" id="first" placeholder="First Name" pattern="[A-Za-z]{1,}" title="Enter correct Name" required><br></br>
        Last Name- <input type="text" name="lname"  id="last" placeholder="Last Name" pattern="[A-Za-z]{1,}" title="Enter correct Name" required><br><br>
        Full Name- <input type="text" name="fullname" id="full_name" disabled><br><br>
        Choose Image- <input type="file" name="file" id="file" required><br><br>
        <textarea name="stud_mark" cols="40" rows="15" placeholder="Information format:- Subject|Marks"></textarea><br><br>
        Contact NUmber- <input type="tel" maxlength="10" name="tel" id="tel" value="+91 "  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  title="Enter an Indian number">
        Email ID- <input type="text" name="mail" class="mail">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
<script>
    $(document).ready(function(){
        var first = $("#first").val();
        var last = $("#last").val();
        $("#full_name").val(first+" "+last);
    })
</script>
<?php
if(isset($_POST('submit'))){
    // Upload and Print image
    $file_name = $_FILES['file']['name'];
    move_uploaded_file($this->$_FILES['file']['tmp_name'], $this->"./images/" . $file_name;);
    print "<img src='$this->"./images/" . $file_name' 'height=300 width=300'>";<br>
    // Print full name
    echo "Full Name:-" . $_POST['fname'] . " " . $_POST['lname'];
    // Marks as per Student
    $students_info = explode("\n", $_POST['marks']);
    $s_no = 1;
    echo "<table border='1'>";
    echo "<tr>
        <th>S.No.</th>
        <th>Subject</th>
        <th>Marks</th>
        </tr>";
    foreach ($students_info as $info) {
        $name=strpos($info, "|");
        $info[substr($info,0,$name)] = substr($info,$name+1);
    }
    foreach ($info as $key => $value) {
        echo "<tr>
            <td>$s_no</td>
            <td>$key</td>
            <td>$value</td>
            </tr>";
    }
    echo "<br>";
    $emailError = "";
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["mail"])) {
        $emailError = "Email is required";
        } else {
        $email = test_input($_POST["mail"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
        }
    }
    if ($emailError == "") {
        echo $_POST["email"];
      }
}
?>
</html>