<?php
    require_once(__DIR__."/../vendor/autoload.php");
    require_once(__DIR__."/../src/WordFrequency.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app)
    {
        $sentence_repeat_counter = new RepeatCounter($_GET['sentence'], $_GET['word']);
        $word = $sentence_repeat_counter->getWord();
        $sentence = $sentence_repeat_counter->getSentence();
        $repeats = $sentence_repeat_counter->countRepeats();

        return $app['twig']->render("view_count.html.twig", array("wordToCount" => $word, "wordInput" => $repeats, "sentenceInput" => $sentence));
    });

    return $app;
?>
