<?php

namespace Tests\Unit;


use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use function GuzzleHttp\Promise\task;


class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_hash_path()
    {
        $project = factory('App\Project')->create();
        $this->assertEquals('/projects/' . $project->id, $project->path());
    }
}
