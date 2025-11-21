<?php
$recipesJson = file_get_contents("data/recipes.json");
$recettes = json_decode($recipesJson, true);
// var_dump($recettes);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes de Pâtisserie</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.min.css">
</head>


<body>
    <header class="home-header">
        <h1>Recettes de Pâtisserie</h1>
        <p>Découvrez nos délicieuses recettes de pâtisserie française et laissez-vous inspirer pour créer des desserts inoubliables.</p>
    </header>
    <main>
        <div class="recipes">
            <div class="recipe">
                <div class="thumbnail">
                    <span class="difficulty intermediaire">Intermédiaire</span>
                    <a href="recette.php?id=1">
                        <img src="./assets/images/eclair-chocolat.jpg" alt="Eclair au chocolat">
                    </a>
                </div>
                <div class="content">
                    <a href="recette.php?id=1">
                        <h2>Eclair au chocolat</h2>
                    </a>
                    <p>Pâte à choux garnie de crème patissière au chocolat et glacée au fondant</p>
                    <div class="infos">
                        <div class="time"><i class="ri-time-line"></i> 70 min</div>
                        <div class="portions"><i class="ri-group-line"></i> 8 pers.</div>
                        <div class="ingredients"><i class="ri-cake-3-line"></i> 10 ingr.</div>
                    </div>
                    <div class="tags">
                        <span class="tag">Dessert</span>
                        <span class="tag">Chocolat</span>
                        <span class="tag">Pâtissserie fine</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>