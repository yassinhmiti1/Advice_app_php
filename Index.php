<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once(__DIR__."/Controllers/auth_user.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login app</title>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Stack+Sans+Text:wght@200..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");
            .first-page {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: auto;
                height: 100vh;
                background-color: var(--back-color);
                gap: 50px;
                flex-direction: column;
                transition:
                    transform 0.8s ease-in-out,
                    opacity 0.8s ease-in-out,
                    visibility 0.8s ease-in-out;
            }

            .slide-up {
                transform: translateY(-100vh);
                opacity: 0;
            }

            .text {
                width: 6ch;
                font-size: 3em;
                animation:
                    typing 1s steps(8),
                    blink 0.5s step-end infinite alternate;
                white-space: nowrap;
                border-right: 3px solid transparent;
                overflow: hidden;
                font-family: Corinthia;
                font-weight: bold;
                color: var(--text-color);
            }

            @keyframes typing {
                from {
                    width: 0;
                }
            }

            @keyframes blink {
                50% {
                    border-color: transparent;
                }
            }

            .spinner {
                border: 4px solid rgba(0, 0, 0, 0.1);
                width: 36px;
                height: 36px;
                border-radius: 50%;
                border-left-color: var(--seconde-text-color);
                animation: spin 1s linear infinite;
            }
            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }

            .loading {
                justify-self: center;
                align-self: center;
                padding: 15px;
                border-radius: 5px;
                background-color: var(--back-color);
                border: none;
            }
        </style>
    </head>
    <body>
        <div class="first-page" id="first-page">
            <div class="text">Welcome!</div>
            <div class="loading">
                <div class="spinner"></div>
            </div>
        </div>
      <script>
        const fpage = document.getElementById('first-page');
  
setTimeout(()=>{
  fpage.classList.add('slide-up');
}, 3000);
        <?php $destination =(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) ? "../Vues/home.php" : "../Vues/log.php"; ?>
        const target = "<?= $destination ?>";
        setTimeout(()=>{
          window.location.href= target;
        }, 3900);
      </script>
    </body>
</html>
