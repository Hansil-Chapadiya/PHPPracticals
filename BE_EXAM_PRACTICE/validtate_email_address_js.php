<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Enter Email Address:
    <input type="text" id='email'>
    <br><br>
    Enter Phone:
    <input type="text" id='pnumber'>
    <br><br>
    <button onclick="validateEmail()">Check</button>
    <script>
        function validateEmail() {
            let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let pattern_phone = /^[0-9]{10}$/;
            if (pattern.test(document.getElementById('email').value) || pattern_phone.test(document.getElementById('pnumber').value)) {
                alert('AwesomeEmailORPHONE');
            } else {
                alert('Invalid email or phone');
            }
        }
    </script>
</body>

</html>