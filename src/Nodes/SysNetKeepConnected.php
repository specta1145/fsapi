<?php

namespace FSAPI\Nodes;

/**
* SysNetKeepConnected is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysnetkeepconnected
*
* see class Node for details
*
*/
class SysNetKeepConnected extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.net.keepConnected';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
        $this->api_level = 1;
    }
}