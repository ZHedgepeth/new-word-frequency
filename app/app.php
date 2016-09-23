<?php
    require_once(__DIR__."/../vendor/autoload.php");
    require_once(__DIR__."/../src/WordFrequency.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("index.html.twig");
    });

    $app->get("/count_repeats", function() use($app) {
        $sentence_repeat_counter = new RepeatCounter($_GET['sentence'], $_GET['word']);
        $repeats = $sentence_repeat_counter->countRepeats();
        $sentence = $sentence_repeat_counter->getSentence();
        $word = $sentence_repeat_counter->getWord();

        return $app['twig']->render("view_count.html.twig", array("wordInput" => $word, "wordRepeated" => $repeats, "sentenceInput" => $sentence));
    });

    return $app;
?>
