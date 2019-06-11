<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_idOrderID = filter_input(INPUT_POST, 'com_id');
if ($del_idOrderID && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['vAdminType']!='super'){
	$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: orders.php');
        exit;
	}
    $data = Array ('vOrderStatus' => 'Complete');
    $db->where('idOrderID', $del_idOrderID);
    $status = $db->update('Orders', $data);
    
    if ($status) 
    {
        $_SESSION['info'] = "Order marked complete!";
	header('location: orders.php');
	exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to mark Order complete!";
    	header('location: orders.php');
        exit;

    }
    
}
