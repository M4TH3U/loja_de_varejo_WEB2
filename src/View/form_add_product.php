<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <header class="bg-purple-500">
       <ul class="flex">
           <li 
           class="mx-3">
             <a href="../../index.html">
                Home</a>           
           </li>
           <li>
            <a href="#">Novo produto</a>
           </li>
       </ul>
   </header>  
<main class="mt-4 ml-4">
    <form action="../controller/Product.php"method="POST">
     <section class="columns-3">
        <article>
            <label for="name">Digite o nome do produto: </label>
            <input 
            type="text"
            id="name" 
            name="name" 
            class="border border-red-300">
         </article>
          <article>
            <label for="price">Preço de venda:</label>
            <input 
            type="number" 
            id="price" 
            name="price" 
            class="border border-red-300" 
            min=1>
          </article>
          <article>
            <label for="quantity">Quantidade em estoque: </label>
            <input 
            type="number" 
            id="quantity" 
            name="quantity" 
            class="border border-red-300" 
            min=0>
          </article>
       </section>  
       <article class="flex justify-center mt-4 ml-4">
        <button 
        type="submit" 
        class="rounded p-4 bg-purple-500 text-white">Cadastrar</button>
       </article>  
    </form>
</main>
</body>
</html>