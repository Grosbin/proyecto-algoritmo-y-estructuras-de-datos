<?php

require_once 'InterfaceList.php';

class Node 
{
    private $dato;
    public $siguiente;

    public function __construct($dato) 
    {
        $this->dato = $dato;
        $this->siguiente = NULL;
    }

    public function get_dato() 
    {
        return $this->dato;
    }
}

/////

class LinkedList implements InterfaceList 
{
    private $primero;
    private $ultimo;
    private $conteo;

    public function __construct() 
    {
        $this->clear();
    }

    public function clear()
    {
        $this->primero = null;
        $this->ultimo = null;
        $this->conteo = 0;
    }

    public function is_empty()
    {
        return ($this->primero == NULL);
    }

    public function addFirst($dato)
    {
        $nodo = new Node($dato);
        $nodo->siguiente = &$this->primero;
        $this->primero = &$nodo;

        if ($this->ultimo == NULL) 
        {
            $this->ultimo = &$nodo;
        }

        $this->conteo++;
    }

    public function addLast($dato)
    {
        $nodo = new Node($dato);
        $this->ultimo->siguiente = &$nodo;
        $this->ultimo = &$nodo;

        if ($this->primero == NULL) 
        {
            $this->primero = &$nodo;
        }

        $this->conteo++;
    }

    public function removeFirst()
    {
        if ($this->is_empty()) 
        {
            throw Exception('Lista vacia');
        }

        // Paso extra: almacenado en $aux el valor que 
        // eliminare.
        $aux = &$this->primero;
        $valor = $aux->get_dato();

        $this->primero = &$this->primero->siguiente;
        unset($aux);
        $this->conteo--;

        return $valor;
    }

    public function removeLast()
    {
        if ($this->is_empty()) 
        {
            throw new Exception('Lista vacia');
        }

        $aux = &$this->ultimo;
        $valor = $aux->get_dato();

        $item = &$this->primero;
        while ($item->siguiente->siguiente != NULL) 
        {            
            $item = &$item->siguiente;
        }

        $item->siguiente = NULL;
        $this->ultimo = &$item;
        unset($aux);
        $this->conteo--;

        return $valor;
    }

    public function search($dato)
    {
        // No implementada aun.
    }

    public function size() 
    {
        return $this->conteo;
    }

    public function to_array()
    {
        $datos = [];
        $item = $this->primero;

        while ($item != NULL) 
        {
            array_push($datos, $item->get_dato());
            $item = $item->siguiente;
        }
        return $datos;
    }

    public function first()
    {
        if ($this->is_empty()) {
            throw new Exception('Lista vacia');
        }

        return $this->primero->get_dato();
    }

    public function last()
    {
        if ($this->is_empty()) {
            throw new Exception('Lista vacia');
        }

        return $this->ultimo->get_dato();
    }
}