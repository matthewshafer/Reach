<?php
namespace net\matthewshafer\Reach;

/**
 * ReachClient class.
 * 
 * Construct a ReachClient object to be able to contact a Reach server
 * to check for updates.
 *
 * @author Matthew Shafer <matthewshafer@niftystopwatch.com>
 * 
 */
class ReachClient
{
	private $appVersion;
	private $appName;
	private $reachUrl;
	private $versionData = null;
	private $apiVersion = 1;
	
	/**
	 * __construct function.
	 * 
	 * description
	 *
	 * @access public
	 * @param string $appVersion
	 * @param string $appName
	 * @param string $reachUrl
	 */
	public function __construct($appVersion, $appName, $reachUrl)
	{
		$this->appVersion = $appVersion;
		$this->appName = $appName;
		$this->reachUrl = $reachUrl;
	}
	
	public function checkForUpdate()
	{
	
	}
	
	public function sendStatistics(ReachStastics $stats)
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