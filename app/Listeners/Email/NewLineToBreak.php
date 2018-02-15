<?php

namespace App\Listeners\Email;

use App\Events\Email\BeforeSend;
use Cryslo\Core\Consts;

class NewLineToBreak
{
	/**
	 * Handle the event.
	 *
	 * @param  BeforeSend $event
	 *
	 * @return void
	 */
	public function handle(BeforeSend $event)
	{
		if ($event->getEmail()->getContentType() == Consts::CONTENT_TYPE_PLAIN)
		{
			$content = $event->getEmail()->getArg('content');
			$event->getEmail()->setArg('content', nl2br($content));
		}
	}
}
