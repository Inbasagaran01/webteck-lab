<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Phone Number, Name, and Text File Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="userentry.php" method="post">
   
        <label for="s_name">Name:</label>
        <input type="text" id="s_name" name="s_name" oninput="convertToUppercase(this)" required>

        <label for="reg">Reg No:</label>
        <input type="number" id="reg" name="reg" required>

        <label for="DOB"> Date of Birth:</label>
        <input type="date" id="DOB" name="DOB" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter 10 digit number"  oninput="phonenovalidate(this)" required>


        <label for="email">EMAIL :</label>
        <input type="email" id="email" name="email" oninput="emailvalidate(this)" required>
        
        <label for="CV">Text File:</label>
        <input type="file" id="CV" name="CV" accept=".pdf" required>

        <input type="submit" value="Submit">
    </form>
<script src="validation.js"></script>

</body>
</html>
