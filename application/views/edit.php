<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
<form action="<?=base_url('user/edit_save/'.$user->id)?>" method="post">
		<input type="text" name="fName"placeholder="First name" value="<?=$user->fName?>">
		<input type="text" name="lName"placeholder="Last name" value="<?=$user->lName?>">
		<input type="email" name="email" placeholder="Email" value="<?=$user->email?>">
		<input type="password" name="password" placeholder="password" value="<?=$user->password?>">
        <button type="submit">Edit</button>
	</form>
</body>
</html>