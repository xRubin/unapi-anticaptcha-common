<?php

namespace unapi\anticaptcha\common\dto;

use unapi\interfaces\DtoInterface;

interface CaptchaSolvedInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getCode(): string;
}