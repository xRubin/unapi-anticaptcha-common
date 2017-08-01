<?php
namespace unapi\anticaptcha\common;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;

interface AnticaptchaInterface
{
    /**
     * @param ClientInterface $client
     * @param ResponseInterface $response
     * @return PromiseInterface
     */
    public function getAnticaptchaPromise(ClientInterface $client, ResponseInterface $response): PromiseInterface;
}