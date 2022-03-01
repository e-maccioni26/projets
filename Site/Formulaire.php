<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Contact</title>
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    <div class="contactez-nous">
        <h1>Contactez-nous</h1>
        <p>Un problème, une question, envie de nous envoyer un message? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
        <form action="createUser.php" method="post">
          <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Nom,Prénom" required>
          </div>
          <div>
            <label for="email">Votre e-mail</label>
            <input type="email" id="email" name="email" placeholder="e-mail" required>
          </div>
          <div>
            <label for="sujet">Mot de Passe</label>
            <input type="text" id="Mot de Passe" name="password" placeholder="******">   
          </div>
          <div>
            <label for="message">Votre message</label>
            <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
          </div>
          <div>
            <button type="submit">Envoyer mon message</button>
          </div>
        </form>
      </div>
</body>
</html>