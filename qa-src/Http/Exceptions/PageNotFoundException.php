<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

namespace Q2A\Http\Exceptions;

use Q2A\Exceptions\ErrorMessageException;

class PageNotFoundException extends ErrorMessageException
{
	/**
	 * PageNotFoundException constructor.
	 *
	 * @param string $message
	 */
	public function __construct($message = null)
	{
		if ($message === null) {
			$message = qa_lang_html('main/page_not_found');
		}

		parent::__construct($message);
	}
}
