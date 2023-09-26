<!DOCTYPE html>
<html>
<head>
    <title>BCS350 Assignment 2 - Your Name</title>
</head>
<body>
    <fieldset>
        BCS350 Assignment 2 - Your Name
    </fieldset>
    <h3>Create Your User Profile</h3>
    
    <form method="post" action="hw2_process.php" enctype="multipart/form-data">
        <!-- First Name -->
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <!-- Last Name -->
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <!-- Gender -->


        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Prefer not to answer">
        <label for="other">Prefer not to answer</label><br><br>
        
        <!-- Education Level -->
        <label for="education">Education Level:</label>
        <select id="education" name="education">
            <option value="High school diploma" selected>High school diploma</option>
            <option value="Associate degree">Associate degree</option>
            <option value="Bachelor’s degree">Bachelor’s degree</option>
            <option value="Master’s degree">Master’s degree</option>
            <option value="Professional degree">Professional degree</option>
            <option value="Doctoral degree">Doctoral degree</option>
            <option value="Other">Other</option>
        </select><br><br>
        
        <!-- Programming Skills -->
        <label>Programming Skills:</label><br>
        <input type="checkbox" id="skill_c" name="programming_skills[]" value="C/C++">
        <label for="skill_c">C/C++</label><br>
        <input type="checkbox" id="skill_html" name="programming_skills[]" value="HTML/CSS">
        <label for="skill_html">HTML/CSS</label><br>
        <input type="checkbox" id="skill_java" name="programming_skills[]" value="Java">
        <label for="skill_java">Java</label><br>
        <input type="checkbox" id="skill_js" name="programming_skills[]" value="JavaScript">
        <label for="skill_js">JavaScript</label><br>
        <input type="checkbox" id="skill_php" name="programming_skills[]" value="PHP">
        <label for="skill_php">PHP</label><br>
        <input type="checkbox" id="skill_python" name="programming_skills[]" value="Python">
        <label for="skill_python">Python</label><br>
        <input type="checkbox" id="skill_sql" name="programming_skills[]" value="SQL">
        <label for="skill_sql">SQL</label><br>
        <!-- Add more skills checkboxes as needed -->
        
        <!-- Research Information -->
        <label for="research">Research Interest:</label><br>
        <textarea id="research" name="research"></textarea><br><br>
        
        <!-- Profile Photo Upload -->
        <label for="profile_photo">Upload Profile Photo:<br> (JPG, GIF, PNG or TIF File):</label>
        <input type="file" id="profile_photo" name="profile_photo"><br><br>
        
        <!-- Submit and Reset Buttons -->
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
