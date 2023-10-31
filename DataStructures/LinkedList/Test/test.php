<?php

use DataStructures\LinkedList\Classes\SinglyLinkedList;

require_once '../../../vendor/autoload.php';

$singlyLinkedList = new SinglyLinkedList();
$singlyLinkedList->insertAtEnd(1);
$singlyLinkedList->insertAtEnd(2);
$singlyLinkedList->insertAtEnd(3);
$singlyLinkedList->insertAtEnd(4);
$singlyLinkedList->readList();
