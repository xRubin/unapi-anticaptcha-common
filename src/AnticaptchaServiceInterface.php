<?php
namespace unapi\anticaptcha\common;

use GuzzleHttp\Promise\PromiseInterface;

interface AnticaptchaServiceInterface
{
    /**
     * @param AnticaptchaTaskInterface $task
     * @return PromiseInterface
     */
    public function resolve(AnticaptchaTaskInterface $task): PromiseInterface;
}