<?php

require_once '../../../vendor/autoload.php';

use DataStructures\LinkedList\Classes\SinglyLinkedList;
use DataStructures\LinkedList\Classes\DoublyLinkedList;
use DataStructures\LinkedList\Classes\CircularLinkedList;

$singlyLinkedList = new SinglyLinkedList();
$singlyLinkedList->insertAtEnd(1);
$singlyLinkedList->insertAtEnd(2);
$singlyLinkedList->insertAtEnd(3);
$singlyLinkedList->insertAtEnd(4);
$singlyLinkedList->insertAtEnd(5);
// $singlyLinkedList->insertAtStart(4);
// $singlyLinkedList->insertAtStart(3);
// $singlyLinkedList->insertAtStart(2);
// $singlyLinkedList->insertAtStart(1);
$found = $singlyLinkedList->contains(7);
dump($found);
// $singlyLinkedList->readList();


// $dll = new DoublyLinkedList();
// $dll->insertAtStart(4);
// $dll->insertAtStart(3);
// $dll->insertAtStart(2);
// $dll->insertAtStart(1);
// $dll->insertAtEnd(1);
// $dll->insertAtEnd(2);
// $dll->insertAtEnd(3);
// $dll->insertAtEnd(4);
// $dll->readList();

// $circularLinkedList = new CircularLinkedList();
// $circularLinkedList->insertAtEnd(1);
// $circularLinkedList->insertAtEnd(2);
// $circularLinkedList->insertAtEnd(3);
// $circularLinkedList->insertAtEnd(4);

// $circularLinkedList->insertAtStart(4);
// $circularLinkedList->insertAtStart(3);
// $circularLinkedList->insertAtStart(2);
// $circularLinkedList->insertAtStart(1);
// $circularLinkedList->readList();