<?php

namespace DataStructures\LinkedList\Classes;

use DataStructures\LinkedList\Classes\ListNode;
use DataStructures\LinkedList\Classes\Interfaces\LinkedListInterface;

class SinglyLinkedList implements LinkedListInterface
{
    private ?ListNode $head = null;

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

        while ($current != null) {
            dump($current->value);
            $current = $current->next;
        }
    }
}