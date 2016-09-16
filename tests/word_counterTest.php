<?php
    require_once __DIR__."/../src/word_counter.php";

    class word_counterTest extends PHPUnit_Framework_TestCase{

        function testcount_word_alone(){
            //Arrange
            $testword_counter = new word_counter;
            $test_target = "dog";
            $test_sentence = "dog";

            //Act
            $result = $testword_counter->count_word($test_target, $test_sentence);

            //Assert
            $this->assertEquals(1, $result);
        }

        function testcount_word_multi(){
            //Arrange
            $testword_counter = new word_counter;
            $test_target = "dog";
            $test_sentence = "dog dog";

            //Act
            $result = $testword_counter->count_word($test_target, $test_sentence);

            //Assert
            $this->assertEquals(2, $result);
        }

        function testcount_word_non_target(){
            //Arrange
            $testword_counter = new word_counter;
            $test_target = "dog";
            $test_sentence = "dog chased dog";

            //Act
            $result = $testword_counter->count_word($test_target, $test_sentence);

            //Assert
            $this->assertEquals(2, $result);
        }
    }
?>
