<?php

declare(strict_types=1);

namespace WireUi\View\Components;

use Illuminate\Contracts\Support\Htmlable;

class FixedComponent implements Htmlable
{
    /**
     * @var string|null
     */
    protected $content;

    /**
     * FixedComponent constructor.
     *
     * @param string|null $content
     */
    public function __construct(string $content = null)
    {
        $this->content = $content;
    }

    /**
     * @return string|null
     */
    public function toHtml(): ?string
    {
        return $this->content;
    }
}