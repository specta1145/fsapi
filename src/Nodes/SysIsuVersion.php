<?php

namespace FSAPI\Nodes;

/**
* SysIsuVersion is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysisuversion
*
* see class Node for details
*
*/
class SysIsuVersion extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.isu.version';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = false;
        $this->api_level = 1;
    }
}