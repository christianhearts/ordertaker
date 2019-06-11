<?php
/**
 * Check the database for login user
 * Get the password for the user
 * compare md5 hash over sha1
 * @param string $username Raw username
 * @param string $password expected to be md5 over sha1
 * @return bool TRUE on success FALSE otherwise
 */
private function _check_db($username, $password) {
    global $db;
    $user_row = $db->get_row("SELECT * FROM `user` WHERE `username`='" . $db->escape($username) . "'");
 
    //general return
    if(is_object($user_row) && md5($user_row->password) == $password)
        return true;
    else
        return false;
}
?>
