<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file link here -->
</head>
<style>
    body {
        font-family: Helvetica, sans-serif;
        background: #96A0BC;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .profile-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        width: 100%;
        text-align: center;
        transition: transform 0.3s;
    }

    .profile-container:hover {
        transform: scale(1.05);
    }

    .profile-name {
        color: #0D2464;
 
    }

    .profile-info {
        text-align: left;
        margin-top: 20px;
        
    }

    .profile-info p {
        margin-bottom: 10px;
    }

    .error-message {
        color: red;
    }

</style>

<body>
    <div class="profile-container">
        <?php
        require("connect.php");

        if (isset($_GET['userid'])) {
            $selectedUserID = $_GET['userid'];

// require("connect.php");

// if (isset($_GET['userid'])) {
//     $selectedUserID = $_GET['userid'];

//     // Query to retrieve the selected user's details
//     $query = "SELECT * FROM users WHERE userid = '$selectedUserID'";
//     $DB=new database();
//     $userDetails=$DB->read($query);

//     if (!empty($userDetails)) {
//         // Display the user's profile details
//         $selectedUser = $userDetails[0];
//         echo "<h1>" . $selectedUser['name'] . "'s Profile</h1>";
//         echo "<p>User ID: " . $selectedUser['userid'] . "</p>";
//         echo "<p>Email: " . $selectedUser['email'] . "</p>";
//         echo "<p>Gender: " . $selectedUser['gender'] . "</p>";
//         echo "<p>Specialised In: " . $selectedUser['specialisation'] . "</p>";
//         echo "<p>Commencement Date: " . $selectedUser['commencement'] . "</p>";
//         echo "<p>Court: " . $selectedUser['court'] . "</p>";
//     } else {
//         echo "User not found.";
//     }
// } else {
//     echo "No user ID provided.";
// }

            // Query to retrieve the selected user's details
            $query = "SELECT * FROM users WHERE userid = '$selectedUserID'";
            $DB = new database();
            $userDetails = $DB->read($query);

            if (!empty($userDetails)) {
                // Display the user's profile details
                $selectedUser = $userDetails[0];
                echo "<h1 class='profile-name'>" . $selectedUser['name'] . "'s Profile</h1>";
                echo "<div class='profile-info'>";
                echo "<p><strong>User ID:</strong> " . $selectedUser['userid'] . "</p>";
                echo "<p><strong>Email:</strong> " . $selectedUser['email'] . "</p>";
                echo "<p><strong>Gender:</strong> " . $selectedUser['gender'] . "</p>";
                echo "<p><strong>Specialised In:</strong> " . $selectedUser['specialisation'] . "</p>";
                echo "<p><strong>Commencement Date:</strong> " . $selectedUser['commencement'] . "</p>";
                echo "<p><strong>Court:</strong> " . $selectedUser['court'] . "</p>";
                echo "</div>";
            } else {
                echo "<p class='error-message'>User not found.</p>";
            }
        } else {
            echo "<p class='error-message'>No user ID provided.</p>";
        }
        ?>
    </div>
</body>
</html>
