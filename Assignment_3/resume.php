<?php
    // personal info
    $fullName = $_GET['fullname'];
    $profession = $_GET['profession'];
    $objective = $_GET['objective'];
    // contact
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $location = $_GET['location'];
    $linkedin = $_GET['linkedin'];
    $cleanUrl = preg_replace('#^https?://(www\.)?#i', '', $linkedin);
    // skills
    $tech_skills = $_GET['tech_skills'];
    $soft_skills = $_GET['soft_skills'];
    // education
    $edu_degree = $_GET['edu_degree'];
    $edu_school = $_GET['edu_school'];
    $edu_year = $_GET['edu_year'];
    $edu_gpa = $_GET['edu_gpa'];
    // project/internships
    $proj_title = $_GET['proj_title'];
    $proj_company = $_GET['proj_company'];
    $proj_desc = $_GET['proj_desc'];
    $proj_tools = $_GET['proj_tools'];
    // certifications
    $cert_name = $_GET['cert_name'];
    $cert_info = $_GET['cert_info'];
    //languages
    $language1 = $_GET['languages1'];
    $language2 = $_GET['languages2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="resume">
        <!-- header -->
        <div class="resume-header">
            <h1><?= $fullName ?></h1>
        </div>

        <div class="resume-body">

            <!-- contact -->
            <div class="resume-sidebar">
                <div class="side-section">
                    <h2>CONTACT</h2>
                    <div class="contact-item">
                        <span class="ico"><i class="bi bi-telephone-fill"></i> Phone: </span>
                        <span><?= $phone ?></span>
                    </div>
                    <div class="contact-item">
                        <span class="ico"><i class="bi bi-envelope-fill"></i> Email: </span>
                        <span><?= $email ?></span>
                    </div>
                    <div class="contact-item">
                        <span class="ico"><i class="bi bi-geo-alt-fill"></i> Location: </span>
                        <span><?= $location ?></span>
                    </div>
                    <div class="contact-item">
                        <span class="ico"><i class="bi bi-linkedin"></i> LinkedIn: </span>
                        <span><?= $cleanUrl ?></span>
                    </div>
                </div>

                <!-- certifications -->
                <div class="side-section">
                    <h2>CERTIFICATIONS</h2>
                    <ul>
                        <li><?= $cert_name?></li>
                        <p><?= $cert_info?></p>
                    </ul>
                </div>

                <!-- languages -->
                <div class="side-section">
                    <h2>LANGUAGES</h2>
                    <ul>
                        <li><?= $language1 ?></li>

                        <?php if ($language2 !== ''): ?>
                        <li><?= $language2 ?></li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </div>
            

            <!-- career objective -->
            <div class="resume-main">
                <section class="main-section">
                    <span class="dot"></span>
                    <h2>CAREER OBJECTIVE</h2>
                    <p><?= nl2br($objective) ?></p>
                </section>

                <section class="main-section">
                    <span class="dot"></span>
                    <h2>KEY SKILLS</h2>
                    <div class="skills-rows">
                    
                        <div>
                            <ul>
                                <li>Technical: <?= $tech_skills ?></li>
                            </ul>
                        </div>
                        
                        <div>
                            <ul>
                                <li>Soft Skills: <?= $soft_skills ?></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- education -->
                <section class="main-section">
                    <span class="dot"></span>
                    <h2>EDUCATION</h2>
                    
                    <div class="entry">
                        <div>
                            <ul>
                                <li>
                                    <?= $edu_degree ?>
                                </li>
                                <p><?= $edu_school ?> | <?= $edu_year ?></p>
                                <p><?= $edu_gpa ?></p>
                            </ul>
                    </div>
                </section>

                <!-- project/internships -->
                <section class="main-section">
                    <span class="dot"></span>
                    <h2>PROJECTS / INTERNSHIPS</h2>
                    
                    <div class="entry">
                        <div>
                            <ul>
                                <li>
                                    <?= $proj_title ?> - <?= $proj_company?>
                                </li>
                                <p><?= $proj_desc ?></p>
                                <p><?= $proj_tools ?></p>
                            </ul>
                    </div>
                </section>
            </div>
            
        </div>
    </div>
</body>
</html>