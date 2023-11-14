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
            $node->prev = $node;
            $node->next = $node;
            $this->head = $node;
            $this->tail = $node;
        }

        $node->prev = $this->tail;
        $node->next = $this->head;
        $this->tail->next = $node;
        $this->head->prev = $node;
        $this->tail = $node;
    }

    public function insertAtStart($value)
    {
        $node = new ListNode($value);
        if ($this->head === null) {
            $node->prev = $node;
            $node->next = $node;
            $this->head = $node;
            $this->tail = $node;
            return;
        }

        $node->next = $this->head;
        $node->prev = $this->tail;
        $this->head->prev = $node;
        $this->tail->next = $node;
        $this->head = $node;
    }

    public function readList()
    {
        dump($this);
        // $current = $this->head;

        // do {
        //     // dump($current->value);
        //     $current = $current->next;
        // } while ($current !== $this->head);
    }
}
