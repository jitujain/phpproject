<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 2</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        First Name- <input type="text" name="fname" id="first" placeholder="First Name" pattern="[A-Za-z]{1,}" title="Enter correct Name" required><br></br>
        Last Name- <input type="text" name="lname"  id="last" placeholder="Last Name" pattern="[A-Za-z]{1,}" title="Enter correct Name" required><br><br>
        Full Name- <input type="text" name="fullname" id="full_name" disabled><br><br>
        Choose Image- <input type="file" name="file" id="file" required><br><br>
        <input type="submit" name="submit" value="SUBMIT"><br><br>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
    move_file_upload($this->$_FILES['file']['tmp_name'], $this->"./images/" . $file_name;);
    print "<img src='$this->"./images/" . $file_name' 'height=300 width=300'>";<br>
    // Print full name
    echo "Full Name:-" . $_POST['fname'] . " " . $_POST['lname'];
}
?>
</html>