@extends('layouts.default')
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            @if(session('alert-success'))                                    
                <div class="alert alert-success">
                    {{ session('alert-success') }}
                </div>
            @endif

            <center>
            @foreach($categories as $category)
                <h1>{{ $category->category }}</h1>
                @foreach($sous_categories[$category->id] as $sous_category)
                    <h4>{{ $sous_category->category }}</h4>
                    @foreach($words['words_'.$sous_category->id] as $word)
                        <h5>{{ $word->title }} :</h5>
                        <blockquote>
                            <p>{{ $word->definition }}</p>
                            @if($word->source != "")
                                <footer>Source : <cite title="Source Title"><a href="//{{ $word->source }}" style="color:blue;">{{ $word->source}}</a></cite></footer>
                            @endif                                
                        </blockquote>
                        <a href="{{ URL::route('users.dictionary.validWord', [$word->id]) }}"><button class="btn btn-success">Valider</button></a>    
                        <a href="{{ URL::route('users.dictionary.refusWord', [$word->id]) }}"><button class="btn btn-danger">Refuser</button></a>
                    @endforeach
                @endforeach                
            @endforeach
            </center>          
        </div>
    </div>
</div>
@stop