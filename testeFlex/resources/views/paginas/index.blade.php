<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EnsinoFlex</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <style>
         
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: inter, sans-serif;
        }
        
        
        
        /* Container principal */
        .navbar-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        /* Logo */
        .navbar-brand {
            margin-left: 50px;
            display: flex;
            align-items: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #001F6B;
            text-decoration: none;
        }
        
        .navbar-brand img {
            width: 140px;
            height: 140px;
            margin-right: 8px;
        }
        
        /* Menu */
        .navbar-menu {
            /*margin-left: -300px;*/
            gap: 20px;
            font-size: 22px;
            display: flex;
            list-style: none;
        }
        
        .nav-item {
            position: relative;
            margin-right: 15px;
        }
        
        .nav-link {
            font-weight: 600;
            color: #001F6B;
            text-decoration: none;
            padding: 10px;
            display: block;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: #0033A0;
        }
        
        
        /* Botões */
        .navbar-buttons {
        
            gap: 15px;
            margin-right: 80px;
            display: flex;
            align-items: center;
        }
        
        .btn {
            height: 45px;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            text-align: center;
        }
        
        /* Botão Cadastrar */
        .btn-outline {
            width: 120px;
            color: #001F6B;
            border: 2px solid #001F6B;
            background-color: transparent;
            margin-right: 10px;
        }
        
        .btn-outline:hover {
            background-color: #001F6B;
            color: white;
        }
        
        /* Botão Login */
        .btn-primary {
            width: 120px;
            background-color: #001F6B;
            border: 2px solid #001F6B;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #0033A0;
            border-color: #0033A0;
        }
        
        .hero-section {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5rem 10%;
        }
        
        .hero-container {
            margin-left: -250px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
        }
        
        .hero-content {
            max-width: 800px;
        }
        
        .hero-content h1 {
            font-size: 4rem; /* Aumentando o tamanho do título */
            font-weight: bold;
            color: #001F6B;
            margin-bottom: 30px;
        }
        
        .hero-content p {
            font-size: 1.25rem; /* Aumentando o texto do parágrafo */
            color: #333;
            margin: 1rem 0;
            max-width: 600px;
            margin-bottom: 50px;
        }
        
        .input-group {
            display: flex;
            gap: 20px;
            margin-top: 1.5rem;
        }
        
        .input-group input {
            color: white;
            height: 55px;
            width: 400px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            background-color: #001e6b49;
            border-radius: 10px;
        }
        
        
        .input-group button {
            margin-left: 150px;
            height: 50px;
            width: 240px;
            background-color: #001F6B;
            color: #fff;
            border: none;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            border-radius: 10px;
        }
        
        .input-group button:hover {
            background-color: #0033A0;
            border-color: #0033A0;
        }
        
        
        .hero-shapes {
            display: flex;
            margin-left: 80px;
            gap: 40px;
        }
        
        .shape {
            background-color: #001F6B;
        }
        
        .rectangle {
            width: 230px;
            height: 400px;
            border-radius: 120px 120px 10px 90px;/*90px é são as bordas do canto superior*/
            object-fit: cover;
            
        }
        
        .circle {
            border-radius: 50%;
        }
        
        .small {
            width: 180px;
            height: 180px;
            border-radius: 120px 120px 120px 10px;/*90px é são as bordas do canto superior*/
            object-fit: cover;
        }
        
        .medium {
            margin-left: -230px;
            margin-top: 200px;
            width: 180px;
            height: 180px;
            border-radius: 120px 10px 120px 120px;/*90px é são as bordas do canto superior*/
            object-fit: cover;
            object-fit: contain;
        }
        
        .rectangle, .small, .medium {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Esconde qualquer parte que ultrapasse a div */
        }
        
        .rectangle img, .small img, .medium img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Faz o zoom automático para preencher a div */
            object-position: center; /* Centraliza a imagem */
        }
  
    </style>
</head>
<body>
   
 
  <nav class="navbar">
    <div class="navbar-container">
       
        <a class="navbar-brand" href="#">
            <img src=" {{url ('/img/logo.png')}}" alt="EnsinoFlex">
        </a>
 
       
       
       
        <div class="navbar-buttons">
            <a href="{{ url('/auth/register') }}" class="btn btn-outline">Cadastrar</a>
            <a href="{{ url('/auth/login') }}" class="btn btn-primary">Login</a>
        </div>
    </div>
</nav>
 
<section class="hero-section">
  <div class="hero-container">
      <div class="hero-content">
          <h1>Planeje sua carreira, <br> alcance o sucesso <span>✦</span></h1>
          <p>Planeje seu crescimento profissional de forma estratégica com uma plataforma que te ajuda a definir objetivos, organizar seu desenvolvimento e alcançar novas oportunidades. Comece agora e transforme seu futuro!</p>
         
          <div class="input-group">
             <a href="{{ url('/auth/register') }}">
                <button>Começar </button>
             </a>
              
          </div>
      </div>
 
      <div class="hero-shapes">
          <div class="shape rectangle">
            <img src="img/imagem1.png" alt="">
          </div>
          <div class="shape circle small">
            <img src="img/imagem2.png" alt="">
          </div>
          <div class="shape circle medium">
            <img src="img/imagem3.png" alt="">
          </div>
      </div>
  </div>
</section>
 
<div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>
</html>