<?php

    require_once (__DIR__ . "/../src/WordFrequency.php");

    class RepeatCounterTest extends PHPUnit_Framework_TestCase

    {
        function testOneLetterWordOneLetterStringMatch()

        {
            //ARRANGE
            $word = "a";
            $sentence = "a";
            $expected_outcome = 1;
            $repeat_counter_instance = new RepeatCounter($sentence, $word);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }

        function testOneLetterWordOneLetterStringNonMatch()

        {
            //ARRANGE
            $word = "a";
            $sentence = "b";
            $expected_outcome = 0;
            $repeat_counter_instance = new RepeatCounter($sentence, $word);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }

        function testOneLetterWordMultiLetterStringOneMatch()

        {
            //ARRANGE
            $word = "a";
            $sentence = "a b";
            $expected_outcome = 1;
            $repeat_counter_instance = new RepeatCounter($sentence, $word);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }

        function testOneWordOneWordStringMatch()

        {
            //ARRANGE
            $word = "ant";
            $sentence = "ant";
            $expected_outcome = 1;
            $repeat_counter_instance = new RepeatCounter($sentence, $word);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }

        function testOneWordOneWordStringNonMatch()

        {
            //ARRANGE
            $word = "ant";
            $sentence = "bug";
            $expected_outcome = 0;
            $repeat_counter_instance = new RepeatCounter($sentence, $word);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats($sentence, $word);

            //ASSERT
            $this->assertEquals($expected_outcome, $test_result);
        }

        function testOneWordOneOneStringMultiMatch()
        {

            //ARRANGE
            $word = "ant";
            $sentence = "the ant crawled to the ant hole to see another ant";
            $repeats = 3;
            $repeat_counter_instance = new RepeatCounter($sentence, $word);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats($sentence, $word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

        function testOneWordOneOneStringMultiNonMatch()
        {

            //ARRANGE
            $word = "ant";
            $sentence = "the bug found all of the spiders eating catching their buddies.";
            $repeats = 0;
            $repeat_counter_instance = new RepeatCounter($sentence, $word);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats($sentence, $word);

            //ASSERT
            $this->assertEquals($repeats, $test_result);
        }

    }

?>
