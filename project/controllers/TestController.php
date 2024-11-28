<?php
 namespace Project\Controllers;
 use \Core\Controller;

 class TestController extends Controller{
    public function act1()
    {
        echo 'вывел что то';
    }
    public function act2()
    {
        echo 'вывел';
    }public function act3()
    {
        echo 'не вывел';
    }
 }