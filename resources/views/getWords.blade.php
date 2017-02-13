<?php
use App\Dictionary;

if(isset($_GET['category']) && ctype_digit($_GET['category']))
{
	$category = $_GET['category'];

	$words = Dictionary::where('id_category', $category)->where('validate', 1)->get();

	foreach($words as $word)
	{
		echo "<a href=\"".URL::route('users.dictionary.getWordDefinition', [$word->id])."\" target=\"_blank\">".$word->title."</a><br>";		 
	}	
}
?>
