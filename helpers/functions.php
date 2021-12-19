<?php
function getAllUsersData($con) {
    $usersDataQuery = "SELECT users.id,CONCAT(users.first_name,' ', users.last_name) AS username, teams.name,GROUP_CONCAT(teams.name) AS team_name
                               FROM teams_users
                               INNER JOIN users ON users.id = teams_users.user_id
                               INNER JOIN teams ON teams.id = teams_users.team_id
                               GROUP BY users.id";
    $usersData = mysqli_query($con, $usersDataQuery);
    return $usersData;
}

?>