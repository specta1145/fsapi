<?php

namespace FSAPI\Nodes;

/**
* PlayInfoText is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremoteplayinfotext
*
* see class Node for details
*
*/
class PlayInfoText extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.play.info.text';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
        $this->api_level = 1;
    }
}