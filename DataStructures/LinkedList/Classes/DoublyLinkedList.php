<?php

namespace DataStructures\LinkedList\Classes;

use DataStructures\LinkedList\Classes\Interfaces\LinkedListInterface;
use DataStructures\LinkedList\Classes\ListNode;

class DoublyLinkedList implements LinkedListInterface
{
    private ?ListNode $head = null;
    private ?ListNode $tail = null;

    public function contains($value): bool
    {
        $current = $this->head;

        while ($current !== null) {
            if ($current->value === $value) {
                return true;
            }
            $current = $current->next;
        }

        return false;
    }

    public function find($value): ?ListNode
    {
        $current = $this->head;

        while ($current !== null) {
            if ($current->value === $value) {
                return $current;
            }
            $current = $current->next;
        }

        return null;
    }

    public function insertAtEnd($value)
    {
        $node = new ListNode($value);

        if ($this->head === null) {
            $this->head = $node;
            $this->tail = $node;
            return;
        }

        $node->prev = $this->tail;
        $this->tail->next = $node;
        $this->tail = $node;
    }

    public function insertAtStart($value)
    {
        $node = new ListNode($value);

        if ($this->head === null) {
            $this->head = $node;
            $this->tail = $node;
            return;
        }

        $this->head->prev = $node;
        $node->next = $this->head;
        $this->head = $node;
    }

    public function readList()
    {
        $current = $this->head;

        while ($current !== null) {
            dump($current->value);
            $current = $current->next;
        }
    }
}
