<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let string = "JAVASCRIPT";
        console.log("\nSUBSTRING METHOD\n");
        let result = string.substring(1,5);
        console.log(result);
        result = string.substring(9,2);
        console.log(result);
        console.log("\nSLICE METHOD\n");
        result = string.slice(1,5);
        console.log(result);
        result = string.slice(6,-1);
        console.log(result);
        result = string.slice(-1,-7);
        console.log(result);
        console.log("\nCHARAT METHOD\n");
        result = string.charAt(-6);
        console.log(result);
        result = string.charAt(7);
        console.log(result);
    </script>
</body>
</html>