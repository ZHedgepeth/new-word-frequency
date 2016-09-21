<?php

    require_once (__DIR__ . "/../WordFrequency.php");

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_OneLetterWordOneLetterStringMatch()
        {

            //ARRANGE
            $word = "a";
            $sentence = "a";
            $repeats = 1;
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

        function test_OneLetterWordOneLetterStringNonMatch()
        {

            //ARRANGE
            $word = "a";
            $sentence = "b";
            $repeats = 0;
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

        function test_OneLetterWordMultiLetterStringOneMatch()
        {

            //ARRANGE
            $word = "a";
            $sentence = "a", "b";
            $repeats = 1;
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

        function test_OneWordOneWordStringMatch()
        {

            //ARRANGE
            $word = "ant";
            $sentence = "ant";
            $repeats = 1;
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

        function test_OneWordOneWordStringNonMatch()
        {

            //ARRANGE
            $word = "a";
            $sentence = "a";
            $repeats = 1;
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

        function test_OneLetterWordOneLetterStringMatch()
        {

            //ARRANGE
            $word = "a";
            $sentence = "a";
            $repeats = 1;
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

        function test_OneLetterWordOneLetterStringMatch()
        {

            //ARRANGE
            $word = "a";
            $sentence = "a";
            $repeats = 1;
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

    }


?>
