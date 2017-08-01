<?php
namespace unapi\anticaptcha\common;

use GuzzleHttp\Promise\PromiseInterface;

interface AnticaptchaServiceInterface
{
    /**
     * @param string $image
     * @param array $params
     * @return PromiseInterface
     */
    public function decodeImage(string $image, array $params = []): PromiseInterface;
}