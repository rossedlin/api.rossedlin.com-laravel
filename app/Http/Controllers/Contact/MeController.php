<?php

namespace App\Http\Controllers\Contact;

use App\Exceptions\ApiException;
use \App\Http\Controllers\Base;
use App\Mail\BasicMail;
use \Cryslo\Enums;
use \Cryslo\Core;

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
        $from    = $this->getRequest()->get('from');
        $subject = $this->getRequest()->get('subject', 'Contact Ross Edlin');
        $content = $this->getRequest()->get('content');

        /**
         * Checks
         */
        if ($from === null) {
            throw new ApiException("Missing required field: from");
        }

        if ($content === null) {
            throw new ApiException("Missing required field: content");
        }


        /**
         * Send the mail
         */
        \Mail::to('contact@rossedlin.com')
             ->send(new BasicMail($subject, $content));

        /**
         * Finish
         */
        return [
            'from'     => $from,
            'template' => 'basic',
            'subject'  => $subject,
            'message'  => $content,
        ];
    }
}
