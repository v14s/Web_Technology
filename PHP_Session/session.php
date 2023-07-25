<?php

// Start the session
session_start();

// Define the student database
$students = [];

// Check if the student data exists in the session
if (isset($_SESSION['students'])) {
  $students = $_SESSION['students'];
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the student data from the request body
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Add the student to the database
  $students[] = ['name' => $name, 'email' => $email];

  // Save the updated student data in the session
  $_SESSION['students'] = $students;
}

// Render the student registration form
echo '<form method="post">';
echo '<label>Name:</label><br>';
echo '<input type="text" name="name"><br><br>';
echo '<label>Email:</label><br>';
echo '<input type="email" name="email"><br><br>';
echo '<input type="submit" value="Submit"><br>';
echo '</form>';

// Render the list of registered students
echo '<h3>Registered Students</h3>';
echo '<ul>';
foreach ($students as $student) {
  echo '<li>' . $student['name'] . ' (' . $student['email'] . ')' . '</li>';
}
echo '</ul>';
