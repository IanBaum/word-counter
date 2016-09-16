<?php
    class word_counter{

        function count_word($target, $sentence){
            $word_count = 0;
            $sentence_lower = strtolower($sentence);
            $sentence_words = explode(" ", $sentence_lower);
            foreach($sentence_words as $word){
                if($word === $target){
                    $word_count++;
                }
            }
            return $word_count;
        }
    }
?>
