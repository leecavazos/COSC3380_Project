<?php
function userExists($conn, $User_ID, $Email, $Username) {

    $sql = "SELECT FROM * user WHERE User_ID = ? OR Email = ? OR Username = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "iss", $User_ID, $Email, $Username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)) {

    } else {
        $result = false;
        return $result;
    }
}