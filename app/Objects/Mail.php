<?php

namespace App\Objects;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 26/04/18
 * Time: 11:47
 *
 * Class Email
 * @package App\Objects
 */
class Mail
{
    const CONTENT_TYPE_PLAIN = 'text/plain';
    const CONTENT_TYPE_HTML  = 'text/html';

    /** @var string $body */
    private $body = false;

    /** @var string $contentType */
    private $contentType = self::CONTENT_TYPE_PLAIN;

    /** @var string $from */
    private $from = false;

    /** @var string $from */
    private $fromName = false;

    /** @var string $subject */
    private $subject = false;

    /** @var string $to */
    private $to = false;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        switch ((string)$contentType) {
            case self::CONTENT_TYPE_PLAIN:
                $this->contentType = self::CONTENT_TYPE_PLAIN;
                break;

            case self::CONTENT_TYPE_HTML:
                $this->contentType = self::CONTENT_TYPE_HTML;
                break;
        }
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @param string $fromName
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject - Subject must satisfy » RFC 2047.
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }
}
