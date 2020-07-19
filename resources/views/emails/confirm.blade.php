<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up confirmation link</title>
</head>

<body>
    <h1>Thank you very much for signing up in our website!</h1>
    <p>
        please click the following link to complete your sign up
        <a href="{{ route('confirm_email',$user->activation_token)}}">
            {{ route('confirm_email',$user->activation_token)}}
        </a>
    </p>
    <p>
        As a non-person operation please ignore this mail.
    </p>
</body>

</html>