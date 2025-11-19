# 🥐 Projet : Site de recettes de pâtisseries françaises

## 📋 Objectif

Créer un site web dynamique pour consulter des recettes de pâtisseries françaises en utilisant PHP et des boucles.

## 📦 Données fournies

Fichier JSON (`recettes.json`) contenant 5 recettes avec leurs informations complètes.

## 🏗️ Structure du projet

```
recettes/
├── assets/
    ├── css/
        └── style.css
    └── images/
        ├── eclair-chocolat.jpg
        ├── financier-amandes.jpg
        ├── mille-feuilles.jpg
        ├── paris-brest.jpg
        ├── tarte-tatin.jpg
├── data/
    └── recipes.json
├── screenshots/
    ├── all.png
    └── detail.png
├── index.php
├── recette.php
└── README.md
```

## 📄 Page 1 : index.php

**À réaliser :**

1. Charger le fichier JSON et le convertir en tableau PHP
2. Afficher toutes les recettes sous forme de cartes comme dans le visuel situé dans `screenshots/all.png`.

**Chaque carte doit contenir :**

- Image
- Difficulté
- Nom
- Description courte
- Temps total (préparation + cuisson)
- Nombre de portions
- Nombre d'ingrédients
- Lien vers `recette.php?id=X`

## 📄 Page 2 : recette.php

**À réaliser :**

1. Récupérer l'ID depuis l'URL avec `$_GET`
2. Trouver la recette correspondante dans le tableau
3. Afficher toutes les informations comme dans le visuel situé dans `screenshots/detail.png`.

**Sections à créer :**

- **Lien retour** vers index.php
- **En-tête** : nom, image, description, temps, portions, difficulté
- **Conseils du chef**
- **Ingrédients** : liste avec quantités + unité + nom
- **Préparation** : liste numérotée
- **Ustensiles** : liste inline
- **tags** : liste inline
