<!DOCTYPE html>
<html>
<head>
    <title>Tamayo - Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f8f9fa;
            scroll-behavior: smooth;
        }
        .navbar {
            background-color: #1a4674 !important;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-nav li a {
            color: #fff !important;
            font-weight: 500;
            padding: 15px 20px;
            transition: all 0.3s ease;
        }
        .navbar-nav li a:hover {
            background-color: #2a5a8a;
        }
        section {
            min-height: 100vh;
            padding: 80px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .section-content {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }
        #home {
            background: linear-gradient(rgba(26, 70, 116, 0.8), rgba(26, 70, 116, 0.9)), url(image/header.jpg);
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }
        .home-content {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .lead {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .btn-contact {
            background-color: #fff;
            color: #1a4674;
            padding: 12px 30px;
            border: none;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .btn-contact:hover {
            background-color: #f0f0f0;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .page-header {
            text-align: center;
            margin-bottom: 50px;
            padding-bottom: 20px;
            border-bottom: 2px solid #1a4674;
        }
        .work-item {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .work-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        img.work-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .work-item:hover img {
            transform: scale(1.05);
            opacity: 0.8;
        }
        .about-panel {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            margin: 0 auto;
            max-width: 900px;
        }
        .panel-heading {
            background-color: #1a4674;
            color: white;
            padding: 20px;
        }
        .panel-body {
            padding: 30px;
        }
        img.profile-pic {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 5px solid #1a4674;
            margin: 0 auto 30px;
            display: block;
        }
        .skills-section {
            background-color: #f0f5ff;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .form-control {
            border-radius: 30px;
            padding: 12px 20px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: #1a4674;
            box-shadow: 0 0 5px rgba(26, 70, 116, 0.3);
        }
        textarea.form-control {
            min-height: 150px;
            border-radius: 15px;
        }
        .btn-submit {
            background-color: #1a4674;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #2a5a8a;
            transform: translateY(-3px);
        }
        #contact {
            background: linear-gradient(to right, #e6f0ff, #f0f5ff);
        }
        .col-text {
            line-height: 1.6;
            margin-bottom: 30px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home" style="color: #fff !important; font-weight: 700;">Joaquin Tamayo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#work">What I Do</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <div class="home-content">
            <h1>Joaquin Elijah P. Tamayo</h1>
            <p class="lead">Welcome to my world. The life of a Programmer.</p>
            <a href="#contact" class="btn btn-contact">Contact Me</a>
        </div>
    </section>

    <!-- Work Section -->
    <section id="work">
        <div class="section-content">
            <div class="page-header">
                <h1>What I Do</h1>
            </div>
            <div class="work-grid">
                <div class="work-item">
                    <img src="image/port1.png" class="work-img" alt="Project 1">
                </div>
                <div class="work-item">
                    <img src="image/port2.png" class="work-img" alt="Project 2">
                </div>
                <div class="work-item">
                    <img src="image/port3.png" class="work-img" alt="Project 3">
                </div>
                <div class="work-item">
                    <img src="image/port4.png" class="work-img" alt="Project 4">
                </div>
                <div class="work-item">
                    <img src="image/port5.png" class="work-img" alt="Project 5">
                </div>
                <div class="work-item">
                    <img src="image/port6.png" class="work-img" alt="Project 6">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="section-content">
            <div class="page-header">
                <h1>About Me</h1>
            </div>
            <div class="col-text">
                Hi! I'm Joaquin Elijah P. Tamayo (GitHub: joaquintamayo), a passionate and driven computer science student at New Era University. 
                I specialize in database management and enjoy solving complex problems with clean, efficient code. My journey into tech began 
                when I entered the BS Computer Science program in 2022 and I've been growing ever since.
                <br><br>
                I hold multiple certifications, including Oracle Cloud Infrastructure and Data Management Foundations, which showcase my 
                commitment to learning and staying ahead in the ever-evolving tech landscape. I'm also certified in SQL and Relational Databases,
                and I actively apply these skills in real-world projects and academic work.
                <br><br>
                My technical toolkit includes Java, JavaScript, and tools like IBM DB2 Cloud, Lucidchart, Jaspersoft Studio, and Eclipse. 
                Whether I'm building systems, creating data models, or visualizing workflows, I always aim to produce thoughtful, user-friendly solutions.
                <br><br>
                Beyond code, I'm someone who thrives on collaboration, continuous learning, and turning ideas into impact. If you're looking 
                for someone who brings both technical skill and curiosity to the table, let's connect!
            </div>
            <div class="about-panel">
                <div class="panel-heading text-center">
                    <h2>Joaquin Elijah P. Tamayo 👋</h2>
                </div>
                <div class="panel-body">
                    <img src="image/me.JPG" class="profile-pic" alt="Profile Picture">
                    <p class="lead text-center">I'm Joaquin Elijah P. Tamayo, a passionate coder with a knack for database management. I thrive on diving into complex problems and devising elegant solutions. My tech journey began with the BS Computer Science program, and I've been exploring and learning since then. Find my open-source projects on GitHub: <a href="https://github.com/joaquintamayo" target="_blank" style="color: #1a4674;">@joaquintamayo</a></p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skills-section">
                                <h3 class="text-center" style="color: #1a4674; margin-bottom: 20px;">Education 📚</h3>
                                <div class="education-item">
                                    <h4>BS Computer Science</h4>
                                    <p>New Era University</p>
                                    <p><em>2022-Present</em></p>
                                </div>
                                
                                <h3 class="text-center" style="color: #1a4674; margin: 30px 0 20px;">Certification 🏅</h3>
                                <ul class="list-unstyled">
                                    <li style="margin-bottom: 15px;">
                                        <a href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=6F5879057F0F42C7084BB50980E8DBDC51D1FEA6F88FA0A6D1F2DCCB78D73FD2&fbclid=IwAR18H6eI38EPY6XbPYi8piKjmVi1rsbX2KcSuc9ntb8OVvPVV52ci2nLi-U" target="_blank" style="color: #1a4674;">
                                            Oracle Cloud Infrastructure 2023 AI Certified Foundations Associate
                                        </a>
                                    </li>
                                    <li style="margin-bottom: 15px;">
                                        <a href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=FBE0674BD6FD47DD5A100FE437D6E8D8A52440D4CFD75C3746485E61E76ABE67&fbclid=IwAR2gld1LVvPygUtgFDQwYsk6yfYfcQS_oEq8s5n3onq_bURNr-yZZwr0zQE" target="_blank" style="color: #1a4674;">
                                            Oracle Cloud Data Management 2023 Certified Foundations Associate
                                        </a>
                                    </li>
                                    <li style="margin-bottom: 15px;">
                                        <a href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=19AE80FA3AE476AF8FFDF3621FBF4BD43F8DF91B4805AF7DA5B5B02019D24EFE&fbclid=IwAR0SJLEKWxisfrQMgpEiWDdlCZrSZ5IBaE7ED_j1T8yseAKXpw0oYXzmm80" target="_blank" style="color: #1a4674;">
                                            Oracle Cloud Infrastructure 2023 Certified Foundations Associate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://courses.cognitiveclass.ai/certificates/d8923d1d47c847979091dbb031ba47d2" target="_blank" style="color: #1a4674;">
                                            SQL and Relational Databases 101
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="skills-section">
                                <h3 class="text-center" style="color: #1a4674; margin-bottom: 20px;">Skills 💼</h3>
                                
                                <div class="skill-category">
                                    <h4>Programming 💻</h4>
                                    <div class="skill-tags">
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Java</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Javascript</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">PHP</span>
                                    </div>
                                </div>
                                
                                <div class="skill-category" style="margin-top: 15px;">
                                    <h4>Databases 🛢️</h4>
                                    <div class="skill-tags">
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">IBM DB2 Cloud</span>
                                    </div>
                                </div>
                                
                                <div class="skill-category" style="margin-top: 15px;">
                                    <h4>Web & UI/UX 🖥️</h4>
                                    <div class="skill-tags">
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">HTML</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">CSS</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Bootstrap</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Figma</span>
                                    </div>
                                </div>
                                
                                <div class="skill-category" style="margin-top: 15px;">
                                    <h4>Data & Visualization 📊</h4>
                                    <div class="skill-tags">
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Tableau</span>
                                    </div>
                                </div>
                                
                                <div class="skill-category" style="margin-top: 15px;">
                                    <h4>Tools 🔧</h4>
                                    <div class="skill-tags">
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Lucidchart</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Jaspersoft Studio</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Eclipse</span>
                                        <span class="label" style="background-color: #1a4674; padding: 5px 10px; border-radius: 3px; margin: 3px; display: inline-block;">Canva</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="section-content">
            <div class="page-header">
                <h1>Contact Me</h1>
            </div>
            <form class="contact-form">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Name" type="text"/>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Email" type="email"/>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text"/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Comments" rows="5"></textarea>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-submit" type="submit">Submit</button>
                </div>
            </form>
            
            <div class="contact-info text-center" style="margin-top: 40px;">
                <h3 style="color: #1a4674; margin-bottom: 20px;">Connect With Me 📞</h3>
                <p>
                    <a href="#" style="color: #1a4674; text-decoration: none; margin: 0 10px;">
                        <i class="glyphicon glyphicon-link"></i> LinkedIn
                    </a>
                    <a href="mailto:tamayojoaquinelijah@gmail.com" style="color: #1a4674; text-decoration: none; margin: 0 10px;">
                        <i class="glyphicon glyphicon-envelope"></i> tamayojoaquinelijah@gmail.com
                    </a>
                    <a href="https://github.com/joaquintamayo" style="color: #1a4674; text-decoration: none; margin: 0 10px;">
                        <i class="glyphicon glyphicon-book"></i> GitHub: joaquintamayo
                    </a>
                </p>
            </div>
        </div>
    </section>
    <!-- Footer Section -->
    <footer style="background-color: #1a4674; color: white; text-align: center; padding: 20px 0; margin-top: 0;">
        <div class="container">
            <p>&copy; 2025 Joaquin Elijah P. Tamayo | <a href="https://github.com/joaquintamayo" style="color: white; text-decoration: none;">GitHub: joaquintamayo</a></p>
        </div>
    </footer>