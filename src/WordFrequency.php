<?php
    class RepeatCounter
    {
        private $word;
        private $repeats;
        private $sentence;

        function __construct($sentence_string, $word_to_count)
        {
            $this->word = $word_to_count;
            $this->repeats = 0;
            $this->sentence = $sentence;
        }

        function getWord()
        {
            return $this->word;
        }

        function setWord($word_to_count)
        {
            $this->word = (string) $word_to_count;
        }

        function getRepeats()
        {
            return $this->repeats;
        }

        function setRepeats($word_to_count_repeats)
        {
            $this->repeats = (int) $word_to_count_repeats;
        }

        function getSentence()
        {
            return $this->sentence;
        }

        function setSentence($sentence_string)
        {
            $this->sentence = (string) $sentence_used;
        }

        function CountRepeats()
        {
            $word_to_count = $this->getWord();
            $repeats = 0;
            $sentence_word_to_count = $this->getSentence();
            $insensitve_sentence = strtolower($word_to_count);
            $final_counted_sentence = explode(" ", $insensitve_sentence);

            foreach($final_counted_sentence as $word)
            {
                if ($sentence === $counted_word)
                {
                    $repeats += 1;
                }

            }
            return $repeats;
        }
    }
?>
