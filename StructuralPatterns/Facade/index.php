<?php
session_start();

include_once("Classes/Session.php");
include_once("Classes/CSRFToken.php");

?>

<form action="request/order.php" method="POST">
    <input type="hidden" name="order_id" value="<?= rand(0, 100); ?>" />
    <input type="hidden" name="token" value="<?= CSRFToken::_token(); ?>">
    <input type="submit" value="Save order">
</form>