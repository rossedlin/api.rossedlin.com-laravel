<?php

namespace App\Http\Controllers\Mail;

use \App\Exceptions\ApiException;
use \App\Http\Controllers\Base;
use \App\Objects\Mail;

//use \Cryslo\Api;
//use \Cryslo\Core;
//use \Cryslo\Object;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/02/2018
 * Time: 12:32
 *
 * Class Send
 *
 * @package App\Http\Controllers\Email
 */
class SendController extends Base\ApiController
{
    /**
     * @var Mail $email
     */
    private $email;

    /**
     * @return array
     * @throws ApiException
     */
    protected function getPayload()
    {
        $to      = $this->getRequest()->get('to');
        $from    = $this->getRequest()->get('from', 'noreply@rossedlin.com');
        $subject = $this->getRequest()->get('subject', 'Ross Edlin');
        $message = $this->getRequest()->get('message');

        /**
         * Checks
         */
        if ($to === null) {
            throw new ApiException("Missing required field: to");
        }

        /**
         * Build Email Object
         */
        $this->email = new Mail();
        $this->email->setTo($to);
        $this->email->setFrom($from);
        $this->email->setSubject($this->getRequest()->input('subject'));


//        /**
//         * Fire off an Event for Before Send
//         */
//        event(new \App\Events\Email\BeforeSend($this->email));

        /**
         * Args
         */
        $args = [
            'title'   => $this->getRequest()->input('title'),
            'content' => $this->getRequest()->input('content'),
        ];

        \Mail::send('mail.clean.message', $args, function ($mail) {

            /**
             * @var \Illuminate\Mail\Message $mail
             */
            $mail->from('contact@rossedlin.com', 'Ross Edlin');
            $mail->setSubject('Ross Edlin');
            $mail->to('rossedlin@gmail.com');
        });

        return [
            'to'      => $to,
            'subject' => $subject,
            'message' => $message,
        ];
    }
}
