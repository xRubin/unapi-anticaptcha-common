<?php

namespace unapi\anticaptcha\common\task;

use unapi\anticaptcha\common\AnticaptchaTaskInterface;

class ReCaptcha2Task implements AnticaptchaTaskInterface
{
    /** @var string адрес страницы на которой решается капча */
    protected $siteUrl;
    /** @var string люч-индентификатор рекапчи на целевой странице. <div class="g-recaptcha" data-sitekey="ВОТ_ЭТОТ"></div>  */
    protected $siteKey;

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