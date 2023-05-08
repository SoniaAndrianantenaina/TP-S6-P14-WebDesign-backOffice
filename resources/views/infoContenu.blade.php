@extends('layouts.master')

@section('contenu')
    <!-- Wrapper -->
    <section id="wrapper">
        <header>
            <div class="inner">
                <h2>{{ $contenu->titre }}</h2>
                <p>ECRIT PAR {{$contenu->nom}} {{$contenu->prenom}}</p>
            </div>
        </header>

        <!-- Content -->
        <div class="wrapper">
            <div class="inner">

                <h6 class="major grand-titre" style="font-size: 14px;">{{ $contenu->description }}</h6>
                <p> {!! $contenu->texte !!} </p>
                
                <section class="features">
                    <article>
                        <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                        <h3 class="major">Date de parution de l'article</h3>
                        <p>{{ \Carbon\Carbon::parse($contenu->dateparution)->isoFormat('DD MMMM YYYY') }}</p>

                        
                    </article>
                   
                </section>
                @if (session('idAdmin'))
                <div class="col-6 col-12-medium">
                    <ul class="actions">
                        <li><a href="{{ route('modifierContenu') }}" class="button primary">Modifier</a></li>
                        <li><a href="{{ route('supprimerContenu') }}" class="button">Supprimer</a></li>
                    </ul>
                @endif
               
            </div>
        </div>

    </section>
@endsection
