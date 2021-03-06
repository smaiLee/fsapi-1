<?php

namespace FSAPI\Nodes;

use FSAPI\Converters\ConverterList;

/**
* SysMode is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysmode
*
* see class Node for details
*
*/
class SysMode extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.mode';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = true;
        $this->converter = new ConverterList();
        $this->api_level = 1;
    }
}