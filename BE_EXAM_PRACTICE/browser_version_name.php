<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser Detection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .info-box {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <h1>Browser Detection Page</h1>
    <p>This page will detect your browser name and version.</p>
    <div class="info-box">
        <strong>Your Browser Information:</strong>
        <p id="browserInfo"></p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const userAgent = navigator.userAgent;

            // Detect browser name and version
            let browserName = "Unknown Browser";
            let browserVersion = "Unknown Version";

            if (userAgent.includes("Chrome") && !userAgent.includes("Edge")) {
                browserName = "Google Chrome";
                browserVersion = userAgent.match(/Chrome\/(\d+\.\d+\.\d+\.\d+)/)?.[1] || "Unknown";
            } else if (userAgent.includes("Firefox")) {
                browserName = "Mozilla Firefox";
                browserVersion = userAgent.match(/Firefox\/(\d+\.\d+)/)?.[1] || "Unknown";
            } else if (userAgent.includes("Safari") && !userAgent.includes("Chrome")) {
                browserName = "Safari";
                browserVersion = userAgent.match(/Version\/(\d+\.\d+)/)?.[1] || "Unknown";
            } else if (userAgent.includes("Edge")) {
                browserName = "Microsoft Edge";
                browserVersion = userAgent.match(/Edg\/(\d+\.\d+)/)?.[1] || "Unknown";
            } else if (userAgent.includes("Trident")) {
                browserName = "Internet Explorer";
                browserVersion = userAgent.match(/rv:(\d+\.\d+)/)?.[1] || "Unknown";
            }

            // Display the information
            const browserInfoElement = document.getElementById("browserInfo");
            browserInfoElement.textContent = `${browserName} (Version: ${browserVersion})`;
        });
    </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser Detection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .info-box {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <h1>Browser Detection Page</h1>
    <p>This page will detect your browser name and version.</p>
    <div class="info-box">
        <strong>Your Browser Information:</strong>
        <p>
            <?php
            // Get the user agent string
            $userAgent = $_SERVER['HTTP_USER_AGENT'];

            // Default values for browser name and version
            $browserName = "Unknown Browser";
            $browserVersion = "Unknown Version";

            // Detect browser and version
            if (strpos($userAgent, 'Chrome') !== false && strpos($userAgent, 'Edg') === false) {
                $browserName = "Google Chrome";
                preg_match('/Chrome\/([0-9.]+)/', $userAgent, $matches);
                $browserVersion = $matches[1] ?? "Unknown";
            } elseif (strpos($userAgent, 'Firefox') !== false) {
                $browserName = "Mozilla Firefox";
                preg_match('/Firefox\/([0-9.]+)/', $userAgent, $matches);
                $browserVersion = $matches[1] ?? "Unknown";
            } elseif (strpos($userAgent, 'Safari') !== false && strpos($userAgent, 'Chrome') === false) {
                $browserName = "Safari";
                preg_match('/Version\/([0-9.]+)/', $userAgent, $matches);
                $browserVersion = $matches[1] ?? "Unknown";
            } elseif (strpos($userAgent, 'Edg') !== false) {
                $browserName = "Microsoft Edge";
                preg_match('/Edg\/([0-9.]+)/', $userAgent, $matches);
                $browserVersion = $matches[1] ?? "Unknown";
            } elseif (strpos($userAgent, 'Trident') !== false) {
                $browserName = "Internet Explorer";
                preg_match('/rv:([0-9.]+)/', $userAgent, $matches);
                $browserVersion = $matches[1] ?? "Unknown";
            }

            // Display the browser information
            echo htmlspecialchars("$browserName (Version: $browserVersion)");
            ?>
        </p>
    </div>
</body>

</html>
