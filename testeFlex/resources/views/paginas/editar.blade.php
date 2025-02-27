<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center text-blue-900">Editar Aluno</h2>
        <p class="text-gray-600 text-center mt-2">Preencha os dados abaixo</p>
       
        <form action="../atualizar/{{$dado->id}}" method="GET" class="mt-6">
            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-medium">Nome</label>
                <input type="text" id="nome" name="nome" value="{{$dado->nome}}" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div class="mb-4">
                <label for="telefone" class="block text-gray-700 font-medium">Telefone</label>
                <input type="text" name="telefone" id="telefone" value="{{$dado->telefone}}" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 outline-none">
            </div>

            <div class="mb-4">
                <label for="cpf" class="block text-gray-700 font-medium">CPF</label>
                <input type="text" name="cpf" id="cpf" value="{{$dado->cpf}}" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 outline-none" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input name="email" id="email" value="{{$dado->email}}" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 outline-none" required>
            </div>

            <div class="mb-4">
                <label for="senha" class="block text-gray-700 font-medium">Senha</label>
                <input name="senha" id="senha" value="{{$dado->cpf}}" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 outline-none" required>
            </div>

            <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">Salvar</button>

            <!-- Botão para abrir o modal -->
            <button type="button" onclick="abrirModal()" class="w-full mt-3 bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-500 transition">
                Excluir
            </button>
        </form>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
        <div class="bg-white rounded-lg shadow-xl p-6 w-96">
            <h3 class="text-lg font-semibold text-gray-900">Deseja excluir este aluno?</h3>
            <p class="text-sm text-gray-500 mt-2">Essa ação não poderá ser desfeita.</p>

            <div class="mt-4 flex justify-end space-x-3">
                <button onclick="fecharModal()" class="bg-gray-300 text-gray-900 px-4 py-2 rounded-lg hover:bg-gray-400 transition">Cancelar</button>
                <a class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-500 transition" href="/excluir/{{$dado->id}}">Excluir</a>
            </div>
        </div>
    </div>

    <a href="/" class="absolute top-4 left-4">
        <button class="bg-blue-600 text-white py-3 px-3 rounded-[50%] font-semibold hover:bg-blue-500 transition-all duration-200 shadow-lg flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
    </a>


    <script>
        function abrirModal() {
            document.getElementById("modal").classList.remove("hidden");
        }

        function fecharModal() {
            document.getElementById("modal").classList.add("hidden");
        }
    </script>

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
