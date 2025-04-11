<?php
// Function to calculate age
function calculate_age($birthdate) {
    $birthdate = new DateTime($birthdate);
    $current_date = new DateTime();
    $interval = $birthdate->diff($current_date);
    return $interval;
}

$age = null;
if (isset($_POST['birthdate'])) {
    $birthdate = $_POST['birthdate'];
    $age = calculate_age($birthdate);
}
?>

<html>

<body>
    <h1>Age Calculator</h1>

    <!-- Form to input birthdate and submit -->
    <form method="post" action="">
        <label for="birthdate">Enter your birthdate:</label>
        <input type="date" name="birthdate" required>
        <input type="submit" value="Calculate Age">
    </form>

    <?php
    if ($age !== null) {
        echo "<p>Your age is: " . $age->y . " years, " . $age->m . " months, and " . $age->d . " days.</p>";
    }
echo "Program by Diya Bhutani(2220100243)";

    ?>
</body>
</html>
