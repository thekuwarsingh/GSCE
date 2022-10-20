<?php

class Product
{
    private int $id;
    private string $product_name;
    private bool $deleted;

    public function __construct($id, $product_name, $deleted)
    {
        $this->id = $id;
        $this->product_name = $product_name;
        $this->deleted = $deleted;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProductName()
    {
        return $this->product_name;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
}