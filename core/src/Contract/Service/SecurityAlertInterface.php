<?php

namespace App\Contract\Service;

/**
 * Interface SecurityAlertInterface
 * @package App\Contract\Service
 */
interface SecurityAlertInterface
{
    /**
     * Update the list of SecurityAlert
     *
     * @return bool
     * @throws \RuntimeException
     */
    public function updateList(): bool;
}