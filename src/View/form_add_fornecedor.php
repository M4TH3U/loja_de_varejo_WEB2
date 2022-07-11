<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-orange-500">
      <ul class= "flex">
        <li
        class="mx-3">
         <a href="../../index.html">
            Home</a>
    </li>
    <li>
     <a href="#">Novo Fornecedor</a>
    </li>
    </ul>
    </header>
<main class="mt-4 ml-4">
    <form action="../Controller/Fornecedor.php" method="POST">
        <section class="columns-3">
            <article>
                <label for="name">Digite o nome do fornecedor:</label>
                <input type="text" id="nome" name="nome"
                class="border border-red-700">
            </article>
            <article>
                <label for="cnpj">cnpj:</label>
                <input type="text" id="price" name="price"
                class="border border-red-700"
                min=2>
            </article>
            <article>
                <label for="telefone">Telefone do fornecedor:</label>
                <input type="number" id="telefone" name="telefone" 
                class="border border-red-700"min=0></article>
            </article>
        </section>
        <article class="flex justify-center mt-4 ,ml-4">
            <button type="submit" class="rounded p-4 bg-orange-700 text-white">Cadastrar</button>
        </article>
    </form>
</main>
</body>
</html>