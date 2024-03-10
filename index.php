<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="constantino.css">
    <meta charset="UTF-8">
    <title>MY PROFILE</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1,
        p {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            color: #333;
        }

        .profile-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .profile-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .content {
            margin-top: 20px;
            text-align: left;
            display: none;
        }

        .content p {
            margin-bottom: 10px;
        }

        .video-container {
            max-width: 100%;
            text-align: center;
        }

        video {
            width: 100%;
            max-width: 600px;
        }

        /* Media Query for small screens */
        @media (max-width: 600px) {
            .profile-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="images.png" alt="Profile Image" width="150" height="150">
        <h1>Welcome to My Personal Website!</h1>
        <p>Hi, I'm Luis Emmanuel Constantino, currently in my 2nd year pursuing a degree in BSIT-MI at National University. Aspiring to become a software designer, I firmly believe that dedication, continuous learning, and faith in God will guide me towards realizing this ambition.</p>
    </header>

    <div class="profile-buttons">
        <button onclick="showContent('Home')">Home</button>
        <button onclick="showContent('About me')">About me</button>
        <button onclick="showContent('Skills')">Skills</button>
        <button onclick="showContent('Contact Information')">Contact</button>
        <button onclick="showContent('Social Media')">Social Media</button>
    </div>

    <div id="about-content" class="content"></div>
    <div id="skills-content" class="content"></div>
    <div id="contact-content" class="content"></div>
    <div id="social-media-content" class="content"></div>
    <a href="login.php" class="btn btn-dark">Logout</a>

    <div class="comment-section">
        <h4>Leave a Comment</h4>
        <form action="submit_comment.php" method="post" class="comment-form">
            <textarea name="comment" class="comment-textarea" placeholder="Your Feedback" required></textarea>
            <br>
            <button class="comment-submit">Submit</button>
        </form>
    </div>

    <script>
        function showContent(page) {
            var elementsToHide = [document.querySelector('header')];

            elementsToHide.forEach(function (element) {
                element.style.display = 'none';
            });

            var aboutContent = document.getElementById('about-content');
            var skillsContent = document.getElementById('skills-content');
            var contactContent = document.getElementById('contact-content');
            var socialMediaContent = document.getElementById('social-media-content');

            aboutContent.style.display = 'none';
            skillsContent.style.display = 'none';
            contactContent.style.display = 'none';
            socialMediaContent.style.display = 'none';

            if (page === 'About me') {
                aboutContent.innerHTML = "<p>Date of Birth: July 28, 2004</p>";
                aboutContent.innerHTML += "<p>Age: 19</p>";
                aboutContent.innerHTML += "<p>Status: Single</p>";
                aboutContent.innerHTML += "<p>Religion: Roman Catholic</p>";
                aboutContent.innerHTML += "<p>Nationality: Filipino</p>";
                aboutContent.innerHTML += "<p>Kinder at Maranatha Christian Academy</p>";
                aboutContent.innerHTML += "<p>Grade school at Villa Verde Elementary school</p>";
                aboutContent.innerHTML += "<p>Junior high school graduated at Maranatha Christian Academy</p>";
                aboutContent.innerHTML += "<p>Senior high school graduated at Maranatha Christian Academy</p>";
                aboutContent.innerHTML += "<p>BSIT-MI 2nd year College at National University</p>";
                aboutContent.innerHTML += "<p><b>HOBBIES:</b></p>";
                aboutContent.innerHTML += "<p>Reading Books</p>";
                aboutContent.innerHTML += "<p>Playing Tennis</p>";
                aboutContent.style.display = 'block';
            } else if (page === 'Skills') {
                skillsContent.innerHTML = "<p>HTML</p>";
                skillsContent.innerHTML += "<p>Python</p>";
                skillsContent.innerHTML += "<p>Linux</p>";
                skillsContent.innerHTML += "<p>Communication</p>";
                skillsContent.innerHTML += "<p>Leadership</p>";
                skillsContent.innerHTML += "<p>Teamwork</p>";
                skillsContent.style.display = 'block';
            } else if (page === 'Contact Information') {
                contactContent.innerHTML = "<p>Phone Number: 09568232754</p>";
                contactContent.innerHTML += "<p>Email: luisconstantino011@gmail.com</p>";
                contactContent.innerHTML += "<p>LinkedIn: <a href='https://www.linkedin.com/in/luis-constantino/' target='_blank'>Luis Constantino</a></p>";
                contactContent.style.display = 'block';
            } else if (page === 'Social Media') {
                socialMediaContent.innerHTML = "<p>My social media accounts:</p>";
                socialMediaContent.innerHTML += "<p>Facebook: <a href='https://www.facebook.com/Luis Constantino/' target='_blank'>Luis Constantino</a></p>";
                socialMediaContent.innerHTML += "<p>Twitter: <a href='https://twitter.com/@user172227' target='_blank'>@user172227</a></p>";
                socialMediaContent.innerHTML += "<p>Instagram: <a href='https://instagram.com/luis.constantino28' target='_blank'>luis.constantino28</a></p>";
                socialMediaContent.innerHTML += "<p>Github: <a href='https://Github.com/Luis082722' target='_blank'>Luis082722</a></p>";
                // Add more social media links as needed
                socialMediaContent.style.display = 'block';
            } else if (page === 'Home') {
                elementsToHide.forEach(function (element) {
                    element.style.display = 'block';
                });
            }
        }
    </script>
</body>

</html>
