<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <a id="link" class = "logout"href="logout.php">Logout</a>
            <h1>Welcome To Your Admin page, riskkam is</h1>
            <p>You can view the list of users who use VulnerableApp here. Select the respective checkboxes to delete a user 
                or change their authorization. Click 'Save changes' to save changes made & 'Undo Changes' to reset.</p>
            <div>
                <form method="POST">
                    <table style="width : 100%">
                        <tr>
                            <th>Email</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Auth level</th>
                            <th>Delete</th>
                            <th>Admin access</th>
                        </tr>
                        <tr>
                            <td>admin@admin.com</td>
                            <td>admin</td>
                            <td></td>
                            <td>Admin</td><td><input type='checkbox' name='delete_list[]' value='admin@admin.com'></td><td>
                            <input type='hidden' name='admin_list[]' value='admin@admin.com'>
                            <input type='checkbox' name='admin_list[]' value='admin@admin.com' checked><input type='hidden' name='admin_list[]' value='yes'></td></tr><tr>
                            <td>r1skkam@local.io</td>
                            <td>riskkam is</td>
                            <td>noob</td>
                            <td>Normal</td><td><input type='checkbox' name='delete_list[]' value='r1skkam@local.io'></td><td>
                            <input type='hidden' name='admin_list[]' value='r1skkam@local.io'>
                            <input type='checkbox' name='admin_list[]' value='r1skkam@local.io' ></td></tr>                    </table>
		<p style="text-align:center">THM{I_C4n_3xpl01t_B4c}</p>
                    <input id="sbutton" type="submit" value="Save Changes" name="saveChanges" style="margin: 10px 0px 10px 0px; font-size:large">
                    <input id="sbutton" type="submit" value="Undo Changes" name="undoChanges" style="margin: 10px 0px 10px 20px; font-size:large">
                </form>
            </div>
            <p class="err" style="font-size : medium;">WARNING: You have removed your admin authorization. You won't be able to access this page once you logout.</p>
        </div>
    </div>    
</body>
</html>