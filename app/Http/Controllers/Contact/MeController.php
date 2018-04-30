<?php

namespace App\Http\Controllers\Contact;

use App\Exceptions\ApiException;
use \App\Http\Controllers\Base;
use App\Mail\ContactMeMail;

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
        $content = $this->getRequest()->get('content');

        /**
         * Checks
         */
        if ($name === null) {
            throw new ApiException("<strong>Ops...</strong> <br />Looks like you're missing an name...");
        }

        if ($from === null) {
            throw new ApiException("<strong>Ops...</strong> <br />Looks like you're missing an email...");
        }

        if ($content === null) {
            throw new ApiException("<strong>Ops...</strong> <br />Looks like you're sending a blank message...");
        }


        /**
         * Send the mail
         */
        \Mail::to('contact@rossedlin.com')
             ->send(new ContactMeMail($subject, $name, $from, $content));

        /**
         * Finish
         */
        return [
            'from'     => $from,
            'template' => 'basic',
            'subject'  => $subject,
            'message'  => $content,
            'success'  => true,
        ];
    }
}
