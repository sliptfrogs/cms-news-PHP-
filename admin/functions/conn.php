<?php
$cn = new mysqli('localhost', 'root', 'root', 'etec_project_db');

if ($cn->connect_error) {
    die("Database connection failed: " . $cn->connect_error);
}
