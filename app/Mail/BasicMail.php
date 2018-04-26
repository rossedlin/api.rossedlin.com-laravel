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
 * Date: 26/04/2018
 * Time: 14:55
 *
 * Class BasicMail
 * @package App\Mail
 */
class BasicMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $content;

    /**
     * Create a new message instance.
     *
     * @param string $title
     * @param string $content
     *
     * @return void
     */
    public function __construct(string $title, string $content)
    {
        $this->title   = $title;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.basic.message', [
            'title'   => $this->title,
            'content' => $this->content,
        ])
                    ->subject($this->title);
    }
}
