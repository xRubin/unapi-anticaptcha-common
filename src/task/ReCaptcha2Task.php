<?php

namespace unapi\anticaptcha\common\task;

use unapi\anticaptcha\common\AnticaptchaTaskInterface;

class ReCaptcha2Task implements AnticaptchaTaskInterface
{
    /** @var string адрес страницы на которой решается капча */
    private $siteUrl;
    /** @var string ключ-индентификатор рекапчи на целевой странице. <div class="g-recaptcha" data-sitekey="ВОТ_ЭТОТ"></div> */
    private $siteKey;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        if (!isset($config['siteUrl'])) {
            throw new \InvalidArgumentException('Site Url required');
        } else {
            $this->setSiteUrl($config['siteUrl']);
        }

        if (!isset($config['siteKey'])) {
            throw new \InvalidArgumentException('Site Key required');
        } else {
            $this->setSiteKey($config['siteKey']);
        }
    }

    /**
     * @return string
     */
    public function getSiteUrl(): string
    {
        return $this->siteUrl;
    }

    /**
     * @param string $siteUrl
     */
    public function setSiteUrl(string $siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }

    /**
     * @return string
     */
    public function getSiteKey(): string
    {
        return $this->siteKey;
    }

    /**
     * @param string $siteKey
     */
    public function setSiteKey(string $siteKey)
    {
        $this->siteKey = $siteKey;
    }

    /**
     * @return string[]
     */
    public function asArray(): array
    {
        return [
            'siteUrl' => $this->getSiteUrl(),
            'siteKey' => $this->getSiteKey()
        ];
    }
}