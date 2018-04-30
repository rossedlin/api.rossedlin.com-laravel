<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 30/04/2018
 * Time: 12:00
 *
 * Class ContactMeMail
 * @package App\Mail
 */
class ContactMeMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $name;
    protected $email;
    protected $content;

    /**
     * Create a new message instance.
     *
     * @param string $title
     * @param string $name
     * @param string $email
     * @param string $content
     *
     * @return void
     */
    public function __construct(string $title, string $name, string $email, string $content)
    {
        $this->title   = $title;
        $this->name    = $name;
        $this->email   = $email;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact-me.message', [
            'title'   => $this->title,
            'name'    => $this->name,
            'email'   => $this->email,
            'content' => $this->content,
        ])
                    ->subject($this->title);
    }
}
