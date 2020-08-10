<?php

interface InterfaceList {
    // Agrega un nodo al inicio de la lista
    public function addFirst($dato);

    // Agrega un nodo al final de la lista
    public function addLast($dato);

    // Elimina el primer nodo de la lista
    public function removeFirst();

    // Elimina el ultimo nodo de la lista
    public function removeLast();

    // Busca un dato del nodo y devuelve el nodo
    public function search($dato);

    // Limpia toda la lista enlazada
    public function clear();

    // Devuelve el primer elemento de la lista
    public function first();

    // Devuelve el ultimo elemento de la lista
    public function last();
}