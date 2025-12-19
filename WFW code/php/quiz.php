<!DOCTYPE html>
<html lang="esn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../CSS/fixedlayout.css" rel="stylesheet" />
    <link href="../CSS/quiz.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
<div id="navbar">
    <a href="index.php" id="logo">White Flag Web WFW</a>
    <div id="navbar-right">
      <a href="">Map</a>
      <a href="register.php">Register</a>
      <a href="quiz.php">Quiz</a>
      <a href="aboutus.php">About Us</a>
      <a href="foodbank.php">Hotline & Foodbank</a>
    </div>
</div>

<div class="start_btn"><button>Are you ready for the quiz?</button></div>
    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>30 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it count as wrong answer.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. The answer would become green if the answer is correct.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>
    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">White Flag Web Quiz</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">30</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>
        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>
    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>

    <script src="../JavaScript/question.js"></script>
    <script src="../JavaScript/script.js"></script>

</body>
</html>