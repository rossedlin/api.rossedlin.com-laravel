<?php

namespace App\Http\Controllers\Contact;

use \App\Exceptions\ApiException;
use \App\Http\Controllers\Base;
use \App\Mail\ContactMeMail;
use \App\Models\LogContact;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 27/04/2018
 * Time: 13:23
 *
 * Class ContactController
 *
 * @package App\Http\Controllers
 */
class MeController extends Base\ApiController
{
    /**
     * @return array
     * @throws ApiException
     */
    protected function getPayload()
    {
        $name    = $this->getRequest()->get('name');
        $from    = $this->getRequest()->get('from');
        $subject = $this->getRequest()->get('subject', 'Contact - Ross Edlin');
        $message = $this->getRequest()->get('message');

        /**
         * Checks
         */
        if ($name === null) {
            throw new ApiException("<strong>Ops...</strong> <br />Looks like you're missing an name...");
        }

        if ($from === null) {
            throw new ApiException("<strong>Ops...</strong> <br />Looks like you're missing an email...");
        }

        if ($message === null) {
            throw new ApiException("<strong>Ops...</strong> <br />Looks like you're sending a blank message...");
        }

        /**
         * Log Contact
         */
        $log             = new LogContact();
        $log->ip_address = $this->getRequest()->ip();
        $log->name       = $name;
        $log->email      = $from;
        $log->message    = $message;
        $log->save();


        /**
         * Send the mail
         */
        \Mail::to('contact@rossedlin.com')
             ->send(new ContactMeMail($subject, $name, $from, $message));

        /**
         * Finish
         */
        return [
            'from'     => $from,
            'template' => 'basic',
            'subject'  => $subject,
            'message'  => $message,
            'success'  => true,
        ];
    }
}
