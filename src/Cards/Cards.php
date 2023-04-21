<?php
namespace App\Cards;


class Cards
{
    //protected $value;
    protected $cardValue;
    protected $suit;
    protected $color;
    protected $name;
    protected $unicode;

    public function __construct()
    {
        //$this->value = null;
        $this->cardValue = null;
        $this->suit = null;
        $this->color = null;
        $this->name = null;
        $this->unicode = null;
    }

    public function setCard($cardValue, $suit)
    {
        $this->cardValue = $cardValue;
        $this->suit = $suit;
        $this->setColor();
        $this->setName();
    }

    public function setColor() {
        if ($this->suit == 'Hearts' or $this->suit == 'Diamonds') {
            $this->color = "card red";
        } else {
            $this->color = "card black";
        };
    }

    public function setName() {
        if ($this->cardValue == 1 or $this->cardValue > 10) {
            if ($this->cardValue == 1) {
                $this->name = "Ace of " . $this->suit;
            } elseif ($this->cardValue == 11) {
                $this->name = "Jack of " . $this->suit;
            } elseif ($this->cardValue == 12) {
                $this->name = "Queen of " . $this->suit;
            } elseif ($this->cardValue == 13) {
                $this->name = "King of " . $this->suit;
            } 
        } else {
                $this->name = $this->cardValue . " of " . $this->suit;
            }
    }

    public function getUnicode() {
            $unicodeArray = [
            "Ace of Clubs" => 127185,
            "2 of Clubs" => 127186,
            "3 of Clubs" => 127187,
            "4 of Clubs" => 127188,
            "5 of Clubs" => 127189,
            "6 of Clubs" => 127190,
            "7 of Clubs" => 127191,
            "8 of Clubs" => 127192,
            "9 of Clubs" => 127193,
            "10 of Clubs" => 127194,
            "Jack of Clubs" => 127195,
            "Queen of Clubs" => 127197,
            "King of Clubs" => 127198,
            "Ace of Diamonds" => 127169,
            "2 of Diamonds" => 127170,
            "3 of Diamonds" => 127171,
            "4 of Diamonds" => 127172,
            "5 of Diamonds" => 127173,
            "6 of Diamonds" => 127174,
            "7 of Diamonds" => 127175,
            "8 of Diamonds" => 127176,
            "9 of Diamonds" => 127177,
            "10 of Diamonds" => 127178,
            "Jack of Diamonds" => 127179,
            "Queen of Diamonds" => 127181,
            "King of Diamonds" => 127182,
            "Ace of Hearts" => 127153,
            "2 of Hearts" => 127154,
            "3 of Hearts" => 127155,
            "4 of Hearts" => 127156,
            "5 of Hearts" => 127157,
            "6 of Hearts" => 127158,
            "7 of Hearts" => 127159,
            "8 of Hearts" => 127160,
            "9 of Hearts" => 127161,
            "10 of Hearts" => 127162,
            "Jack of Hearts" => 127163,
            "Queen of Hearts" => 127165,
            "King of Hearts" => 127166,
            "Ace of Spades" => 127137,
            "2 of Spades" => 127138,
            "3 of Spades" => 127139,
            "4 of Spades" => 127140,
            "5 of Spades" => 127141,
            "6 of Spades" => 127142,
            "7 of Spades" => 127143,
            "8 of Spades" => 127144,
            "9 of Spades" => 127145,
            "10 of Spades" => 127146,
            "Jack of Spades" => 127147,
            "Queen of Spades" => 127149,
            "King of Spades" => 127150,
        ];
        return $this->unicode = $unicodeArray[$this->name];
    }

    public function getColor() {
        return $this->color;
    }

    public function getName() {
        return $this->name;
    }

    public function getCardValue(): int
    {
        return $this->cardValue;
    }

    public function getAsString(): string
    {
        return "[{$this->cardValue}]";
    }
}