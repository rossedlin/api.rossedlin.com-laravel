<?php

namespace App\Http\Controllers\Mail;

use \App\Exceptions\ApiException;
use \App\Http\Controllers\Base;
use App\Mail\BasicMail;
use App\Mail\CleanMail;
use App\Mail\HelloWorldMail;
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
     * @return array
     * @throws ApiException
     */
    protected function getPayload()
    {
        $to      = $this->getRequest()->get('to');
        $from    = $this->getRequest()->get('from', 'noreply@rossedlin.com');
        $subject = $this->getRequest()->get('subject', 'Ross Edlin');
        $content = $this->getRequest()->get('content');

        /**
         * Checks
         */
        if ($to === null) {
            throw new ApiException("Missing required field: to");
        }

        if ($content === null) {
            throw new ApiException("Missing required field: content");
        }


        /**
         * Send the mail
         */
        \Mail::to($to)
             ->send(new BasicMail($subject, $content));

        /**
         * Finish
         */
        return [
            'to'       => $to,
            'from'     => $from,
            'template' => 'basic',
            'subject'  => $subject,
            'message'  => $content,
        ];
    }
}
