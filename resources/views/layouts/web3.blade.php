
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<!-- Latest compiled and minified CSS for Bootstrap 4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript for Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


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

            <a href="/index"   class="menu-link">utilisateurs</a></li>
            <li><a href="/indexQuiz"   class="menu-link">Quizzes</a></li>
        
    
       </ul>
    </div>
  
    @yield('content')
</script>
