<?php
namespace App\Http\Controllers\Email;

use \App\Http\Controllers;
use \Cryslo\Api;
use \Cryslo\Core;
use \Cryslo\Object;

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
class SendControllerAbstract extends Controllers\AbstractApiController
{
	/**
	 * @var \Cryslo\Object\Email $email
	 */
	private $email;

	/**
	 * @return array
	 */
	protected function getPayload()
	{
		$this->email = new \Cryslo\Object\Email();
		$this->email->setTo($this->getRequest()->input('to', 'contact@rossedlin.com'));
		$this->email->setFrom($this->getRequest()->input('from', 'noreply@rossedlin.com'));
		$this->email->setSubject($this->getRequest()->input('subject'));

		/**
		 * Args
		 */
		$this->email->setArgs([
			'title' => $this->getRequest()->input('title'),
			'content' => $this->getRequest()->input('content'),
		]);

		/**
		 * Fire off an Event for Before Send
		 */
		event(new \App\Events\Email\BeforeSend($this->email));

		\Mail::send('emails.clean.message', $this->email->getArgs(), function ($message)
		{
			/**
			 * @var \Illuminate\Mail\Message $message
			 */
			$message->from($this->email->getFrom(), $this->email->getFromName());
			$message->setSubject($this->email->getSubject());
			$message->to($this->email->getTo());
		});

		return [
			'to'      => $this->email->getTo(),
			'subject' => $this->email->getSubject(),
		];
	}
}