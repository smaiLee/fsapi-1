<?php

namespace FSAPI\Nodes;

/**
* MultiroomGroupRemoveClient is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotemultiroomgroupremoveclient
*
* see class Node for details
*
*/
class MultiroomGroupRemoveClient extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.multiroom.group.removeClient';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}