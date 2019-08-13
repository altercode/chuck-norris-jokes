<?php

namespace Altercode\ChuckNorisJokes\Tests;

use Altercode\ChuckNorisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_predefined_joke()
    {
        $jokes_list = [
            'Joke 1',
            'Joke 2',
            'Joke 3'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $jokes_list);
    }
}
