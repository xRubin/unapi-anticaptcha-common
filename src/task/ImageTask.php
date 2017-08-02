<?php

namespace unapi\anticaptcha\common\task;

use unapi\anticaptcha\common\AnticaptchaTaskInterface;

class ImageTask implements AnticaptchaTaskInterface
{
    /** @var string тело файла капчи */
    protected $body;

    /**
     * @param string $body
     */
    public function __construct(string $body)
    {
        $this->setBody($body);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return ImageTask
     */
    public function setBody(string $body): ImageTask
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return string[]
     */
    public function asArray(): array
    {
        return [
            'body' => base64_encode($this->getBody())
        ];
    }
}