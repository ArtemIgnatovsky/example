<?php

declare(strict_types = 1);

namespace App\Services;

class Paginator
{
    /**
     * @var int
     */
    private $countPerPage;

    /**
     * Paginator constructor.
     * @param int $countPerPage
     */
    public function __construct(int $countPerPage)
    {
        $this->countPerPage = $countPerPage;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->countPerPage;
    }
}
