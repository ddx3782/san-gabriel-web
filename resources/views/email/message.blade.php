<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Verification</title>
</head>
<body>
	Good day {{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }} !
	This is your pincode {{ $pincode->pincode }}

</body>
</html>