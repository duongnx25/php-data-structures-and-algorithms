<?php

namespace DataStructures\LinkedList\Classes;

class ListNode
{
    public $value;
    public $next;
    public $prev;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
        $this->prev = null;
    }
}
