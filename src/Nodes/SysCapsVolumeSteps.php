<?php

namespace FSAPI\Nodes;

/**
* SysCapsVolumeSteps is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesyscapsvolumesteps
*
* see class Node for details
*
*/
class SysCapsVolumeSteps extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.caps.volumeSteps';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = false;
        $this->api_level = 1;
    }
}