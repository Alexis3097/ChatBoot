<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Oficial - Acumedic</title>
    <link rel="stylesheet" href="css/chatbot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <!-- chatbots seccion -->
        <section class="chatbot-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 titulo">
                    <h2 class="titulo-chat">Bienvenido a nuestro chat</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="chat"> -->
    <!-- footer -->
    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-logo">
          <figure class="figure-footer"><img src="img/acumedic-logo.png" alt=""></figure>
          <div class="desc">
            <p class="descripcion">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
              piece</p>
            <ul>
              <li><i class="icono fas fa-map-marker-alt"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
              <li><i class="icono far fa-envelope"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
              <li><i class="icono fas fa-phone"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
              <li><i class="icono far fa-clock"></i>
                <p>123 Lorem ipsum dolor sit amet, consectetur</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 colFooter">
          <div class="tituloFooter">
            <p>Links Frecuentes</p>
          </div>
          <div class="sublinks">
            <ul>
              <li><a>Homeopatia</a></li>
              <li><a>Homeopatia</a></li>
              <li><a>Homeopatia</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 colFooter">
          <div class="tituloFooter">
            <p>Links Frecuentes</p>
          </div>
          <div class="sublinks">
            <ul>
              <li><a>Homeopatia</a></li>
              <li><a>Homeopatia</a></li>
              <li><a>Homeopatia</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="toe">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="social-media">
            <p><i class="fab fa-facebook-f"></i></p>
            <p><i class="fab fa-instagram"></i></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="copyright">
            <p>Alexis Montoya - Manuel Martínez - Felipe Martínez TecNM <i class="far fa-copyright"></i>2020</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- footer -->
    <!-- section chatbox -->
    <div id="chat-circle" class="btn btn-raised">
    <div id="chat-overlay"></div>
    <i class="fas fa-comment-dots"></i>
</div>
<div class="chat-box">
    <div class="chat-box-header">
      <p>¡Pide una cita!</p>
        <span class="chat-box-toggle"><i style="color:#fff;" class="fas fa-times"></i></span>
    </div>
    <div class="chat-box-body">
        <div class="chat-box-overlay">
        </div>
        <div class="chat-logs">

        </div>
        <!--chat-log -->
    </div>
    <div class="chat-input">
        <form>
        <input type="text" name="chat" id="chat" placeholder="Preguntale algo">
            <!-- <input type="text" id="chat chat-input" name="chat" placeholder="Escribe algo..." /> -->
            <button type="submit" class="chat-submit" id="chat-submit"><i class="far fa-paper-plane"></i></button>
        </form>
    </div>
</div>
    <!-- section chatbox -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
</body>
</html>