<?php
session_start();
include "../includes/navbar.php";
?>

<h2 class="fadeTitle">Student Login</h2>

<?php 
if(isset($_SESSION['error'])) { 
    echo "<p class='error'>" . $_SESSION['error'] . "</p>"; 
    unset($_SESSION['error']); 
} 
?>

<form method="post" action="../controllers/AuthController.php" class="loginForm">

    <input type="text" name="roll" placeholder="Roll Number" required class="animatedInput">
    <input type="password" name="password" placeholder="Password" required class="animatedInput">
    <button type="submit" name="student_login" class="animatedBtn">Login</button>

</form>

<style>
/* BODY */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

/* TITLE */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.fadeTitle {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInTitle 1s forwards;
}

@keyframes fadeInTitle {
    to { opacity: 1; transform: translateY(0); }
}

/* FORM */
.loginForm {
    width: 90%;
    max-width: 400px;
    margin: 0 auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    animation: fadeInUp 0.8s ease forwards;
}

/* INPUTS */
.animatedInput {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 2px solid #ccc;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.animatedInput:focus {
    border-color: #00bcd4;
    box-shadow: 0 0 8px rgba(0,188,212,0.3);
    outline: none;
}

/* BUTTON */
.animatedBtn {
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    background: #00bcd4;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.animatedBtn:hover {
    background: #0097a7;
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

/* ERROR MESSAGE */
.error {
    color: #dc3545;
    font-weight: bold;
    margin: 10px 0;
    animation: shake 0.4s;
}

/* Fade-in animation for form */
@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* Shake animation for error */
@keyframes shake {
    0% { transform: translateX(0); }
    20% { transform: translateX(-5px); }
    40% { transform: translateX(5px); }
    60% { transform: translateX(-5px); }
    80% { transform: translateX(5px); }
    100% { transform: translateX(0); }
}
</style>
