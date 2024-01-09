
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<!-- Latest compiled and minified CSS for Bootstrap 4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript for Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<title>@yield('title')</title>
<div >
<!--
    <div class="dashboard-header">
        <div class="logo">-->
            <!-- You can add your logo image here -->
            <!-- <img src="/path/to/your/logo.png" alt="Your Logo"> 
    </div>-->
   
    <div class="dashboard-menu" >
        <ul>
                    <li><a href="#"><img src="images/logo2.png "  alt="logo"></a></li>

        <li>

            <a href="/static"   class="menu-link">statistique</a></li>
            <li><a href="/ids_dashboard"   class="menu-link">Cours</a></li>
            <li><a href="/exercices"  class="menu-link">Exercises</a></li>
            <li><a href="/examens" class="menu-link" >Examens</a></li>
            <li><a href="/programmationwebquiz"  class="menu-link" >Quizzes</a></li>
        @auth
        <li class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" style="  background-color: #FFD93D; /* Change the background color on hover */
        font-size: 20px;
        padding: 10px 20px;

        border-radius: 10px;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{auth()->user()->name}} </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item " style=" font-size: 20px;padding:10px" href="#">profile</a>
                    <a class="dropdown-item " style=" font-size: 20px;padding:10px" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
                </li>
        @endauth
       </ul>
    </div>
    <!--
    <div class="d-flex justify-content-between">
        <div id="coursesContent" class="content" style="display: none;">-->
            <!-- Courses Content -->
            <!-- Courses Content with Vertical Menu 
            <div class="d-flex">
                <div class="vertical-menu">
                    <a href="#" class="active" onclick="showCours('Web')"> Programmation web</a>
                    <a href="#" onclick="showCours('Genie')"> Génie logiciel</a>
                    <a href="#" onclick="showCours('Statistique')"> Statistique inférentielle</a>
                    <a href="#" onclick="showCours('Decisionnelle')">Informatique décisionnelle</a>
                    <a href="#" onclick="showCours('Reseaux')">Réseaux Informatique</a>
                    <a href="#" onclick="showCours('Probabilite')">Probabilité et Statistique descriptive</a>-->
                    <!-- Add more course links as needed
                </div>
                
                <div id="WebContent" class="content1" style="display: none;"> -->
                    <!-- webContent  
                    <section ></section>
                    <h2>webContent</h2>
                    <p>This is the content of the web section.</p>
                </div>

                <div id="GenieContent" class="content1" style="display: none;">-->
                    <!-- GenieContent 
                    <h2>GenieContent</h2>
                    <p>This is the content of the Génie logiciel section.</p>
                </div>

                <div id="StatistiqueContent" class="content1" style="display: none;">-->
                    <!-- StatistiqueContent 
                    <h2>StatistiqueContent</h2>
                    <p>This is the content of the Statistique inférentielle section.</p>
                </div>

                <div id="DecisionnelleContent" class="content1" style="display: none;">-->
                    <!-- DecisionnelleContent
                    <h2>DecisionnelleContent</h2>
                    <p>This is the content of the Informatique décisionnelle section.</p>
                </div>

                <div id="ReseauxContent" class="content1" style="display: none;"> -->
                    <!-- ReseauxContent 
                    <h2>ReseauxContent</h2>
                    <p>This is the content of the Réseaux Informatique section.</p>
                </div>

                <div id="ProbabiliteContent" class="content1" style="display: none;">-->
                    <!-- ProbabiliteContent 
                    <h2>ProbabiliteContent</h2>
                    <p>This is the content of the Probabilité et Statistique descriptive section.</p>
                </div>
            </div>
        </div>

        <div id="exercisesContent" class="content" style="display: none;">-->
            <!-- Exercises Content 
            <h2>Exercises Content</h2>
            <p>This is the content of the Exercises section.</p>
        </div>

        <div id="examsContent" class="content" style="display: none;">-->
            <!-- Exams Content 
            <h2>Exams Content</h2>
            <p>This is the content of the Exams section.</p>
        </div>

        <div id="quizzesContent" class="content" style="display: none;">-->
            <!-- Quizzes Content 
            <h2>Quizzes Content</h2>
            <p>This is the content of the Quizzes section.</p>
        </div>
    </div>
</div>

<script>
    function showContent(contentId) {
        // Hide all content divs
        var contents = document.getElementsByClassName('content');
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }

        // Show the selected content
        document.getElementById(contentId + 'Content').style.display = 'block';
    }

    function showCours(coursId) {
        // Hide all content divs
        var cours = document.getElementsByClassName('content1');
        for (var i = 0; i < cours.length; i++) {
            cours[i].style.display = 'none';
        }

        // Show the selected content
        document.getElementById(coursId + 'Content').style.display = 'block';
    }-->
    @yield('content')
</script>
