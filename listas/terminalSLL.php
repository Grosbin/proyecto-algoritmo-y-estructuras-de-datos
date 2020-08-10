<?php

/**
 * Este archivo servira para probar el funcionamiento de la lista enlazada
 */

require_once 'LinkedList.php';

function probarListaVacia() 
{
    $lista = new LinkedList();

    echo '*** La lista esta vacia ***', PHP_EOL;

    $r1 = (0 === $lista->size()) ? 'Correcto' : 'Fallo';
    echo 'No hay elementos: ', $r1, PHP_EOL;

    $r2 = ($lista->is_empty()) ? 'Correcto' : 'Fallo';
    echo 'Lista esta vacia: ', $r2, PHP_EOL;
}

function probarPrimerElemento() 
{
    echo '*** Se inserta un solo elemento en la lista ***', PHP_EOL;

    /**
     * [20]->[10]->
     */        
    $lista = new LinkedList();
    $lista->addFirst(10);

    $r1 = (1 === $lista->size()) ? 'Correcto' : 'Fallo';
    echo 'Hay un elemento: ', $r1, PHP_EOL;

    $r2 = (!$lista->is_empty()) ? 'Correcto' : 'Fallo';
    echo 'Lista no esta vacia: ', $r2, PHP_EOL;

    $r3 = (10 == $lista->first()) ? 'Correcto' : 'Fallo';
    echo 'El primer elemento es 10: ', $r3, PHP_EOL;

    $r4 = (10 == $lista->last()) ? 'Correcto' : 'Fallo';
    echo 'El ultimo elemento es 10: ', $r4, PHP_EOL;
}

function probarInserciones() 
{
    echo '*** Probar insertar elementos al inicio y al final ***', PHP_EOL;

    /**
     * [20]->[10]->
     */   
    $lista = new LinkedList();
    $lista->addFirst('hola');
    $lista->addFirst('mundo');

    $r1 = (2 === $lista->size()) ? 'Correcto' : 'Fallo';
    //echo 'Hay 2 elementos: ', $r1, PHP_EOL;

    $r2 = ('hola' == $lista->first()) ? 'Correcto' : 'Fallo';
    //echo '20 es el primer elemento: ', $r2, PHP_EOL;

    $r3 = ('mundo' == $lista->last()) ? 'Correcto' : 'Fallo';
    //echo '10 es el ultimo elemento: ', $r3, PHP_EOL;

    /**
     * [20]->[10]->[30]->
     */
    $lista->addLast('Reina <3');

    $r4 = (3 === $lista->size()) ? 'Correcto' : 'Fallo';
    //echo 'Hay 3 elementos: ', $r4, PHP_EOL;

    $r5 = ('hola' == $lista->first()) ? 'Correcto' : 'Fallo';
    //echo '20 sigue siendo el primer elemento: ', $r5, PHP_EOL;

    $r6 = ('Reina <3' == $lista->last()) ? 'Correcto' : 'Fallo';
    //echo '30 es el ultimo elemento: ', $r6, PHP_EOL;
}

function probarRemociones() {
    echo '*** Probar eliminar elementos al inicio y al final ***', PHP_EOL;

    /**
     * [10]->[20]->[30]->
     */
    $lista = new LinkedList();
    $lista->addFirst(10);
    $lista->addLast(20);
    $lista->addLast(30);

    /**
     * [20]->[30]->
     */
    $lista->removeFirst();

    $r1 = (2 === $lista->size()) ? 'Correcto' : 'Fallo';
    echo 'Quedan 2 elementos: ', $r1, PHP_EOL;

    $r2 = (20 == $lista->first()) ? 'Correcto' : 'Fallo';
    echo '20 es el primer elemento: ', $r2, PHP_EOL;

    $r3 = (30 == $lista->last()) ? 'Correcto' : 'Fallo';
    echo '30 es el ultimo elemento: ', $r3, PHP_EOL;

    /**
     * [20]->
     */
    $lista->removelast();

    $r4 = (1 === $lista->size()) ? 'Correcto' : 'Fallo';
    echo 'Hay 1 elemento: ', $r4, PHP_EOL;

    $r5 = (20 == $lista->first()) ? 'Correcto' : 'Fallo';
    echo '20 sigue siendo el primer elemento: ', $r5, PHP_EOL;

    $r6 = (20 == $lista->last()) ? 'Correcto' : 'Fallo';
    echo '30 es el ultimo elemento: ', $r6, PHP_EOL;

    $lista->removeFirst();

    $r7 = ($lista->is_empty()) ? 'Correcto' : 'Fallo';
    echo 'No quedan elementos: ', $r7, PHP_EOL;
}

//probarListaVacia();
//probarPrimerElemento();
probarInserciones();
//probarRemociones();