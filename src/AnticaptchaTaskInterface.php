<?php
namespace unapi\anticaptcha\common;

interface AnticaptchaTaskInterface
{
    /**
     * @return string[]
     */
    public function asArray(): array;
}