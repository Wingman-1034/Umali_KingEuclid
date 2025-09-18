<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Accounts</title>
    <link rel="stylesheet" href="public/assets/css/top_nav.css">
    <link rel="stylesheet" href="public/assets/css/header.css">
    <link rel="stylesheet" href="public/assets/css/table.css">
</head>
<body>
    <div id="top-nav">
        <div id="top-left-nav">
            <a id="back-button"><</a>
        </div>
        <div id="top-right-nav">
            <p>Shoeniverse</p>
            <div id="user">K</div>
        </div>
    </div>

    <div id="user-menu" class="modal">
        <div class="modal-content">
            <a href="/admin-profile">Profile</a>
            <a href="/admin-settings">Settings</a>
            <a href="/admin-logout">Logout</a>
        </div>
    </div>

    <div id="header">
        <div id="header-left">
            <p>ACCOUNTS</p>
        </div>
        <div id="header-right">
            <input type="search" name="search" id="search" placeholder="Search...">
        </div>
    </div>

    <div class="container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $user['first_name'] . ' ' . $user['middle_name'] . ' ' . $user['last_name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php if ($user['role'] == 'sAdmin') 
                        {
                          echo 'Super Admin'; 
                        } 
                        else if ($user['role'] == 'admin') 
                        { 
                          echo 'Admin'; 
                        } 
                        else 
                        { 
                          echo 'Staff'; 
                        }
                    ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="public/assets/js/userModal.js"></script>
    <script src="public/assets/js/return.js"></script>
</body>
</html>