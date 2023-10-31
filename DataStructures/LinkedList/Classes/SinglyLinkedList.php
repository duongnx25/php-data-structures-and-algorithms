<?php

namespace DataStructures\LinkedList\Classes;

use DataStructures\LinkedList\Classes\ListNode;
use DataStructures\LinkedList\Classes\LinkedListInterface;

class SinglyLinkedList implements LinkedListInterface
{
    public ?ListNode $head = null;

    public function insertAtEnd($value)
    {
        $node = new ListNode($value);
        if ($this->head === null) {
            $this->head = $node;
            return;
        }
        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;
        }
        $current->next = $node;
    }

    public function readList()
    {
        $current = $this->head;

        while ($current != NULL) {
            dump($current->value);
            $current = $current->next;
        }
    }
}