<?php
    $world = "(((*))(((((*)))(*))))";
    
    function find($string){
    
        $array = str_split ($string);
        $counter=array();
        $level=0;
    
        for ( $i=0 ; $i < count($array);$i++){
    
            if($array[$i]=="("){          
    
                $level=$level-1;
    
            }
    
            if($array[$i]==")"){
    
                $level=$level+1;
    
            }
    
            if($array[$i]=="*"){
    
                if (!isset($counter[$level])){
    
                    $counter[$level]=1;
    
                }
    
                else{
    
                    $counter[$level]++;
    
                }
    
            }
    
        }

        $searched_level = array_search(max($counter), $counter);
    
        for ( $i=0 ; $i < count($array);$i++){
    
            if($array[$i]=="("){
				
                $level=$level-1;
    
            }
    
            if($array[$i]==")"){
				
                $level=$level+1;
    
            }
    
            if($array[$i]=="*"&&$level==$searched_level){
				
                return $i;
    
            }
        
        }
    
    }

    echo find($world);
?>