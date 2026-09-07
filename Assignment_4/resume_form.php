<?php

$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST['fullname']))){
        $errors['fullname'] = "Full Name is required.";
    }

    if(empty(trim($_POST['profession']))){
        $errors['profession'] = "Profession / Graduate Title is required.";
    }

    if(empty(trim($_POST['objective']))){
        $errors['objective'] = "Career Objective is required.";
    }

    if(empty(trim($_POST['phone']))){
        $errors['phone'] = "Phone Number is required.";
    }

    if(empty(trim($_POST['email']))){
        $errors['email'] = "Email is required.";
    }

    if(empty(trim($_POST['location']))){
        $errors['location'] = "Location is required.";
    }

    if(empty(trim($_POST['linkedin']))){
        $errors['linkedin'] = "LinkedIn URL is required.";
    }

    if(empty(trim($_POST['tech_skills']))){
        $errors['tech_skills'] = "Technical Skills are required.";
    }

    if(empty(trim($_POST['soft_skills']))){
        $errors['soft_skills'] = "Soft Skills are required.";
    }

    if(empty(trim($_POST['edu_degree']))){
        $errors['edu_degree'] = "Degree / Program is required.";
    }

    if(empty(trim($_POST['edu_school']))){
        $errors['edu_school'] = "School is required.";
    }

    if(empty(trim($_POST['edu_year']))){
        $errors['edu_year'] = "Year is required.";
    }

    if(empty(trim($_POST['edu_gpa']))){
        $errors['edu_gpa'] = "GPA / Honors is required.";
    }

    if(empty(trim($_POST['proj_title']))){
        $errors['proj_title'] = "Project / Internship Title is required.";
    }

    if(empty(trim($_POST['proj_company']))){
        $errors['proj_company'] = "Company / Institute is required.";
    }

    if(empty(trim($_POST['proj_desc']))){
        $errors['proj_desc'] = "Description is required.";
    }

    if(empty(trim($_POST['proj_tools']))){
        $errors['proj_tools'] = "Tools / Technologies Used is required.";
    }

    if(empty(trim($_POST['cert_name']))){
        $errors['cert_name'] = "Certification Name is required.";
    }

    if(empty(trim($_POST['cert_info']))){
        $errors['cert_info'] = "Institute / Year is required.";
    }

    if(empty(trim($_POST['languages1']))){
        $errors['languages1'] = "Language #1 is required.";
    }

    if(empty(trim($_POST['languages2']))){
        $errors['languages2'] = "Language #2 is required.";
    }

    if(empty($errors)){
        include 'resume.php';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form">
        <div class="form-header">
            <h1>Resume Form</h1>
            <p>Fill in your details below. Leave a section blank to skip it.</p>
        </div>

        <form action="" method="POST">

            <fieldset>
                <legend>Personal Information</legend>
                <div class="field-row">
                    <div>
                        <label for="fullname">Full Name</label>

                        <input type="text" name="fullname" placeholder="Juan Dela Cruz" value="<?= $_POST['fullname'] ?? '' ?>" class="<?= isset($errors['fullname']) ? 'error-field' : '' ?>">

                        <?php if(isset($errors['fullname'])){ ?>
                            <span class="error"><?= $errors['fullname']; ?></span>
                        <?php } ?>

                    </div>
                    <div>
                        <label for="profession">Profession / Graduate Title</label>

                        <input type="text" name="profession" placeholder="IT Graduate" value="<?= $_POST['profession'] ?? '' ?>" class="<?= isset($errors['profession']) ? 'error-field' : '' ?>">

                        <?php if(isset($errors['profession'])){ ?>
                            <span class="error"><?= $errors['profession']; ?></span>
                        <?php } ?>

                    </div>
                </div>
                <div class="field-row single">
                    <div>
                        <label for="objective">Career Objective</label>
                        <textarea id="objective" name="objective" placeholder="Motivated and detail-oriented IT graduate seeking a position in..." class="<?= isset($errors['objective']) ? 'error-field' : '' ?>"><?= $_POST['objective'] ?? '' ?></textarea>
                        
                        <?php if(isset($errors['objective'])){ ?>
                            <span class="error"><?= $errors['objective']; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Contact</legend>
                <div class="field-row">
                    <div>
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="09123456789" value="<?= $_POST['phone'] ?? '' ?>" class="<?= isset($errors['phone']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['phone'])){ ?>
                            <span class="error"><?= $errors['phone']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="name@gmail.com" value="<?= $_POST['email'] ?? '' ?>" class="<?= isset($errors['email']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['email'])){ ?>
                            <span class="error"><?= $errors['email']; ?></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="field-row">
                    <div>
                        <label for="location">Location (City, State)</label>
                        <input type="text" id="location" name="location" placeholder="Urdaneta, Pangasinan" value="<?= $_POST['location'] ?? '' ?>" class="<?= isset($errors['location']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['location'])){ ?>
                            <span class="error"><?= $errors['location']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="linkedin">LinkedIn</label>
                        <input type="url" id="linkedin" name="linkedin" placeholder="linkedin.com/in/yourname" value="<?= $_POST['linkedin'] ?? '' ?>" class="<?= isset($errors['linkedin']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['linkedin'])){ ?>
                            <span class="error"><?= $errors['linkedin']; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Key Skills</legend>
                <div class="field-row">
                    <div>
                        <label for="tech_skills">Technical Skills (comma separated)</label>
                        <input type="text" id="tech_skills" name="tech_skills" placeholder="MS Office, Excel, HTML/CSS, PHP" value="<?= $_POST['tech_skills'] ?? '' ?>" class="<?= isset($errors['tech_skills']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['tech_skills'])){ ?>
                            <span class="error"><?= $errors['tech_skills']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="soft_skills">Soft Skills (comma separated)</label>
                        <input type="text" id="soft_skills" name="soft_skills" placeholder="Communication, Problem-Solving, Teamwork" value="<?= $_POST['soft_skills'] ?? '' ?>" class="<?= isset($errors['soft_skills']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['soft_skills'])){ ?>
                            <span class="error"><?= $errors['soft_skills']; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            

            <fieldset>
                <legend>Education</legend>
                <div class="field-row">
                    <div>
                        <label>Degree / Program</label>
                        <input type="text" name="edu_degree" placeholder="BS Information Technology" value="<?= $_POST['edu_degree'] ?? '' ?>" class="<?= isset($errors['edu_degree']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['edu_degree'])){ ?>
                            <span class="error"><?= $errors['edu_degree']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label>School</label>
                        <input type="text" name="edu_school" placeholder="Pangasinan State University" value="<?= $_POST['edu_school'] ?? '' ?>" class="<?= isset($errors['edu_school']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['edu_school'])){ ?>
                            <span class="error"><?= $errors['edu_school']; ?></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="field-row">
                    <div>
                        <label>Year</label>
                        <input type="number" name="edu_year" placeholder="2026" value="<?= $_POST['edu_year'] ?? '' ?>" class="<?= isset($errors['edu_year']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['edu_year'])){ ?>
                            <span class="error"><?= $errors['edu_year']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label>GPA / Honors (optional)</label>
                        <input type="text" name="edu_gpa" placeholder="GPA: 1.58" value="<?= $_POST['edu_gpa'] ?? '' ?>" class="<?= isset($errors['edu_gpa']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['edu_gpa'])){ ?>
                            <span class="error"><?= $errors['edu_gpa']; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Projects / Internships</legend>
                <div id="proj-container"></div>

                <div class="field-row">
                    <div>
                        <label>Project / Internship Title</label>
                        <input type="text" name="proj_title" placeholder="LISA - Sign Language Learning App" value="<?= $_POST['proj_title'] ?? '' ?>" class="<?= isset($errors['proj_title']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['proj_title'])){ ?>
                            <span class="error"><?= $errors['proj_title']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label>Company / Institute</label>
                        <input type="text" name="proj_company" placeholder="School Capstone Project" value="<?= $_POST['proj_company'] ?? '' ?>" class="<?= isset($errors['proj_company']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['proj_company'])){ ?>
                            <span class="error"><?= $errors['proj_company']; ?></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="field-row single">
                    <div>
                        <label>Description</label>
                        <textarea name="proj_desc" placeholder="Brief description of the project or work done" class="<?= isset($errors['proj_desc']) ? 'error-field' : '' ?>"><?= $_POST['proj_desc'] ?? '' ?></textarea>
                        <?php if(isset($errors['proj_desc'])){ ?>
                            <span class="error"><?= $errors['proj_desc']; ?></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="field-row single">
                    <div>
                        <label>Tools / Technologies Used</label>
                        <input type="text" name="proj_tools" placeholder="Figma, PHP, Java" value="<?= $_POST['proj_tools'] ?? '' ?>" class="<?= isset($errors['proj_tools']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['proj_tools'])){ ?>
                            <span class="error"><?= $errors['proj_tools']; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Certifications</legend>
                <div class="field-row">
                    <div>
                        <label>Certification Name</label>
                        <input type="text" name="cert_name" placeholder="Networking Basics" value="<?= $_POST['cert_name'] ?? '' ?>" class="<?= isset($errors['cert_name']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['cert_name'])){ ?>
                            <span class="error"><?= $errors['cert_name']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label>Institute / Year</label>
                        <input type="text" name="cert_info" placeholder="CISCO, 2025" value="<?= $_POST['cert_info'] ?? '' ?>" class="<?= isset($errors['cert_info']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['cert_info'])){ ?>
                            <span class="error"><?= $errors['cert_info']; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Languages</legend>
                <div class="field-row single">
                    <div>
                        <label for="languages1">Languages #1</label>
                        <input type="text" id="languages1" name="languages1" placeholder="English" value="<?= $_POST['languages1'] ?? '' ?>" class="<?= isset($errors['languages1']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['languages1'])){ ?>
                            <span class="error"><?= $errors['languages1']; ?></span>
                        <?php } ?>
                    </div>
                    <div>
                        <label for="languages2">Languages #2</label>
                        <input type="text" id="languages2" name="languages2" placeholder="Filipino" value="<?= $_POST['languages2'] ?? '' ?>" class="<?= isset($errors['languages2']) ? 'error-field' : '' ?>">
                        <?php if(isset($errors['languages2'])){ ?>
                            <span class="error"><?= $errors['languages2']; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="submit-btn">Generate Resume</button>
        </form>
    </div>
</body>
</html>
