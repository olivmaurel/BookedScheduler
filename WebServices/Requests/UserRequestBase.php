<?php
/**
Copyright 2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'WebServices/Requests/AttributeValueRequest.php');

abstract class UserRequestBase
{
	public $firstName;
	public $lastName;
	public $emailAddress;
	public $userName;
	public $timezone;
	public $phone;
	public $organization;
	public $position;
	/** @var array|AttributeValueRequest[] */
	public $customAttributes = array();

	/**
	 * @return array|AttributeValueRequest[]
	 */
	public function GetCustomAttributes()
	{
		if (!empty($this->customAttributes))
		{
			return $this->customAttributes;
		}
		return array();
	}
}


?>