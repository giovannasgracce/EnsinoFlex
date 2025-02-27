<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center text-blue-900">Cadastre-se</h2>
        <p class="text-gray-600 text-center mt-2">Preencha seus dados para continuar</p>
       
        <form class="mt-6">
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">E-mail</label>
                <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 outline-none">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Senha</label>
                <input type="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 outline-none">
            </div>
           
            <button class="w-full bg-blue-900 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">Cadastrar</button>
        </form>
       
        <p class="text-center text-gray-600 mt-4">Já tem uma conta? <a href="{{ url('/auth/login') }}" class="text-blue-900 font-medium">Faça login</a></p>
    </div>
    <a href="/" class="absolute top-4 left-4">
        <button class="bg-blue-600 text-white py-3 px-3 rounded-[50%] font-semibold hover:bg-blue-500 transition-all duration-200 shadow-lg flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
    </a>

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
 