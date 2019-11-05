<?php

namespace Base;

class Project
{
    /**
     * The name of the project.
     *
     * @var string
     */
    protected $name;

    /**
     * Create a new project instance.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
