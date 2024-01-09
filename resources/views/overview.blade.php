<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <title>Ma Page Simple</title>
    <style>
               :root{
    --primaryColor:#E7B10A;
    --secondaryColor:#FFD93D;
    --tertialyColor:#ffd966;
    --bgColor:#ececec;
    --text2:#FF8400;
    --text:#2B2730;
     --padding:8%;
}
html{
    background-color: var(--bgColor);
    font-family: 'Inter', sans-serif;
    color: var(--text);
    font-size: 24px;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.home{
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
}
h1{
    font-size: 1.1rem;
    cursor: pointer;
    letter-spacing: 0.12rem;
}
span{

    color: var(--secondaryColor);
}
.nav{
    padding-left: var(--padding);
    padding-right: var(--padding);
    padding-top: 2rem;
    display: flex;
   justify-content: space-between;
   align-items: center;

}
.nav ul li {
   list-style-type: none;
   display: inline-block;
   margin: 0.1rem 1.5rem;
    
}

.nav ul li a {
    text-decoration: none;
    text-transform: capitalize;
    color: var(--primaryColor);
    font-weight: 600;
font-size:20px  
}
  
  .nav ul li a.highlight {
 
    color: var(--text2);
  }
  
  .nav ul li a:hover {
    text-decoration: none;
    text-transform: capitalize;
    color: var(--text2);
    font-weight: 600;
    border-top: 1px solid var(--tertialyColor);
    border-bottom: 1px solid var(--tertialyColor);    padding: 1rem;
  }
  
.btn{
    border-radius: 30px;
    text-decoration: none;
    padding: 0.7rem 1.5rem;
    font-weight: 600;
    margin: 20px;
    background-color: var(--tertialyColor);
    border: 2px solid transparent;
    color: var(--text);
}
.btn:hover{
    border-radius: 30px;
    text-decoration: none;
    padding: 0.87rem 1.81rem;
    font-weight: bold;
    background-color:transparent;
    border: 2px solid var(--primaryColor);
    color: var(--text);
    transition: 0.6s;
}
.imgLogo{
    width:150px;
    height:30%;
}
.content {
        padding: 2rem;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 2rem;
    }

    /* Styles pour les titres */
    h2 {
        color: var(--primaryColor);
        font-size: 1.5rem;
        margin: 1rem 0;
    }

    /* Styles pour le paragraphe */
    p {
        font-size: 1rem;
        line-height: 1.5;
        margin-bottom: 1rem; /* Ajout d'espacement entre les paragraphes */
    }
     /* Styles pour les listes à puces */
     ul {
            list-style: disc;
            margin-left: 1.5rem;
            
        }

        /* Styles pour les éléments de liste */
        li {
            line-height: 1.5;
        } .section-title {
            font-size: 1.5rem;
            color: var(--primaryColor);
            margin-bottom: 1rem;
            text-transform: uppercase;
            margin-top:20px;
        }
        </style>
</head>
<body>
 <section>
 <div class="nav">
        <a href="http://127.0.0.1:8000"><img class="imgLogo" src="/images/logo.PNG" alt="logo"></a>
            <ul>
                <li><a href="http://localhost:3000/ProjetHTML/resources/views/overview.blade.php" onclick="highlightMenuItem(event)">Overview</a></li>
                <a href="/login" class="btn">se connecter</a>
            <a href="/register" class="btn"> &nbsps'inscrire   &nbsp</a>

            </ul>
          

        </div>
 </section>   
<!-- Ajoutez le texte formaté ici -->
<section class="content">
    <h2>Titre : Un Site Web Éducatif pour les Filières de Licence ESTG</h2>
    <p class="section-title">Introduction :</p>
    <p>Mon projet consiste à concevoir et développer un site web éducatif destiné à offrir des cours, des exercices, des examens, des quiz et des fonctionnalités interactives pour trois filières de licence : Informatique Décisionnelle et Statistiques, Instrumentation et Systèmes, Énergies Renouvelables et Procédés. Le projet a pour but de résoudre les problèmes liés à l'accès à l'éducation, en offrant une plateforme en ligne riche en ressources éducatives.</p>
    <p class="section-title">Objectifs du Site :</p>
    <ul>
        <li>Fournir un accès facile et ouvert à des cours de haute qualité pour les étudiants inscrits dans les filières mentionnées.</li>
        <li>Offrir une plateforme interactive pour les exercices (TD+TP), et les quiz pour préparer efficacement aux examens.</li>
        <li>Mettre à disposition des examens passés pour chaque cours ou module, qui permettant aux étudiants de s'entraîner avec des questions d'examen précédentes.</li>
    </ul>
    <p class="section-title">Description du Projet :</p>
    <p>Le projet consiste à développer un site web éducatif innovant qui vise à fournir une expérience d'apprentissage en ligne complète et enrichissante pour les étudiants inscrits dans trois filières de licence.</p>
    <p class="section-title">Le site offrira une gamme complète de fonctionnalités pour les étudiants et les administrateurs.</p>
    <ul>
        <li>Les étudiants peuvent créer des comptes personnalisés en choisissant leur filière de licence.</li>
        <li>Ainsi Les étudiants auront accès à des cours complets organisés par modules et sujets, couvrant les domaines de leur filière de licence. Chaque cours sera accompagné de ressources pédagogiques telles que des présentations, des documents de cours et des vidéos.</li>
        <li>Chaque cours sera accompagné des travaux dirigés (TD) et des travaux pratiques (TP) pour renforcer la compréhension des concepts.</li>
        <li>Les étudiants auront la possibilité de se préparer également aux examens en accédant à des examens passés et des quiz.</li>
        <li>En plus les statistiques individuelles pour chaque étudiant, qui montrent leur progression, leurs scores aux quiz et aux examens.</li>
    </ul>
    <p class="section-title">Problèmes Résolus :</p>
    <ul>
        <li>Manque de ressources éducatives pour les licences.</li>
        <li>La fonctionnalité de suivi de la progression permet aux étudiants de suivre leur avancement dans chaque module, cours, exercice, examen ou quiz.</li>
        <li>Les étudiants peuvent accéder à des examens anciens pour s'entraîner et se préparer aux examens actuels, renforçant leur préparation et leur confiance.</li>
    </ul>
    <p class="section-title">Conclusion :</p>
    <p>En conclusion, ce site web éducatif offre une solution complète pour répondre aux besoins des étudiants en proposant un accès facilité à des cours de qualité, des exercices interactifs, un suivi de la progression, et la possibilité de réviser avec des examens anciens.</p>
</section>
</body>
</html>
