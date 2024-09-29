<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor-Mentee Form</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>
    <div class="form-container">
        <h2>Enter the Data</h2>
        <form action="save1.php" method="POST" id="mentorMenteeForm">
            <!-- Name Field -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <!-- Designation Field -->
            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation" required><br><br>

            <!-- Tags Field -->
            <label for="tags">Tags (separate with commas):</label>
            <input type="text" id="tags" name="tags" required><br><br>

            <!-- Mentor and Mentee Radio Buttons -->
            <label for="role">Choose Role:</label><br>
            <label>
                <input type="radio" id="isMentor" name="role" value="mentor" required>
                Mentor
            </label>
            <label>
                <input type="radio" id="isMentee" name="role" value="mentee">
                Mentee
            </label><br><br>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
