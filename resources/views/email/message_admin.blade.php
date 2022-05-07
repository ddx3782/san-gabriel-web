<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Verification</title>
</head>
<body>
	Good day admin {{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }} !
	<a href="{{ url('verify/email/' . $user->id) }}">Click here</a>to verify your email.

</body>
</html>