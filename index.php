 <!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo 
  nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia 
  un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
 <?php
$nameIsOk = false;
$emailIsOk = false;
$ageIsOk = false;
// Prendo i dati inseriti
$nome = trim($_GET['nome']);
$email = trim($_GET['email']);
$age = trim($_GET['eta']);
// Verifico che abbia almeno 4 caratteri
if (strlen($nome) > 3) {
    $nameIsOk = true;
} else {
    $nameIsOk = false;
// Email
}
if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
    $emailIsOk = true;
} else {
    $emailIsOk = false;
}
// Età
if (is_numeric($age)) {
    $ageIsOk = true;
} else {
    $ageIsOk = false;
}


?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack b1</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1pFkwJp4ornC0w" crossorigin="anonymous">
 </head>

 <body>
     <form method="GET" action="">
         <!-- Campo Nome -->
         <div class="mb-3">
             <label for="nome" class="form-label">Nome</label>
             <input type="text" class="form-control" id="nome" placeholder="Inserisci il tuo nome">
         </div>

         <!-- Campo Email -->
         <div class="mb-3">
             <label for="email" class="form-label">Email</label>
             <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
         </div>

         <!-- Campo Età -->
         <div class="mb-3">
             <label for="eta" class="form-label">Età</label>
             <input type="number" class="form-control" id="eta" placeholder="Inserisci la tua età">
         </div>

         <!-- Bottone per inviare il form -->
         <button type="submit" class="btn btn-primary" name="invia">Invia</button>
     </form>
 </body>

 </html>