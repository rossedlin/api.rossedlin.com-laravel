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
class Send extends Controllers\_Api
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
		$this->email->setContentType($this->getRequest()->input('content_type'));
		$this->email->setSubject($this->getRequest()->input('subject'));
		$this->email->setBody($this->getRequest()->input('body'));

		event(new \App\Events\Email\BeforeSend($this->email));

		$args = [
			'title' => 'Title Coming Soon',
			'content' => $this->email->getBody()
		];

		\Mail::send('emails.clean.message', $args, function ($message)
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