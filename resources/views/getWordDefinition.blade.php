@extends('layouts.default')
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
           <h3>{{ $word[0]->title }} :</h3>
           <blockquote>
                <p>{{ $word[0]->definition }}</p>
                @if($word[0]->source != "")
                    <footer>Source : <cite title="Source Title"><a href="//{{ $word[0]->source }}" style="color:blue;">{{ $word[0]->source}}</a></cite></footer>
                @endif                                
            </blockquote>
            @if($user->id == $word[0]->id_user)
                <a href="{{ URL::route('users.dictionary.formEditWord', [$word[0]->id]) }}" class="btn btn-primary">Modifier</a>
            @endif
        </div>
    </div>
</div>
@stop
