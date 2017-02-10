<?php
use App\News;
use App\User;
use Carbon\Carbon;

$news = News::orderBy('id', 'desc')->get();

if($news->count() >= 1)
{
    foreach($news as $new)
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $new->created_at);
        $date = $date->format('d/m/Y à H:i');

        $user = User::find($new->user_id);

        if($new->img != NULL)
        {
            echo "<div class=\"panel panel-default article\">
                                <div class=\"panel-heading\">#".$new->id." ".$new->title."</div>
                                <div class=\"panel-body\">   
                                    <div class=\"row\">   
                                        <div class=\"col-lg-3\">                  
                                            <a href=\"\" rel=\"popup_img\" class=\"poplight\"><img width=\"100%\" src=\"\prometheus/public/img/files/".$new->img."\" alt=\"Image de la news\" /></a>
                                        </div>

                                        <div class=\"col-lg-9\">
                                            ".$new->text."
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel-footer\">Publié par ".$user->nom." ".$user->prenom." le ".$date."</div>
                            </div>
                            <div id=\"popup_img\" class=\"popup_block\">
                                <img width=\"100%\" src=\"\prometheus/public/img/files/".$new->img."\" alt=\"Image de la news\" /><a href=\"\" class=\"close\">X</a>
                            </div>";                                      
        }

        else
        {
            echo "  <div class=\"panel panel-default article\">
                        <div class=\"panel-heading\">#".$new->id." ".$new->title."</div>
                        <div class=\"panel-body\">                        
                            ".$new->text."
                        </div>
                        <div class=\"panel-footer\">Publié par ".$user->nom." ".$user->prenom." le ".$date."</div>
                    </div>";
        }
    }
}

else
{
    echo "Aucune news.";
}
?>