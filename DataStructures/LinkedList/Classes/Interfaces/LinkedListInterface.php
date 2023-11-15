<?php

namespace DataStructures\LinkedList\Classes\Interfaces;

interface LinkedListInterface
{
    public function find($value);

    public function contains($value);

    public function insertAtEnd($value);

    public function insertAtStart($value);

    // public function insertAtPosition();

    // public function deleteAtPosition();

    public function readList();

    // public function getSize();

    // public function isEmpty();

    // public function replace();

    // public function searchByPosition();

    // public function deleteByData();

    // public function deleteByPosition();

    // public function reverse();
}
