<!DOCTYPE html>
<html>
<head>
    <title>BCS350 Assignment 2 - Your Name</title>
</head>
<body>
    <fieldset>
        BCS350 Assignment 2 - Your Name
    </fieldset>
    
    <?php
    // Set the time zone
    date_default_timezone_set('EST');
    
    // Process form data
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Sanitize user input
        $first_name = htmlentities($_POST["first_name"]);
        $last_name = htmlentities($_POST["last_name"]);
        $email = htmlentities($_POST["email"]);
        $gender = htmlentities($_POST["gender"]);
        $education = htmlentities($_POST["education"]);
        
        // Get selected programming skills as an array
        $programming_skills = isset($_POST["programming_skills"]) ? $_POST["programming_skills"] : [];

        // Convert array to a string with each skill on a new line
        $programming_skills_text = implode("<br>", $programming_skills);

        $research = htmlentities($_POST["research"]);
        
        // Display Application Submission Information
        echo "<br>Application submitted at: " . date('g:ia, l, F j, Y') . "<br><br>";
        echo "Welcome, " . $first_name . "!<br><br>";

        // Upload Profile Photo
        if ($_FILES["profile_photo"]["error"] == 0) {
            $file_extension = pathinfo($_FILES["profile_photo"]["name"], PATHINFO_EXTENSION);
            $allowed_extensions = array("jpg", "jpeg", "gif", "png", "tif");
            
            if (in_array(strtolower($file_extension), $allowed_extensions)) {
                $upload_path = "profile_photos/" . $_FILES["profile_photo"]["name"];
                move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $upload_path);
                echo '<img src="' . $upload_path . '" alt="Profile Photo"><br><br>';
            } else {
                echo "Warning: " . $_FILES["profile_photo"]["name"] . "' is not an accepted file format.<br><br>";
            }
        } else {
            echo "No photo has been uploaded.<br><br>";
        }

        // Display "Your Application Information" in bold with spacing
        echo "<strong>Your Application Information:</strong><br><br>";

        // Display User Profile Information
        echo "First Name: " . $first_name . "<br>";
        echo "Last Name: " . $last_name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Education Level: " . $education . "<br>";
        
        // Display selected programming skills vertically or show a message if none selected
        if (!empty($programming_skills_text)) {
            echo "Programming Skills:<br>";
            echo $programming_skills_text . "<br>";
        } else {
            echo "Programming Skills: You did not enter programming skill information<br>";
        }
        
        echo "Research Interest: " . (!empty($research) ? $research : "You did not enter research information") . "";
    } else {
        echo "Invalid request method.";
    }
    ?>
</body>
</html>
