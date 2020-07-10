<?php

namespace Base\Tests;

use Base\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function testBasic()
    {
        $project = new Project('Example Project');

        $this->assertInstanceOf(Project::class, $project);
        $this->assertEquals('Example Project', $project->name());
    }
}
