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

        <form action="resume.php" method="GET">

            <fieldset>
                <legend>Personal Information</legend>
                <div class="field-row">
                    <div>
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Juan Dela Cruz" required>
                    </div>
                    <div>
                        <label for="profession">Profession / Graduate Title</label>
                        <input type="text" id="profession" name="profession" placeholder="IT Graduate">
                    </div>
                </div>
                <div class="field-row single">
                    <div>
                        <label for="objective">Career Objective</label>
                        <textarea id="objective" name="objective" placeholder="Motivated and detail-oriented IT graduate seeking a position in..."></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Contact</legend>
                <div class="field-row">
                    <div>
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="09123456789">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="name@gmail.com">
                    </div>
                </div>
                <div class="field-row">
                    <div>
                        <label for="location">Location (City, State)</label>
                        <input type="text" id="location" name="location" placeholder="Urdaneta, Pangasinan">
                    </div>
                    <div>
                        <label for="linkedin">LinkedIn</label>
                        <input type="url" id="linkedin" name="linkedin" placeholder="linkedin.com/in/yourname">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Key Skills</legend>
                <div class="field-row">
                    <div>
                        <label for="tech_skills">Technical Skills (comma separated)</label>
                        <input type="text" id="tech_skills" name="tech_skills" placeholder="MS Office, Excel, HTML/CSS, PHP">
                    </div>
                    <div>
                        <label for="soft_skills">Soft Skills (comma separated)</label>
                        <input type="text" id="soft_skills" name="soft_skills" placeholder="Communication, Problem-Solving, Teamwork">
                    </div>
                </div>
            </fieldset>

            

            <fieldset>
                <legend>Education</legend>
                <div class="field-row">
                    <div>
                        <label>Degree / Program</label>
                        <input type="text" name="edu_degree" placeholder="BS Information Technology">
                    </div>
                    <div>
                        <label>School</label>
                        <input type="text" name="edu_school" placeholder="Pangasinan State University">
                    </div>
                </div>
                <div class="field-row">
                    <div>
                        <label>Year</label>
                        <input type="number" name="edu_year" placeholder="2026">
                    </div>
                    <div>
                        <label>GPA / Honors (optional)</label>
                        <input type="text" name="edu_gpa" placeholder="GPA: 1.58">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Projects / Internships</legend>
                <div id="proj-container"></div>

                <div class="field-row">
                    <div>
                        <label>Project / Internship Title</label>
                        <input type="text" name="proj_title" placeholder="LISA - Sign Language Learning App">
                    </div>
                    <div>
                        <label>Company / Institute</label>
                        <input type="text" name="proj_company" placeholder="School Capstone Project">
                    </div>
                </div>
                <div class="field-row single">
                    <div>
                        <label>Description</label>
                        <textarea name="proj_desc" placeholder="Brief description of the project or work done"></textarea>
                    </div>
                </div>
                <div class="field-row single">
                    <div>
                        <label>Tools / Technologies Used</label>
                        <input type="text" name="proj_tools" placeholder="Figma, PHP, Java">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Certifications</legend>
                <div class="field-row">
                    <div>
                        <label>Certification Name</label>
                        <input type="text" name="cert_name" placeholder="Networking Basics">
                    </div>
                    <div>
                        <label>Institute / Year</label>
                        <input type="text" name="cert_info" placeholder="CISCO, 2025">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Languages</legend>
                <div class="field-row single">
                    <div>
                        <label for="languages1">Languages #1</label>
                        <input type="text" id="languages1" name="languages1" placeholder="English">
                    </div>
                    <div>
                        <label for="languages2">Languages #2</label>
                        <input type="text" id="languages2" name="languages2" placeholder="Filipino">
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="submit-btn">Generate Resume</button>
        </form>
    </div>
</body>
</html>