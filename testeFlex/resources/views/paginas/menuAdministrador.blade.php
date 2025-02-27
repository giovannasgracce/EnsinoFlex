<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         
         @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        
         ::-webkit-scrollbar {
            height: .1rem;
            width: .5rem;
        }
 
        ::-webkit-scrollbar-track {
            background-color: #001F6B;
        }
 
        ::-webkit-scrollbar-thumb {
            background-color: #0033A0; 
            border-radius: 5rem;
        }

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
            width: 150px;
            height: 150px;
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
        
        /* Botão Login */
        .btn-primary {
            width: 120px;
            color: #001F6B;
            border: 2px solid #001F6B;
            background-color: transparent;
            margin-right: 10px;
        }
        
        .btn-primary:hover {
            background-color: #001F6B;
            color: white;
        }

        .team-section {
            margin-top: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
 
        .team-title {
            font-size: 24px;
            font-weight: bold;
            color: #001F6B;
        }
 
        .underline {
            width: 50px;
            height: 4px;
            background-color: #001F6B;
            margin: 5px auto;
            border-radius: 2px;
        }
 
        .team-text {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }
 
 
        

        
        /*main*/
        
        .container {
        justify-content: center;
        margin-top: 150px;
        margin-left: 160px;
        }
        
        #card1 {
        height: 300px;
        width: 400px;
        border-radius: 20px;
        background-color: #0033A0;
        cursor:pointer;
        position: relative;
        z-index: 0;
        overflow: hidden;
        text-decoration: none;
        }
        
        
        
        #card2 {
            margin-top: -300px;
            margin-left: 450px;
            height: 300px;
            width: 400px;
            border-radius: 20px;
            background-color: #0033A0;
            cursor:pointer;
            position: relative;
            z-index: 0;
            overflow: hidden;
            text-decoration: none;
        }
        
        #card3 {
            margin-top: -300px;
            margin-left: 900px;
            height: 300px;
            width: 400px;
            border-radius: 20px;
            background-color: #0033A0;
            cursor:pointer;
            position: relative;
            z-index: 0;
            overflow: hidden;
            text-decoration: none;
        }
        
        #card4 {
            margin-top: 50px;
            height: 300px;
            background-color: #0033A0;
            width: 1300px;
            border-radius: 20px;
            cursor:pointer;
            position: relative;
            z-index: 0;
            overflow: hidden;
            text-decoration: none;
        }
        
        #card5 {
            margin-top: 50px;
            height: 300px;
            background-color: #1A1A1A;
            width: 1300px;
            border-radius: 20px;
            cursor:pointer;
            position: relative;
            z-index: 0;
            overflow: hidden;
            text-decoration: none;
        }
        
        #card6 {
        margin-top: 50px;
        height: 300px;
        width: 400px;
        border-radius: 20px;
        background-color: #1A1A1A;
        cursor:pointer;
        position: relative;
        z-index: 0;
        overflow: hidden;
        text-decoration: none;
        }
        
        
        
        #card7 {
            margin-top: -300px;
            margin-left: 450px;
            height: 300px;
            width: 400px;
            border-radius: 20px;
            background-color: #1A1A1A;
            cursor:pointer;
            position: relative;
            z-index: 0;
            overflow: hidden;
            text-decoration: none;
        }
        
        #card8 {
            margin-top: -300px;
            margin-left: 900px;
            height: 300px;
            width: 400px;
            border-radius: 20px;
            background-color: #1A1A1A;
            cursor:pointer;
            position: relative;
            z-index: 0;
            overflow: hidden;
            text-decoration: none;
        }
        
        
        
        /*conteudo cards*/
        .title-1 {
            margin-left: 40px;
            margin-top: 50px;
            color: #ffffff;
            font-size: 1.8em;
            line-height: normal;
            font-weight: 700;
            margin-bottom: 0.5em;
        }
        
        
        .p1 {
            margin-top: 30px;
            margin-left: 40px;
            font-size: 1em;
            line-height: 1.5em;
            color: #ffffff;
        
        
        }
        
        .btn1 {
        margin-top: 20px;
        margin-left: 320px;
        background: none;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        
        .btn1:hover {
        transform: scale(1.1);
        }
        
        .btn1:hover .circle {
        background-color: #bbb;
        }
        
        
        .circle {
        width: 50px;
        height: 50px;
        background-color: #ddd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s;
        }
        
        svg {
        transition: transform 0.3s ease;
        }
        
        .btn1:hover svg{
        transform: translateX(3px);
        }
        
        
        .p2 {
        max-width: 1200px;
        margin-top: 30px;
        margin-left: 40px;
        font-size: 1em;
        line-height: 1.5em;
        color: #ffffff;
        }
        
        .btn2 {
        margin-top: 30px;
        margin-left: 1220px;
        background: none;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        
        .btn2:hover {
        transform: scale(1.1);
        }
        
        .btn2:hover .circle {
        background-color: #bbb;
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
                <a href="{{ url('/auth/login') }}" class="btn btn-primary">Sair</a>
            </div>
        </div>
    </nav>

    <section class="team-section fade-in ">
        <h2 class="team-title">Seja bem-vindo à administração!</h2>
        <div class="underline"></div>
        <p class="team-text">Nossa equipe é formada apenas pelos melhores talentos!</p>
    </section>

    <main>
        <div class="container">
            <div class="card1" id="card1">
                    <h2 class="title-1">Consultar Professor</h2>
                    <p class="p1">Precisa verificar detalhes sobre um professor? Consulte agora o perfil completo e todas as informações relevantes.</p>
                    <a href="ConsultarProfessor.php">
                        <button class="btn1">
                            <div class="circle">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="19" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#00000091" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                            </div>
                        </button>
                    </a>
                </div>


                <div class="card1" id="card2">
                    <h2 class="title-1">Cadastrar Professor</h2>
                        <p class="p1">Como administrador, você pode expandir sua equipe de educadores e oferecer mais oportunidades de aprendizado. Cadastre um novo professor agora e amplie.</p>
                        <a href="CadastrarProfessor.php">
                            <button class="btn1">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="22" width="19" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#00000091" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                                </div>
                            </button>
                        </a>
                </div>
                <div class="card1" id="card3">
                    <h2 class="title-1">Excluir Professor</h2>
                        <p class="p1">Se necessário, você pode remover rapidamente um professor da plataforma. Exclua um professor agora e mantenha sua equipe sempre atualizada.</p>
                        <a href="ExcluirProfessor.php">
                            <button class="btn1">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="22" width="19" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#00000091" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                                </div>
                            </button>
                        </a>
                </div>
                <div class="card4" id="card4">
                    <h2 class="title-1">Atualizar Professor</h2>
                            <p class="p2">Manter as informações dos seus professores sempre atualizadas é essencial para uma gestão eficiente e organizada. Atualize agora os dados do professor e garanta que sua plataforma esteja sempre precisa, completa e pronta para atender às necessidades da sua instituição.</p>
                            <a href="AtualizarProfessor.php">
                                <button class="btn2">
                                    <div class="circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="22" width="19" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#00000091" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                                    </div>
                                </button>
                            </a>
                </div>
        </div>
    </main>

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