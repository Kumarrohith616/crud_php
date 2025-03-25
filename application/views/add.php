<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
<form action="<?=base_url('user/add_save')?>" method="post">
		<input type="text" name="fName"placeholder="First name">
		<input type="text" name="lName"placeholder="Last name">
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="password">
        <button type="submit">Add</button>
	</form>
</body>
</html>