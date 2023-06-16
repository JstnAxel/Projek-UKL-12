<?php
include_once("connect.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM acara WHERE id_acara=$id");

mysqli_query($con, "DELETE FROM acara WHERE id_acara=$id");

header("Location: Event%20Page.php");