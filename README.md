# Cahier des charges

# Description du projet

Partager des articles sur différents sujets (développement, musique, jeux vidéo, etc...) depuis un pc ou un smartphone

# Fonctionnalités

Utilisateurs :

- Inscription
- Connexion
- Modifier profil
- Déconnexion
- Lire les articles
- Commenter les articles

Admin :

- Créer un article
    - Format différent pour les musiques (vidéo YouTube)
        - Iframe
        - Image (pour la carte dans Accueil et Articles, non affichée)
        - Contenu (optionnel)
    - Articles avec contenu et photos
    - Articles sans contenu mais avec des photos
    - Un tableau String dans le champ “image” de l’article en base de données ?
- Partager un article
    - Permettre de copier le lien de la page
- Articles rangés par catégories

# Design

## Inspirations

Inspiré du site “Typewolf”

[What's Trending in Type · Typewolf](https://www.typewolf.com/)

## Couleurs

### Fond

Fond sombre avec polices en blanc.

Pinot noir

```css
background: #4b6cb7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #182848, #4b6cb7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #182848, #4b6cb7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
```

Royal

```css
background: #141E30;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
```

# Contenu du projet

## Accueil

- En colonnes au milieu de la page
- Titre + sous-titre
    - Deskad, Blog made in Quimper
- Menu de navigation
    - User
        - Articles, Contact
    - Admin
        - Articles, Contact, Admin
- Bouton de connexion / profil
- 10 derniers articles
- Footer

## Admin

- Articles
    - Voir les articles
    - Modifier
    - Supprimer
    - Ajouter
- Catégories
    - Voir les catégories
    - Modifier
    - Supprimer
    - Ajouter
- Utilisateurs
    - Voir les utilisateurs

## Profil

## Articles

- 2 colonnes
- A gauche les catégories
- A droite les articles

## Article

- En colonne
- Titre
- Catégorie, Auteur, Date
- Image
- Légende
- Si un contenu est présent
    - Contenu
        - title1
        - content1
        - etc...
- Si il y a juste des photos
    - Grille des photos
- Si utilisateur connecté, formulaire d’ajout commentaire
    - Sinon, bouton “Se connecter”
- Commentaires
    - Date, auteur
    - Contenu

## Contact

- En colonne
- Formulaire de contact

# Outils

## Cahier des charges

- Notion

## Diagrammes

- UMLet

## Modèle Conceptuel de Données

- jMerise

## Base de données

- MySQL / phpmyadmin

# Itérations

- 1ère itération sans framework.
- 2ème itération avec Bootstrap
- 3ème itération avec Symfony
- 4ème itération avec Vue.js

# Diagrammes

## Cas système

![cas_systeme.png](/Diagrammes/images/cas_systeme.png)

## Cas utilisation

![cas_utilisation.png](/Diagrammes/images/cas_utilisation.png)

## Classes

![classes.png](/Diagrammes/images/classes.png)

