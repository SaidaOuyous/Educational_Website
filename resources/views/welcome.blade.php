<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />

    <title>Site educatif</title>
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
.content{
    flex-grow: 1;
    padding: 0 var(--padding);
    display: flex;
    align-items: center;
   justify-content: space-between;
}
.container-texts{
    position: relative;
    bottom: 40px;
}
h2{
    font-size: 4rem;
    margin-top: 1.86rem;
    font-weight: bold;
    margin-bottom: 2rem;


}
h5{
    font-size: 0.8rem;
    margin-bottom: 3rem;
    line-height:2;

}

.images-container {
    width: 45%;
    height: 90%;
    position: relative;
    align-items: flex-end;
}

.images-container img {
    position: absolute;
    bottom: 0;
    height: 100%;
    left: 50%;
    transform: translateX(-50%);
}

.images-container img:hover {
    transform: translateX(-50%) scale(1.1);
}
.container-texts img{
    transition: transform 0.3s ease;

}
.container-texts img:hover{
    transform: translateX(-10%) scale(1.1);

}
.social_media{
    margin-top: 3.0rem;
}
.social_media img{
  width:60px;
  margin:1rem 1rem;
}
.imgLogo{
    width:150px;
    height:30%;
}
    </style>
</head>

<body>
    <script>
        function highlightMenuItem(event) {
            var links = document.querySelectorAll('.nav ul li a');
            links.forEach(function (link) {
                link.classList.remove('highlight');
            });

            event.target.classList.add('highlight');
        }

    </script>

    <section class="home" id="home">
        <div class="nav">
        <a href="#"><img class="" src="/images/logo2.png" alt="logo"></a>
            <ul>
                <li><a href="/overview">Overview</a></li>
                <a href="http://localhost:8000/login" class="btn">se connecter</a>
            <a href="http://localhost:8000/register " class="btn"> &nbsps'inscrire   &nbsp</a>

            </ul>
          

        </div>
        <div class="content">

            <div class="container-texts">
                <h2>Savoir <span>Accecible</span> </h2>
                <h5>Explorez l'apprentissage en ligne optimal pour les filières <br>de licence ESTG et préparez-vous au succès académique dès aujourd'hui.</h5>

                <a href="http://localhost:8000/overview" class="btn">Lire plus</a>
                <div class="social_media">
                    <a href="#"><img src="images/facebook_logo.png" alt="facebook_logo"></a>
                    <a href="#"><img src="images/instagram-logo.png" alt="instagram-logo"></a>
                    <a href="#"><img src="images/youtube-logo.png" alt="youtube-logo"></a>
                    <a href="#"><img src="images/linkedin_logo.png" alt="linkedin_logo"></a>

                </div>

            </div>
            <div class="images-container">
                <img src="images/dots5.png" alt="business man" class=""
                    style="position: absolute;top: 70%; left: 85%; height: 280px;">

                <img src="images/cercle1.png" alt="business man" class="shape">
                <img src="images/fille1.png" alt="business man" class="pic">


            </div>


        </div>

    </section>


</body>

</html>