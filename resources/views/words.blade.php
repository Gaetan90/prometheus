@extends('layouts.default')
@section('contenu')
<div class="container">


<!-- Page header for flexbox example -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Validation des mots clés</h1>
        </div>
    </div>
    <!-- /.row -->
</div>
<br>

<div class="container">
    <div class="flex-row row">

            @foreach($categories as $category)
       
                @foreach($sous_categories[$category->id] as $sous_category)
                   
                    @foreach($words['words_'.$sous_category->id] as $word)
                     
                    
                        
                


        <div class="col-xs-6 col-sm-4 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
                    <p style="font-weight: bold;">Cat: {{$category->category }}, Sous-cat: {{$sous_category->category }}</p>
                    <h3>{{ $word->title }}</h3>
                    
                    <p class="flex-text text-muted">{{ $word->definition }}
                    </p>
                    <p><a href="{{ URL::route('users.dictionary.validWord', [$word->id]) }}"><button class="btn btn-success">Valider</button></a>    
                        <a href="{{ URL::route('users.dictionary.refusWord', [$word->id]) }}"><button class="btn btn-danger">Refuser</button></a></p>
                </div>
                <!-- /.caption -->
            </div>
            <!-- /.thumbnail -->
        </div>

    @endforeach
                @endforeach                
            @endforeach
       


    </div>
    <!-- /.flex-row  -->
</div>
<!-- /.container  -->




</div>
@stop