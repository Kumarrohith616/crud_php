<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?=base_url("user/add")?>">Add</a>

    <table>
        <thead>
        <th>S.no</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
        </thead>
       <tbody>
        <?php foreach ($users as $user) {?>
            <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['fName']?></td>
            <td><?=$user['lName']?></td>
            <td><?=$user['email']?></td>
            <td><a href="<?=base_url('user/edit/'.$user['id']) ?>">Edit</a></td>
            <td><a onclick="confirm('Are you delete')" href="<?=base_url('user/delete/'.$user['id']) ?>">Delete</a></td>
        </tr>
        <?php }?>

       </tbody>

    </table>
</body>
</html>