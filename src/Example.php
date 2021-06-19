<?php

namespace Base;

class Example
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
     *
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the name of the project.
     *
     * @return string $name
     */
    public function name(): string
    {
        return $this->name;
    }
}
