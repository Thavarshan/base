<?php

declare(strict_types=1);

namespace Base;

/**
 * @internal.
 */
final class Project
{
    /**
     * The name of the project.
     *
     * @var string
     */
    private $name;

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
