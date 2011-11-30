<?php
namespace net\matthewshafer\Reach;

class ReachClient
{
	private $appVersion;
	private $appName;
	private $reachUrl;
	private $versionData = null;
	private $apiVersion = 1;
	
	public __construct($appVersion, $appName, $reachUrl)
	{
		$this->appVersion = $appVersion;
		$this->appName = $appName;
		$this->reachUrl = $reachUrl;
	}
	
	public function checkForUpdate()
	{
	
	}
	
	public function sendStatistics()
	{
	
	}
	
	public function getChangelog()
	{
		$return = null;
		
		if($this->versionData !== null && isset($this->versionData['changelog']))
		{
			$return = $this->versionData['changelog'];
		}
		
		return $return;
	}
	
	public function getDownloadUrl()
	{
		$return = null;
		
		if($this->versionData !== null && isset($this->versionData['downloadUrl']))
		{
			$return = $this->versionData['downloadUrl'];
		}
		
		return $return;
	}
	
	public function getVersion()
	{
		$return = null;
		
		if($this->versionDate !== null && isset($this->versionData['version']))
		{
			$return = $this->versionData['version'];
		}
		
		return $return;
	}
}
?>