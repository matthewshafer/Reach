<?php
namespace net\matthewshafer\Reach;

class ReachStastics
{
	private $internalArray = array();
	
	public function __construct()
	{
		$this->internalArray['applicationName'] = null;
		$this->internalArray['applicationVersion'] = null;
		$this->internalArray['stasticsVersion'] = 1;
		$this->internalArray['stasticsData'] = array();
	}
	
	public function setApplicationName($name)
	{
		if(!is_string($name))
		{
			throw new exception("Name is not a string");
		}
		
		$this->internalArray['applicationName'] = $name;
	}
	
	public function setApplicationVersion($version)
	{
		if(!is_string($version) || !is_numeric($version))
		{
			throw new exception("Version must be a string or a number");
		}
		
		$this->internalArray['applicationVersion'] = $version;
	}
	
	public function addKeyValue($key, $value)
	{
		if(!is_string($key))
		{
			throw new exception("Key must be a string");
		}
		
		if(!is_string($value))
		{
			throw new exception("Value must be a string");
		}
		
		if(isset($this->internalArray['stasticsData'][$key]))
		{
			throw new exception("Key has already been set in the array");
		}
		
		$this->internalArray['stasticsData'][$key] = $value;
	}
	
	public function encodeStastics()
	{
		// should add some encoding options to json_encode.  Possibly the one for big integers to strings
		// also need to check for json encoding errors
		return json_encode($this->internalArray);
	}
}
?>