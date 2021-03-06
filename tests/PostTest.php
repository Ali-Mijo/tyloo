<?php

namespace Tests;

use App\Post;
use App\Tag;
use App\User;
use Mockery;

class PostTest extends AbstractTestCase
{
    /** @test */
    public function it_has_an_author()
    {
        $mock = Mockery::mock(Post::class)->makePartial();
        $mock->shouldReceive('belongsTo')
            ->once()
            ->with(User::class)
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->author());
    }

    /** @test */
    public function it_has_tags()
    {
        $mock = Mockery::mock(Post::class)->makePartial();
        $mock->shouldReceive('morphToMany')
            ->once()
            ->with(Tag::class, 'taggable')
            ->andReturn('mocked');

        $this->assertEquals('mocked', $mock->tags());
    }
}
