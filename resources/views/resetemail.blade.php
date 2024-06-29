<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #dddddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header img {
            max-width: 100px;
        }
        .content {
            text-align: left;
            color: #333333;
        }
        .token {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
            display: inline-block;
            font-size: 18px;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="text-center mt-2">
            <p class="text-gray-600">We received a request to reset your password.</p>
            <div class="bg-gray-200 rounded-lg p-3 inline-block mt-4">
                <p class="text-gray-800 text-xl font-semibold">{{ $token }}</p>
            </div>
            <p class="text-gray-600 mt-4">If you did not request a password reset, please ignore this email.</p>
        </div>

        <div class="footer">
            <p>&copy; 2024 Telkom Indonesia. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
