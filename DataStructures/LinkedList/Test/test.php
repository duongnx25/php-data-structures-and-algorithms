<?php

// use DataStructures\LinkedList\Classes\ListNode;
// use Symfony\Component\VarDumper\VarDumper;
use DataStructures\LinkedList\Classes\SinglyLinkedList;

require_once '../../../vendor/autoload.php';
require_once '../Classes/ListNode.php';
require_once '../Classes/SinglyLinkedList.php';

$singlyLinkedList = new SinglyLinkedList();
$singlyLinkedList->insertAtEnd(1);
$singlyLinkedList->insertAtEnd(2);
$singlyLinkedList->insertAtEnd(3);
$singlyLinkedList->insertAtEnd(4);
$singlyLinkedList->readList();
