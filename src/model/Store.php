<?php


namespace App\model;


class Store
{
    protected $id;
    protected $Name;
    protected $Type;
    protected $Price;
    protected $Amount;
    protected $Date;
    protected $Descirbe;


    public function __construct($Name,$Type,$Price,$Amount,$Date,$Descirbe)
    {
        $this->Name =$Name;
        $this->Type =$Type;
        $this->Price =$Price;
        $this->Amount =$Amount;
        $this->Date =$Date;
        $this->Descirbe =$Descirbe;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type): void
    {
        $this->Type = $Type;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     */
    public function setPrice($Price): void
    {
        $this->Price = $Price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param mixed $Amount
     */
    public function setAmount($Amount): void
    {
        $this->Amount = $Amount;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     */
    public function setDate($Date): void
    {
        $this->Date = $Date;
    }

    /**
     * @return mixed
     */
    public function getDescirbe()
    {
        return $this->Descirbe;
    }

    /**
     * @param mixed $Descirbe
     */
    public function setDescirbe($Descirbe): void
    {
        $this->Descirbe = $Descirbe;
    }


}