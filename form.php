<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form test</title>
</head>
<body>
    <form  action="requestSubmit.php"  method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastname">
        </div>
        <div>
            <label  for="prénom">Prénom :</label>
            <input  type="text"  id="prénom"  name="user_firstname">
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="tel">Téléphone :</label>
            <input  type="tel"  id="tel"  name="user_phone_number">
        </div>
        <div>
            <label  for="sujet">Courriel :</label>
            <select id="sujet" name="mail_subject">
                <option value="I hate JS">I hate JS</option>
                <option value="JS is for Noobs">JS is for Noobs</option>
                <option value="How can I learn PHP ?">How can I learn PHP ?</option>
                <option value="PHP > JS = true">PHP > JS = true</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
</form>
</body>
</html>
