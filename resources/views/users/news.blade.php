@extends('layouts.default')

@section('contenu')
<div class="container">
	<div class="row">
		<div class="col-lg-offset-4 col-lg-4 description">
            {{ Form::open(array('route'=>'users.news.post', 'enctype'=>'multipart/form-data')) }}

            	<fieldset class="loginForm">                  
                    {{ Form::text('title', '', array('id'=>'title', 'placeholder'=>'Titre', 'style'=>'width:90%;height:4vh')) }} 
                </fieldset>
                    
                <fieldset class="loginForm">                  
                    {{ Form::textarea('text', '', array('id'=>'text', 'placeholder'=>'Texte', 'size'=>'30x15', 'style'=>'width:90%;height:4vh')) }} 
                </fieldset>

                <fieldset class="loginForm">
                	{{ Form::hidden('MAX_FILE_SIZE', '1048576') }}                
                    {{ Form::file('file') }} 
                </fieldset>

                <br>

                {{ Form::submit('Poster', array('class'=>'btn btn-danger', 'disabled'=>'true')) }}

            {{ Form::close() }}

            @if(session('alert-error'))                               
                <div class="alert alert-danger">
                    {{ session('alert-error') }}
                </div>
            @endif

            @if(session('alert-success'))                               
                <div class="alert alert-success">
                    {{ session('alert-success') }}
                </div>
            @endif

            @if(session('alert-droits'))                               
                <div class="alert alert-danger">
                    {{ session('alert-droits') }}
                </div>
            @endif
		</div>
	</div>

	<div class="row">
		<section class="col-lg-offset-3 col-lg-6">
		   	<h4 class="insetshadow">Dernières news</h4>
		      
		    <div class="news">
		    <?php
		    foreach($news as $new)
		    {
		        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $new->created_at);
		        $date = $date->format('d/m/Y à H:i');

		        $author = App\User::find($new->user_id);

		        if($new->img != NULL)
		        {
		        	echo "<div class=\"panel panel-default article\">
			                    <div class=\"panel-heading\">".$new->title."</div>
			                    <div class=\"panel-body\">   
			                    	<div class=\"row\">   
			                    		<div class=\"col-lg-3\">                  
			                        		<img width=\"100%\" src=\"\prometheus/public/img/files/".$new->img."\" alt=\"Image de la news\" />
			                        	</div>

			                        	<div class=\"col-lg-9\">
			                        		".$new->text."
			                        	</div>
			                        </div>
			                    </div>
			                    <div class=\"panel-footer\">Publié par ".$author->nom." ".$author->prenom." le ".$date."</div>
			                </div>";
		        }

		        else
		        {
			        echo "  <div class=\"panel panel-default article\">
			                    <div class=\"panel-heading\">".$new->title."</div>
			                    <div class=\"panel-body\">                        
			                        ".$new->text."
			                    </div>
			                    <div class=\"panel-footer\">Publié par ".$author->nom." ".$author->prenom." le ".$date."</div>
			                </div>";
			    }
		    }
		   	?>
		    </div>
		</section>   
	</div>
</div>

<script type="text/javascript">
$(function()
{
	setInterval(function()
	{
		var title = $('#title').val();
		var text = $('#text').val();

		if(text.trim() != '' && title.trim() != '')
		{
			$('.btn').attr('class', 'btn btn-success').prop('disabled', false);
		}

		else
		{
			$('.btn').attr('class', 'btn btn-danger').prop('disabled', true);
		}	
	}, 500);	

	setInterval(function()
	{
		$.get('news/show', function(data){
			$('.news').html(data);					
		});
	}, 5000);
});
</script>
@stop