<?php
class service
{
	public $service_name;
	public $port;
	public $url;
	public $host;
	public $status;
	public $username;
	public $password;
	public $api;
	public $sabSpeedLimitMax;
	public $sabSpeedLimitMin;
	public $ping_throttle;


	function __construct($service_name, $port, $url = '', $host)
	{

		$this->service_name = $service_name;
		$this->port = $port;
		$this->url = $url;
		$this->host = $host;
		
		$this->status = $this->check_port();
	}
	
	function check_port()
	{
		$conn = @fsockopen($this->host, $this->port, $errno, $errstr, 0.5);
		if ($conn) 
		{
			fclose($conn);
			return true;
		}
		else
			return false;
	}
	
	function makeButton()
	{
		$icon = '<i class="icon-' . ($this->status ? 'ok' : 'remove') . ' icon-white"></i>';
		$btn = $this->status ? 'success' : 'warning';
		$prefix = $this->url == "" ? '<button style="width:62px" class="btn btn-xs btn-' . $btn . ' disabled">' : '<a href="' . $this->url . '" style="width:62px" class="btn btn-xs btn-' . $btn . '">';
		$txt = $this->status ? 'Online' : 'Offline';
		$suffix = $this->url == "" ? '</button>' : '</a>';
		
		return $prefix . $icon . " " . $txt . $suffix;
	}
}
?>