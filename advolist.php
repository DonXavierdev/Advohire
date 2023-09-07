<?php
require("connect.php");

// Function to generate the WHERE clause for filters
function generateFilterClause($filters) {
    $clause = "";
    if (!empty($filters['gender'])) {
        $clause .= " AND gender = '" . $filters['gender'] . "'";
    }
    if (!empty($filters['commencement'])) {
        $clause .= " AND commencement = '" . $filters['commencement'] . "'";
    }
    if (!empty($filters['court'])) {
        $clause .= " AND court = '" . $filters['court'] . "'";
    }
    return $clause;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body{
            background-color: #96A0BC;
        }
    .user-card {
        width: 400px;
        height: 400px;
    border: 1px solid #ccc;
    padding: 10px;
    margin: 20px auto;
    border-radius: 5px;
    background-color: #fff;    
    box-shadow: 0 4px 8px rgba(0, 174, 239, 0.1); /* Shadow animation */
    transition: box-shadow 0.3s ease; /* Animation duration and easing */
}

.user-card:hover {
    box-shadow: 0 8px 16px rgba(0, 174, 239, 0.2); /* Shadow on hover */
    transform: translateY(-5px);
}

.user-card h1, .user-card p {
    color: #0D2464;
    text-align: center;
}

.user-card a {
    text-decoration: none;
    color: #00aeef;
}

    a{
        text-decoration: none;
        color: #000;
    }
    form {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 600px;
}

input, select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 5px;
    min-width: 200px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #0D2464;
    color: #fff;
    cursor: pointer;
}

    </style>
</head>
<body>
<div class="user-list">
    <form method="get">
        <input type="text" name="search" placeholder="Search by Name or User ID">
        <select name="gender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <select name="court">
            <option value="">Select Court</option>
            <option value="High court">High court</option>
            <option value="Civil court">Civil court</option>
            <option value="Supreme court">Supreme court</option>
            <option value="Criminal court">Criminal court</option>
        </select>
        <input type="date" name="commencement" placeholder="Commencement Date">
        <button type="submit">Search</button>
    </form>

    <?php
    $db = new database();
    $filters = array();
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $filters['gender'] = isset($_GET['gender']) ? $_GET['gender'] : '';
        $filters['commencement'] = isset($_GET['commencement']) ? $_GET['commencement'] : '';
        $filters['court'] = isset($_GET['court']) ? $_GET['court'] : '';

        // Generate the WHERE clause for filters
        $filterClause = generateFilterClause($filters);

        // Query to retrieve user details with filters and search
        $query = "SELECT * FROM users WHERE Type='Advocate' 
                  AND (name LIKE '%$search%' OR userid LIKE '%$search%')" . $filterClause;

        // Retrieve user details using the read() method
        $userDetails = $db->read($query);

        // Loop through the user details and display them
        foreach ($userDetails as $user_data) {
            echo "<a href='userprofile.php?userid=" . $user_data['userid'] . "'>"; 
            echo "<div class='user-card'>";
            echo "<h1>" . $user_data['name'] . "</h1>";
            echo "<p>User ID: " . $user_data['userid'] . "</p>";
            echo "<p>Username: " . $user_data['name'] . "</p>";
            echo "<p>Email: " . $user_data['email'] . "</p>";
            echo "<p>Gender: " . $user_data['gender'] . "</p>";
            echo "<p>Specialised In: " . $user_data['specialisation'] . "</p>";
            echo "<p>Commencement Date: " . $user_data['commencement'] . "</p>";
            echo "<p>Court: " . $user_data['court'] . "</p>";
            echo "</div>";
        }
    }
    ?>

</div>
</body>
</html>
