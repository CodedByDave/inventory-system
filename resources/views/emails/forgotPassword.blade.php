<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
</head>
<body>
    <h2>Hello,</h2>
    <p>You requested a password reset. Click the link below to reset your password:</p>
    <a href="{{ url('/reset-password?token=' . $token) }}">
        Reset Password
    </a>
    <p>If you didn’t request this, just ignore this email.</p>
</body>
</html>
