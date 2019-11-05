<?php

namespace Base\Tests;

use Base\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    /**
     * The project instance.
     *
     * @var string
     */
    protected $project;

    protected function setUp(): void
    {
        $this->project = new Project('project name');
    }

    public function testBasic()
    {
        $this->assertInstanceOf(Project::class, $this->project);
    }
}
