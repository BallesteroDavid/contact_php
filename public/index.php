<!-- on injecte le ficher header.php pour générer le header -->
<?php include '../includes/header.php'; ?>
 <?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ??'';
    $age = $_POST["age"] ??'';
    $email = $_POST["email"] ?? '';
    $message = $_POST["message"] ?? '';
   
    $errors = [];
    if (empty($name)) {
        $errors[] = "Veuillez remplir le champs vide";
    }
    if (empty($age)) {
        $errors[] = "Age requis";
    }elseif ($age < 18) {
        $errors[] = "Trop jeune mon coco";
    }
    if (empty($email)) {
        $errors [] = "Veuillez remplir le champs vide";
    }
    var_dump($errors);
    if (empty($message)) {
        $errors [] = "Veuillez remplir le champs vide";
    }
    var_dump($errors);

    if (empty($errors)) {
        $name = htmlspecialchars(trim($name));
        $age = htmlspecialchars(trim($age));
        $email = htmlspecialchars(trim($email));
        $message = htmlspecialchars(trim($message));

        var_dump($name, $age, $message, $email);
        echo "Super tout est bon";
    }else{
        foreach($errors as $error) {
            echo "$error <br>";
        }
    }
};

?>
<main> 
    <h1>
        Page d'accueil
    </h1>
     <section>
        <form method="POST" action="">
            <div>
                <label for="name">name :</label><br>
                <input type="text" id="name" name="name" placeholder="Entrer votre prénom">
            </div>
            <div>
                <label for="age">age :</label><br>
                <input type="number" id="age" name="age" min="18" placeholder="Entrer votre âge">
            </div>
            <div>
                <label for="email">Email</label><br>
                <input id="email" name="email" type="email" placeholder="Entrer votre email">
            </div>
            <div>
                    <label for="message">message</label><br>
                    <textarea id="message" name="message" type="text" placeholder="Entrer votre message"></textarea>
                </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </section>
</main>

<?php include '../includes/footer.php'; ?>