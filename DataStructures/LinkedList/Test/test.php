<?php

require_once '../../../vendor/autoload.php';

use DataStructures\LinkedList\Classes\SinglyLinkedList;
use DataStructures\LinkedList\Classes\DoublyLinkedList;


// $singlyLinkedList = new SinglyLinkedList();
// $singlyLinkedList->insertAtEnd(1);
// $singlyLinkedList->insertAtEnd(2);
// $singlyLinkedList->insertAtEnd(3);
// $singlyLinkedList->insertAtEnd(4);
// $singlyLinkedList->readList();


$dll = new DoublyLinkedList();
$dll->insertAtStart(4);
$dll->insertAtStart(3);
$dll->insertAtStart(2);
$dll->insertAtStart(1);
$dll->readList();