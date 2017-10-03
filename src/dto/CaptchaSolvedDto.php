<?php

namespace unapi\anticaptcha\common\dto;

use unapi\interfaces\DtoInterface;

class CaptchaSolvedDto implements CaptchaSolvedInterface
{
    /** @var string */
    private $code;

    /**
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }


    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return (new CaptchaSolvedDto($data['code']));
    }
}