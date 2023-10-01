<?php
$conn = mysqli_connect("localhost", "root", "", "book_meeting_db");

if (!$conn) {
	echo "Connection failed!";
}