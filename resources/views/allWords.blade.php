@extends('layouts.default')
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-2">
            @foreach($categories as $category)
                <h3>{{ $category->category }}</h3>
                @foreach($sous_categories[$category->id] as $sous_category)
                    <a href="" class="categories" id="{{ $sous_category->id }}" style="margin-left: 40px;">{{ $sous_category->category }}</a><br>
                @endforeach
            @endforeach            
        </div>

        <div class="col-lg-2">
            <div class="allWords"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function()
{
    $('.categories').on('click', function(e)
    {
        e.preventDefault();

        var category = $(this).attr("id");

        $.get('getWords', {category: category}, function(status)
        {
            $('.allWords').html('<br>' + status);                   
        });
    });
});
</script>
@stop
