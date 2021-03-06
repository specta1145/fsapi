<?php

namespace FSAPI\Nodes;

/**
* MultiroomGroupStreamable is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotemultiroomgroupstreamable
*
* see class Node for details
*
*/
class MultiroomGroupStreamable extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.multiroom.group.streamable';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
    }
}