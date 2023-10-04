<?php 
include_once '../home/login/Register_database.php'; 
include_once '../home/db/database.class.php';
include_once '../home/db/session.class.php';
session::start();
Database::make_conn();
$score = Database::get_score($_SESSION['team_id']);
$tname = Database::get_tname($_SESSION['team_id']);
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Byte Buster - Help</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/flipclock.css">
    <link rel="stylesheet" href="assets/css/bootstrap4-neon-glow.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/particles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css">
    <style>
        .countdown {
            font-size: 5em;
            text-align: center;
        }
        
        /* Animation styles */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .pulse {
            animation-name: pulse;
            animation-iteration-count: infinite;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="../index.php" class="pl-md-0 p-3 text-light">Home</a>
                        <a href="../Website/scoreboard.php" class="p-3 text-decoration-none text-light active">Leaderboard</a>
                        <!-- <a href="../Website/scoreboard.php" class="p-3 text-decoration-none text-light active">Completed Challenges</a> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section class="particles-js-canvas-el">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <br><br><br>
                    <a style="font-size: xx-large;color:gold" class="animated pulse">Byte Busters CTF Event - Help</a>
                </div>
                <!-- Your content goes here -->
                <div class="col-md-8">
                    <h2>Table of Contents</h2>
                    <ol>
                        <li><a href="#introduction">Introduction</a></li>
                        <li><a href="#getting-started">Getting Started</a></li>
                        <li><a href="#rules-and-guidelines">Rules and Guidelines</a></li>
                        <li><a href="#scoring">Scoring</a></li>
                        <li><a href="#hints-and-assistance">Hints and Assistance</a></li>
                        <li><a href="#reporting-issues">Reporting Issues</a></li>
                        <li><a href="#prizes">Prizes</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ol>
                    <div class="content" id="introduction">
                        <h2>1. Introduction</h2>
                        <p>Welcome to our Capture The Flag (CTF) event! This competition is designed to test your cybersecurity skills, problem-solving abilities, and creativity. The objective is to find hidden flags within various challenges, each representing a unique security vulnerability or puzzle.</p>
                    </div>

                    <div class="content" id="getting-started">
                        <h2>2. Getting Started</h2>
                        <ul>
                            <li>Registration: Make sure you've registered for the event. If you haven't, contact the organizers for assistance.</li>
                            <li>Accessing Challenges: Log in to the CTF platform using your registered credentials. You'll see a list of available challenges.</li>
                            <li>Selecting Challenges: Browse through the challenges and choose the one that interests you. Click on it to get started.</li>
                        </ul>
                    </div>

                    <div class="content" id="rules-and-guidelines">
                        <h2>3. Rules and Guidelines</h2>
                        <ul>
                            <li>Fair Play: The CTF event is meant to be a fair competition. Cheating, sharing answers, or exploiting vulnerabilities in the platform itself is strictly prohibited.</li>
                            <li>Legal Compliance: Ensure that your participation adheres to all applicable laws and regulations. Unauthorized access to systems outside the scope of the event is strictly forbidden.</li>
                            <li>Respect: Treat other participants, organizers, and systems with respect and courtesy. Any form of harassment will not be tolerated.</li>
                        </ul>
                    </div>

                    <div class="content" id="scoring">
                        <h2>4. Scoring</h2>
                        <ul>
                            <li>Flag Submission: Each challenge contains a hidden flag. Once you find it, submit it through the CTF platform for points.</li>
                            <li>Scoring System: Points are awarded based on the difficulty and complexity of the challenge. Some challenges may have a time component that affects scoring.</li>
                            <li>Leaderboard: The leaderboard displays the rankings based on the total points earned.</li>
                        </ul>
                    </div>

                    <div class="content" id="hints-and-assistance">
                        <h2>5. Hints and Assistance</h2>
                        <ul>
                            <li>Hints: If you're stuck on a challenge, you can request a hint through the CTF platform. Hints may provide you with guidance or a nudge in the right direction.</li>
                            <li>Community Forums: Engage with fellow participants on the provided community forums. Share insights, ask for help, or discuss strategies.</li>
                        </ul>
                    </div>

                    <div class="content" id="reporting-issues">
                        <h2>6. Reporting Issues</h2>
                        <ul>
                            <li>Technical Issues: If you encounter technical problems with the platform, report them immediately to the organizers.</li>
                            <li>Security Concerns: If you identify a potential security issue or vulnerability in a challenge, please report it promptly.</li>
                        </ul>
                    </div>

                    <div class="content" id="prizes">
                        <h2>7. Prizes</h2>
                        <p>Winners: The top performers will be eligible for exciting prizes. Details about prizes and distribution will be communicated at the end of the event.</p>
                    </div>

                    <div class="content" id="contact">
                        <h2>8. Contact</h2>
                        <p>For any queries, concerns, or clarifications, please contact the event organizers via:</p>
                        <ul>
                            <li>Email: <a href="mailto:groooot007@gmail.com">Byte Busters CTF Email</a></li>
                            <li>Discord: <a href="https://discord.gg/EbBDNW4vyp">Byte Busters CTF Discord</a></li>
                        </ul>
                    </div>

                    <p>We hope you have a fantastic time participating in the CTF event! Good luck, and may the best hacker win!</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        function sendAndReceiveData() {
            var fname = "John";
            var lname = "Doe";
            var url = "countdown.php?fname=" + fname + "&lname=" + lname;

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.open("GET", url);
            xhttp.send();
        }

        setInterval(sendAndReceiveData, 1000);
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/flipclock.min.js"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
