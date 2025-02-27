<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Administrador</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-4xl overflow-x-auto shadow-lg rounded-lg">
        <table class="min-w-full border-collapse border border-gray-300 text-gray-700">
            <thead>
                <tr class="bg-blue-900 text-white">
                    <th class="py-3 px-4 border border-gray-300">Código</th>
                    <th class="py-3 px-4 border border-gray-300">Nome</th>
                    <th class="py-3 px-4 border border-gray-300">Telefone</th>
                    <th class="py-3 px-4 border border-gray-300">CPF</th>
                    <th class="py-3 px-4 border border-gray-300">Email</th>
                    <th class="py-3 px-4 border border-gray-300">Ações</th>
                </tr>
            </thead>   
            <tbody>
                
                      <?php $rowColor = 'bg-blue-100'; ?>
                @foreach($ids as $id)
                    <tr class="<?php echo $rowColor; ?> border border-gray-300">
                        <td class="py-2 px-4 border border-gray-300"><?php echo $id["id"]; ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?php echo $id["nome"]; ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?php echo $id["telefone"]; ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?php echo $id["cpf"]; ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?php echo $id["email"]; ?></td>
                        <td class="py-2 px-4 border border-gray-300">
                            <a href="/editarAdministrador/<?php echo $id["id"]; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                </svg>
                            </a>      
                        </td>
                    </tr>
                    <?php $rowColor = ($rowColor == 'bg-blue-100') ? 'bg-blue-200' : 'bg-blue-100'; ?>
                @endforeach  
            </tbody> 
        </table>
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
