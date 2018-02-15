<?php

namespace App\Events\Email;

class BeforeSend
{
    /**
     * @var \Cryslo\Object\Email
     */
    private $email;

    /**
     * Send constructor.
     *
     * @param \Cryslo\Object\Email $email
     */
    public function __construct(\Cryslo\Object\Email $email)
    {
        $this->email = $email;
    }

    /**
     * @return \Cryslo\Object\Email
     */
    public function getEmail() : \Cryslo\Object\Email
    {
        return $this->email;
    }

    /**
     * @param \Cryslo\Object\Email $email
     */
    public function setEmail(\Cryslo\Object\Email $email)
    {
        $this->email = $email;
    }
}
