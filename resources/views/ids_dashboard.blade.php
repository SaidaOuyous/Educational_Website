



<!-- static.blade.php -->

@extends('layouts.main')
@section('title', 'cours')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="app" >

                <!-- Course Cards -->
                <Card title="Programmation Web" content="Explorez les fondamentaux de la programmation web et du développement, couvrant à la fois les technologies frontales et dorsales." @read-more-clicked="handleReadMore"></card>

                <Card title="Génie Logiciel" content="Plongez dans les principes et pratiques du génie logiciel, mettant l'accent sur la conception systématique et le développement de systèmes logiciels de haute qualité." ></card>

                <Card title="Statistiques Inférentielles" content="Étudiez les aspects inférentiels des statistiques, en mettant l'accent sur les prédictions et les inférences sur une population basées sur un échantillon de données." ></card>

                <Card title="Système d'Information Décisionnelle" content="Découvrez les concepts et technologies derrière les systèmes d'aide à la décision, permettant une prise de décision efficace en entreprise grâce à l'analyse et au reporting de données." ></card>

                <Card title="Réseaux Informatiques" content="Acquérez des connaissances sur les réseaux informatiques, y compris les protocoles, le matériel et les logiciels, essentiels pour comprendre les systèmes de communication modernes." ></card>

                <Card title="Probabilité et Statistiques Descriptives" content="Explorez les fondamentaux de la théorie des probabilités et des statistiques descriptives, jetant les bases de la compréhension de l'incertitude et de l'analyse des motifs de données." ></card>
            </div>
        </div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
@endsection
