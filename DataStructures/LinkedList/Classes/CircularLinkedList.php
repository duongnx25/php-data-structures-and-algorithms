<?php

namespace DataStructures\LinkedList\Classes;

use DataStructures\LinkedList\Classes\Interfaces\LinkedListInterface;

class CircularLinkedList implements LinkedListInterface
{
    private ?ListNode $head = null;
    private ?ListNode $tail = null;

    public function insertAtEnd($value)
    {
        $node = new ListNode($value);
        if ($this->head === null) {
            $this->head = $node;
            $this->tail = $node;
            $this->head->next = $node;
            $this->head->prev = $node;
            return;
        }
        $node->next = $this->head;
        $node->prev = $this->tail;
        $this->tail->next = $node;
        $this->head->prev = $node;
        $this->tail = $node;
    }

    public function readList()
    {
        $current = $this->head;
        dump($this);
        die;

        while ($current->next !== null) {
            // dump($current->value);
            $current = $current->next;
        }
    }
}
