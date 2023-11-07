<?php

namespace DataStructures\LinkedList\Classes;

use DataStructures\LinkedList\Classes\ListNode;
use DataStructures\LinkedList\Classes\Interfaces\LinkedListInterface;

class SinglyLinkedList implements LinkedListInterface
{
    private ?ListNode $head = null;
    private ?ListNode $tail = null;

    public function insertAtEnd($value)
    {
        $node = new ListNode($value);

        if ($this->head === null) {
            $this->head = $node;
            $this->tail = $node;
            return;
        }

        $this->tail->next = $node;
        $this->tail = $node;
    }

    public function readList()
    {
        $current = $this->head;
        dump($this);
        die;

        while ($current != null) {
            dump($current->value);
            $current = $current->next;
        }

    }
}