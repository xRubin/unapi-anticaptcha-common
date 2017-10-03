<?php
namespace unapi\anticaptcha\common;

use GuzzleHttp\Promise\PromiseInterface;
use unapi\interfaces\ServiceInterface;

interface AnticaptchaServiceInterface extends ServiceInterface
{
    /**
     * @param AnticaptchaTaskInterface $task
     * @return PromiseInterface
     */
    public function resolve(AnticaptchaTaskInterface $task): PromiseInterface;
}