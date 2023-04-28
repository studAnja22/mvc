<?php
namespace App\Cards;

use App\Cards\DeckOfCards;
// in the hand we have two arrays. 1) the deck of cards. we should be able to get a shuffled deck and an structured deck.
class Hand
{
    private $drawn;
    public $deck;
    // public $shuffledDeck ?? or we shuffle deck in a function

    public function __construct()
    {
        $deck = new DeckOfCards();

        $this->deck = $deck->getDeck();

        $this->drawn = array();
    }

    public function shuffle() {
        shuffle($this->deck);
        return $this->deck;
    }

    public function drawIndex($index) {
        return $this->deck[$index];
    }

    public function drawAndDiscard() {
        array_push($this->drawn, current($this->deck));
        array_shift($this->deck);
        return end($this->drawn);
    }
    public function drawTopCard() {
        array_push($this->drawn, current($this->deck));
        return end($this->drawn);
    }

    public function removeTopCard() {
        array_shift($this->deck);
        return $this->deck;
    }

    public function howManyLeft() {
        return count($this->deck);
    }

    public function checkDrawn() {
        return count($this->drawn);
    }

    public function getAllDrawn() {
        return $this->drawn;
    }

    public function getDeck() {
        return $this->deck;
    }

}