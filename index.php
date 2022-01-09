<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utopia</title>
    <link rel="icon" href="img/utopia.png">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <section class="sec">
        <video src="https://cdn2.unrealengine.com/homepage-opener-5a55a50aaa4c.mp4" type="video/mp4" autoplay muted loop></video>
        <h2>Utopia</h2>
        <div class="dot"></div>
        <ul class="contact">
            <li>
                <a onclick="popupToggle();" href="#">Contact</a>
                <div id="popup">
                    <div class="content">
                        <h3>Welcome</h3>
                        <p>Get in touch!</p>
                        <div class="inputBox">
                            <form action="enviar.php" id="capform" class="formulario" method="post">
                                <input type="text" id="nombre" class="nombre" name="nombre" placeholder="UT Alias (Feel free to get one!)" required>
                                <input type="email" id="email" class="email" name="email" placeholder="Email" required multiple>
                                <textarea id="mensaje" class="mensaje" name="mensaje" placeholder="Message" required></textarea>
                                <input type="submit" value="Send" class="btn">
                            </form>
                        </div>
                    </div>        
                    <a class="close" onclick="popupToggle();"><img src="img/close.png" alt="close"></a>
                </div>
            </li>
        </ul>
    </section>
    <script src="js/popup.js"></script>
    <script src="js/colordblclick.js"></script>
</body>
</html>