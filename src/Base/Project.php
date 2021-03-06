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
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the name of the project.
     */
    public function name(): string
    {
        return $this->name;
    }
}
