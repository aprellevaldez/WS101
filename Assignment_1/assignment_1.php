<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Resume Generator</title>
</head>
<body>

    <?php
    // Task 1
    $fullName = "Aprelle Anne B. Valdez";
    $email = "aprelleannevldz@gmail.com";
    $age = "20 yrs old";
    $address = "Santiago, Binalonan, Pangasinan";
    $phoneNumber = "09123456789";

    $fatherName = "Reynaldo M. Valdez";
    $fatherContact = "09123456788";

    $motherName = "Bernardita B. Valdez";
    $motherContact = "09123456787";

    $program = "BS Information Technology";
    $school = "Pangasinan State University - Urdaneta City Campus";
    $photo = "profile_photo.jpg";

    // Task 2
    if ($program == "BS Information Technology") {
        $careerTrack = "Systems Administrator";
    }
    elseif ($program == "BS Computer Science") {
        $careerTrack = "Software Developer";
    }
    else {
        $careerTrack = "IT Professional";
    }

    // Task 3
    if ($careerTrack == "Systems Administrator") {
        $coreSkills = "Linux OS, Apache Server Configuration, Hardware Troubleshooting";
    }
    elseif ($careerTrack == "Software Developer") {
        $coreSkills = "PHP, MySQL, Conditional Logic, Object-Oriented Programming";
    }
    else {
        $coreSkills = "Computer Literacy, Problem Solving, Teamwork";
    }
    ?>

    <h1><?php echo $fullName; ?></h1>

    <img src="<?php echo $photo; ?>" alt="Profile Photo" width="150">

    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
    <p><strong>Phone Number:</strong> <?php echo $phoneNumber; ?></p>

    <h2>Parents Information</h2>
    <p><strong>Father:</strong> <?php echo $fatherName; ?></p>
    <p><strong>Father Contact:</strong> <?php echo $fatherContact; ?></p>

    <p><strong>Mother:</strong> <?php echo $motherName; ?></p>
    <p><strong>Mother Contact:</strong> <?php echo $motherContact; ?></p>

    <h2>Career Objective</h2>
    <p>
        A <?php echo $program; ?> student seeking a role in a dynamic company as a 
        <strong><?php echo $careerTrack; ?></strong> to begin my career.
        Eager to apply my knowledge and skills, gain hands-on experience, and contribute to the success of the company.
    </p>

    <h2>Educational Information</h2>
    <p><strong>Program:</strong> <?php echo $program; ?></p>
    <p><strong>School:</strong> <?php echo $school; ?></p>

    <h2>Technical Skills</h2>
    <ul>
        <li><?php echo $coreSkills; ?></li>
    </ul>

</body>
</html>
