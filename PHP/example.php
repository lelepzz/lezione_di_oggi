<?php

/*Per avviare questo file serve un webserver
Dopo aver installato PhP sul tuo PC, avvia questo comando nel cmd
php -S localhost:8000
*/ 


// Pagina PHP con un form interattivo per inviare messaggi

if (!empty($_POST)) {
    $nome = isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"]) : "Anonimo";
    $messaggio = isset($_POST["messaggio"]) ? htmlspecialchars($_POST["messaggio"]) : "Nessun messaggio";
    echo "<h2>Messaggio ricevuto!</h2>";
    echo "<p><strong>Da:</strong> $nome</p>";
    echo "<p><strong>Messaggio:</strong> $messaggio</p>";
    echo '<br><button onclick="window.location.href=\'\'">Torna al form</button>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Form di Contatto</title>
</head>
<body class="flex justify-center items-center h-[60vh] ">
    <div class="bg-slate-200 p-6 rounded-lg w-96 h-fit gap-4 flex flex-col justify-center items-center">
        <h1 class="text-2xl text-center font-bold">Invia un Messaggio</h1>
        <form method="post" action="" class="p-4 border-1 rounded-lg w-full flex flex-col justify-center items-center gap-2">
            <input type="text" name="nome" class=" w-full border-1 px-2 py-1 rounded-md" placeholder="Il tuo nome" required>
            <textarea name="messaggio" placeholder="Scrivi il tuo messaggio..." class="w-full border-1 px-2 py-1 rounded-md" required></textarea>
            <button type="submit" class="bg-slate-800 text-white px-2 py-1 rounded-lg text-xl w-full">Invia</button>
        </form>
    </div>
</body>
</html>
