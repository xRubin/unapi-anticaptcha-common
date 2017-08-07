<?php
namespace unapi\anticaptcha\common;

use GuzzleHttp\Promise\PromiseInterface;

interface AnticaptchaServiceInterface
{
    /**
     * @param AnticaptchaTaskInterface $task
     * @param array $options
     * @return PromiseInterface
     */
    public function resolve(AnticaptchaTaskInterface $task, $options = []): PromiseInterface;

    /**
     * @return PromiseInterface
     */
    public function getBalance(): PromiseInterface;
}