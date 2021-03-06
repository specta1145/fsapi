<?php
class ScannerInterceptor implements Scanners
{
	var $response = null;
	var $details = null;
	
	
	
    /**
     * create a new Scanner-Interceptor Object, which simulates the broadcast and curl Request
     *
     * @param string $response    The expected response
     *
     * @param string $details        The expected details array
     *
     */
	public function __construct($response,$details = null)
    {
        $this->response = $response;
		$this->details = $details;
    }


    /**
     *  Interceptor for function which scans the local network for upnp devices
     *
     * @param string $type type-string of the upnp device
     * @return array with discovered devices
     */
	function doScan($type){
		$response = $this->response;
		if(!is_null($this->details)){
			$response['details'] = $this->getDetails('TEST');
		}
		return $response;
		
	}


    /**
     *  Interceptor for function which makes an http request to collect more data from an device provided url
     *
     * @param string $url the url to collect more data from
     * @return array , first value is the status true or false the second value is an array with the answer of the device
     * @throws ScannerException
     */
	function getDetails($url){
		if($this->details === FALSE){
			throw new ScannerException('Test-Exception');
		}
		return $this->details;
	}
	
}