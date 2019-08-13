<?php

namespace Altercode\ChuckNorisJokes;

class JokeFactory
{

    protected $jokes = [
        'Joke 1',
        'Joke 2',
        'Joke 3'
    ];

    public function __construct($jokes = null)
    {
        if($jokes != null)
        {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
