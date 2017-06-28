<?php

namespace FSAPI\Nodes;

/**
* NavActionDabScan is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotenavactiondabscan
*
* see class Node for details
*
*/
class NavActionDabScan extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.nav.action.dabScan';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = true;
    }
}