<?php
session_start()

if (isset($_SESSION['username'])) {
    header('Location: index.php')
}

?>

<!DOCTYPE html>
<html lang="en">
<head