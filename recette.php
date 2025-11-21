<?php
$recipesJson = file_get_contents("data/recipes.json");
$recettes = json_decode($recipesJson, true);
foreach ($recettes as $recette) {
    if ($recette["id"] ==  $_GET["id"]) $recipeDetails = $recette;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la recette</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.min.css">
</head>

<body>
    <header class="details">
        <a href="/index.php"><i class="ri-arrow-left-fill"></i> Retour aux recettes</a>
    </header>
    <main>
        <div class="recipe-details">
            <div class="thumbnail">
                <div class="text">
                    <h1>Eclair au chocolat</h1>
                    <p>Pâte à choux garnie de crème patissière au chocolat et glacée au fondant</p>
                </div>
                <img src="./assets/images/mille-feuilles.jpg" alt="Eclair au chocolat">
            </div>
            <div class="content">
                <div class="infos">
                    <div class="time">
                        <div>
                            <i class="ri-time-line"></i>
                        </div>
                        <div>
                            <p>Temps total</p>
                            <p>90 Min</p>
                        </div>
                    </div>
                    <div class="portions">
                        <div>
                            <i class="ri-group-line"></i>
                        </div>
                        <div>
                            <p>Portions</p>
                            <p>8 Personnes</p>
                        </div>
                    </div>
                    <div class="difficulty">
                        <div>
                            <i class="ri-cake-3-line"></i>
                        </div>
                        <div>
                            <p>Difficulté</p>
                            <p class="difficile">Difficile</p>
                        </div>
                    </div>
                </div>
                <div class="advice">
                    <div>
                        <i class="ri-lightbulb-ai-line"></i>
                    </div>
                    <div>
                        <p>Conseils du chef</p>
                        <p>Ne jamais ouvrir le four pendant la cuisson des choux, ils retomberaient ! La pâte doit être brillante et former un ruban.</p>
                    </div>
                </div>
                <div class="steps">
                    <div class="ingredients">
                        <h2>Ingrédients</h2>
                        <ul>
                            <li><span>250 ml</span> d'eau</li>
                            <li><span>100 g</span> de beurre</li>
                            <li><span>150 g</span> de farine</li>
                            <li><span>4 pièces</span> oeufs</li>
                            <li><span>500 ml</span> de lait</li>
                            <li><span>100 g</span> de sucre</li>
                            <li><span>40 g</span> de cacao en poudre</li>
                            <li><span>4 pièces</span> jaunes d'oeuf</li>
                            <li><span>200 g</span> de chocolat noir</li>
                            <li><span>100 g</span> de fondant pâtissier</li>
                        </ul>
                    </div>
                    <div class="preparation">
                        <h2>Préparation</h2>
                        <ol>
                            <li>
                                <p>1</p>
                                <p>Séparer la pâte à choux en faisant bouillir l'e</p>
                            </li>
                            <li>
                                <p>2</p>
                                <p>Séparer la pâte à choux en faisant bouillir l'eau et le beurre</p>
                            </li>
                            <li>
                                <p>10</p>
                                <p>Séparer la pâte à choux en faisant bouillir l'eau et le beurre</p>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="ustensiles">
                    <h2>Ustensiles nécessaires</h2>
                    <div class="list">
                        <span>Casserole</span>
                        <span>Casserole</span>
                        <span>Casserole</span>
                        <span>Casserole</span>
                        <span>Casserole</span>
                    </div>
                </div>
                <div class="tags">
                    <h2>Tags</h2>
                    <div class="list">
                        <a href="" class="tag">Pateisserie</a>
                        <a href="" class="tag">Pateisserie</a>
                        <a href="" class="tag">Pateisserie</a>
                        <a href="" class="tag">Pateisserie</a>
                        <a href="" class="tag">Pateisserie</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php var_dump($recipeDetails); ?>
</body>

</html>