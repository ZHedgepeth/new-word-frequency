<?php
    class RepeatCounter
    {
        private $word;
        private $repeats;
        private $sentence;

        function __construct($sentence_to_use, $word_to_count)
        {
            $this->word = $word_to_count;
            $this->repeats = 0;
            $this->sentence = $sentence_to_use;
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

        function setSentence($sentence_to_use)
        {
            $this->sentence = (string) $sentence_to_use;
        }

        function countRepeats()
        {
            $check_sentence = $this->getSentence();
            $insensitve_sentence = strtolower($check_sentence);
            $check_word = $this->getWord();
            $insensitve_word = strtolower($check_word);
            $repeats = 0;
            $final_counted_sentence = explode(" ", $insensitve_sentence);

            foreach($final_counted_sentence as $word)
            {
                if ($word === $insensitve_word)
                {
                    $repeats++;
                }

            }
            return $repeats;
        }
    }
?>
