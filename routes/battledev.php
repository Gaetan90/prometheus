<?php
/*******
 * Read input from STDIN
 * Use echo or print to output your result, use the PHP_EOL constant at the end of each result line.
 * Use:
 *      local_echo( $variable ); 
 * to display simple variables in a dedicated area.
 * 
 * Use:
 *      local_print_r( $array ); 
 * to display arrays in a dedicated area.
 * ***/

do{
    $f = stream_get_line(STDIN, 10000, PHP_EOL);
    if($f!==false){
        $input[] = $f;
    }
}while($f!==false);

$length = $input[0];
$total = count($input);
$count = 0;
$count_evaporateur = 0;

for($i = 1; $i < $length; $i++)
{
    // $count_evaporateur = substr_count($input[$i], 'X');
    
    $x = 0;
    
    $chars = str_split($input[$i]);
    foreach($chars as $char)
    {
        if($char == 'X')
        {
            if($x == 0)
            {
                if($i == 1 || $i == $length)
                {
                    $count += 3;
                }
                
                else
                {
                    $count += 5;
                }
            }
            
            else if($x == $length)
            {
                if($i == 1 || $i == $length)
                {
                    $count += 3;
                }
                
                else
                {
                    $count += 5;
                }
            }
            
            else
            {
                $count += 8;
            }
            
            
            
            
            
            
            
            
            if($x >= 1 && $x < count($chars) - 1)
            {
                if($chars[$x - 1] == 'X')
                {
                    $count--;
                }
                
                if($chars[$x + 1] == 'X')
                {
                    $count--;
                }
            }
            
            if($i >= 2 && $i < $length)
            {
                if($input[$i - 1][$x] == 'X')
                {
                    $count--;   
                }
                
                if($input[$i + 1][$x] == 'X')
                {
                    $count--;
                }
            }
            
            if($x >= 1 && $x < count($chars) - 1 && $i >= 2 && $i < $length)
            {
                if($input[$i - 1][$x - 1] == 'X')
                {
                    $count--;
                }
                
                if($input[$i - 1][$x + 1] == 'X')
                {
                    $count--;
                }
                
                if($input[$i + 1][$x - 1] == 'X')
                {
                    $count--;
                }
                
                if($input[$i + 1][$x + 1] == 'X')
                {
                    $count--;
                }
            }
        }
        
        $x++;
    }
}

echo $count;

local_print_r($input);

/* Vous pouvez aussi effectuer votre traitement ici après avoir lu toutes les données */
?>