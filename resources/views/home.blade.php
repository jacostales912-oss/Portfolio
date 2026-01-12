<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Norman Costales | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/png">
    <script src="https://unpkg.com/three@0.128.0/build/three.min.js"></script>
    <script src="https://unpkg.com/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
</head>

<body>
    <nav class="liquid-glass-nav">
        <div class="nav-center">
            <a href="{{ url('/') }}" class="nav-link">
                <i class="fas fa-home"></i> Home
            </a>
            <a href="{{ url('/gallery') }}" class="nav-link">
                <i class="fas fa-image"></i> Gallery
            </a>
        </div>

        <div class="nav-right">
            <button id="modeToggleBtn">🌓</button>
            <div id="modeOptions" class="mode-options hidden">
                <span id="lightMode">Light Mode</span>
                <span id="darkMode">Dark Mode</span>
            </div>
        </div>
    </nav>


    <section class="full-screen-container">

        <!-- IMAGE -->
        <div class="profile-side">

            <img src="{{ asset('images/me.jpg') }}" class="profile-pic" alt="Handsome Right?" id="profilePic">

            <div id="imgModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modalImg">
                <div id="caption"></div>
            </div>


            <h2 class="name">Norman Jr Costales</h2>
            <p class="role">Web Development Trainee</p>

            <p class="tagline">
                Learning step by step while building experience in the real world.
            </p>

            <h3 class="social-title">Follow me on 👇</h3>

            <div class="social-under-tagline">

                <a href="https://facebook.com/ahman.costales" target="_blank" class="social-btn fb">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="https://instagram.com/_ynwja/" target="_blank" class="social-btn ig">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://tiktok.com/@ja.costales" target="_blank" class="social-btn tt">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
            
            <div id="three-container"></div>

        </div>

        <!-- CARDS -->
        <div class="cards">

            <div class="card">
                <h3>About Me</h3>
                <p class="details">I am Norman Jr Costales, a former first-year Bachelor of Science in Information
                    Technology (BSIT) student at Asian College of Technology. I began my college journey in 2024, but I
                    had to stop my studies due to financial reasons. Despite this, I remain committed to
                    learning and improving my skills through practical experience and self-study.
                    I completed a three-month training at Veritacore Inc. as a Floorplanner, where I developed strong
                    attention to detail, basic planning skills, and teamwork in a professional setting. Currently, I am
                    undergoing my On-the-Job Training (OJT) at AMLakas Corporation, gaining real-world exposure and
                    hands-on experience that continue to shape my professional growth.
                </p>

                <h3 class="details"> My Passion </h3>

                <p class="details">I am passionate about technology, self-improvement, and continuous learning. Even
                    though I am not currently enrolled in college, I stay motivated to build my skills, learn from real
                    work environments, and prepare myself for future opportunities in the IT field. I believe that
                    learning does not stop inside the classroom and that experience plays a vital role in personal and
                    professional development.
                    In my free time, I enjoy watching anime—especially My Hero Academia—and playing basketball. These
                    interests help me stay focused, disciplined, and inspired to keep moving forward despite challenges.
                </p>
            </div>

            <div class="card">
                <h3>Experience</h3>

                <section class="job">


                    <div class="job">
                        <h3>Floorplanner Trainee</h3>
                        <span>Veritacore Inc. — 3 Months Training</span>
                        <ul>
                            <li>Assisted in creating and organizing floor layouts</li>
                            <li>Developed attention to detail and planning skills</li>
                            <li>Worked collaboratively with team members</li>
                            <li>Adapted to a professional work environment</li>
                        </ul>
                    </div>

                    <div class="job">
                        <h3>On-the-Job Trainee (OJT)</h3>
                        <span>AMLakas Corporation — Present</span>
                        <ul>
                            <li>Currently gaining hands-on corporate experience</li>
                            <li>Assisting with assigned office and system tasks</li>
                            <li>Learning workplace discipline and teamwork</li>
                            <li>Improving technical and problem-solving skills</li>
                        </ul>
                    </div>

                </section>
            </div>

            <div class="card">
                <h2>Skills</h2>
                <p class="skills-tagline">Building practical IT skills while continuously learning and improving.
                </p>

                <ul class="skills-list">
                    <li>Basic Computer Troubleshooting</li>
                    <li>Microsoft Office (Word, Excel, PowerPoint)</li>
                    <li>Basic HTML & CSS</li>
                    <li>Basic PHP & Laravel (Beginner)</li>
                    <li>Layout Planning (Floor Planning)</li>
                    <li>Teamwork & Communication</li>
                    <li>Willingness to Learn</li>
                </ul>

            </div>

            <div class="card contact-card">
                <h3>Contact</h3>

                <div class="contact-cards">

                    <!-- EMAIL -->
                    <a href="mailto:jacostales912@gmail.com" class="contact-box" target="_blank">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <span class="label">Email</span>
                            <span class="value">jacostales912@gmail.com</span>
                        </div>
                    </a>

                    <!-- PHONE -->
                    <a href="tel:09538049422" class="contact-box">
                        <i class="fas fa-phone"></i>
                        <div>
                            <span class="label">Phone</span>
                            <span class="value">0953 804 9422</span>
                        </div>
                    </a>

                    <!-- LOCATION (EXACT PIN) -->
                    <a href="https://www.google.com/maps/place/10.354,123.869" target="_blank" class="contact-box">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <span class="label">Location</span>
                            <span class="value">Kalunasan, Cebu City</span>
                        </div>
                    </a>

                </div>
            </div>



    </section>

    
    <!-- CHAT WITH NORMAN BUTTON -->
    <div class="chat-launcher" id="chatLauncher">
        <i class="fas fa-comment-dots"></i>
        <span>Chat with Norman</span>
    </div>

    <!-- CHAT BOX -->
    <div class="chat-box" id="chatBox">

        <div class="chat-header">
            <div class="chat-user">
                <img src="{{ asset('images/me.jpg') }}" alt="Norman">
                <div>
                    <strong>Norman</strong>
                    <span class="status">● Online</span>
                </div>
            </div>
            <span id="closeChat" class="close-chat">✖</span>
        </div>

        <div class="chat-messages" id="chatMessages">
            <div class="bot-msg">
                Ayy what’s good 😎 you chattin’ with Norman, what you need?<br>
                Feel free to ask ‘bout my tech skills, training, or real-world grind 💼💻
            </div>
        </div>

        <div class="chat-input">
            <input type="text" id="chatInput" placeholder="Type a message...">
            <button id="sendMsg"><i class="fas fa-paper-plane"></i></button>
        </div>

    </div>
        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>