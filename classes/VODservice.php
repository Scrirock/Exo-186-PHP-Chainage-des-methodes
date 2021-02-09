<?php


class VODservice{

    private String $name;
    private Int $price;

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     * @return $this
     */
    public function setName(string $name): VODservice
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param Int $price
     * @return $this
     */
    public function setPrice(int $price): VODservice
    {
        $this->price = $price;
        return $this;
    }



}