<?php

namespace FSAPI\Nodes;

/**
* SysNetWlanSetPassphrase is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysnetwlansetpassphrase
*
* see class Node for details
*
*/
class SysNetWlanSetPassphrase extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.net.wlan.setPassphrase';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}