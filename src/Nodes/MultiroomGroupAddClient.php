<?php

namespace FSAPI\Nodes;

/**
* MultiroomGroupAddClient is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotemultiroomgroupaddclient
*
* see class Node for details
*
*/
class MultiroomGroupAddClient extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.multiroom.group.addClient';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}