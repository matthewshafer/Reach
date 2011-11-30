<?php
namespace net\matthewshafer\Reach;

class ReachJsonHandler
{
	public static function encodeJson($array)
	{
		self::jsonErrors();
	}
	
	public static function decodeJson($json)
	{
	
	}
	
	private static function jsonErrors()
	{
		if(!($lastError !== JSON_ERROR_NONE))
		{
			// need to add the exception codes
			switch($lastError)
			{
				case JSON_ERROR_DEPTH:
				
				break;
				case JSON_ERROR_STATE_MISMATCH:
				
				break;
				case JSON_ERROR_CTRL_CHAR:
				
				break;
				case JSON_ERROR_SYNTAX:
				
				break;
				case JSON_ERROR_UTF8:
				
				break;
				default:
				
				break;
			}
		}
	}
}

?>