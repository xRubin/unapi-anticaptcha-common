<?php

namespace unapi\anticaptcha\common\task;

use unapi\anticaptcha\common\AnticaptchaTaskInterface;

class ImageTask implements AnticaptchaTaskInterface
{
    const NUMERIC_DEFAULT = 0;
    const NUMERIC_ONLY_DIGITS = 1;
    const NUMERIC_ONLY_LETTERS = 2;

    /** @var string тело файла капчи */
    private $body;

    /** @var int */
    private $numeric = self::NUMERIC_DEFAULT;

    /** @var int */
    private $minLength = 0;

    /** @var int */
    private $maxLength = 0;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        if (!isset($config['body'])) {
            throw new \InvalidArgumentException('Raw body required');
        } else {
            $this->setBody($config['body']);
        }

        if (isset($config['numeric']))
            $this->setNumeric($config['numeric']);

        if (isset($config['minLength']))
            $this->setMinLength($config['minLength']);

        if (isset($config['maxLength']))
            $this->setMaxLength($config['maxLength']);
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
     * @return int
     */
    public function getNumeric(): int
    {
        return $this->numeric;
    }

    /**
     * @param int $numeric
     */
    public function setNumeric(int $numeric)
    {
        $this->numeric = $numeric;
    }

    /**
     * @return int
     */
    public function getMinLength(): int
    {
        return $this->minLength;
    }

    /**
     * @param int $minLength
     */
    public function setMinLength(int $minLength)
    {
        $this->minLength = $minLength;
    }

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     */
    public function setMaxLength(int $maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * @return string[]
     */
    public function asArray(): array
    {
        return [
            'body' => base64_encode($this->getBody()),
            'numeric' => $this->numeric,
            'minLength' => $this->minLength,
            'maxLength' => $this->maxLength,
        ];
    }
}