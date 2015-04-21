<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfect_number
 *
 * @author raajmehta
 */
class perfect_number {

    protected $_number;

    public function __construct($number) {
        $this->_number = $number;
        self::calculation();
    }

    public function calculation() {

        if ($this->_number == '' || $this->_number == NULL) {
            echo 'Please enter number';
        } else {
            if ($this->_number > 0) {
                $sum = 0;
                for ($i = 1; $i < $this->_number; $i++) {
                    if ($this->_number % $i == 0) {
                        $sum += $i;
                    }
                }
                if ($sum == $this->_number) {
                    echo $this->_number . ' is a perfect number.';
                } else {
                    echo $this->_number . ' is not a perfect number.';
                }
            } else {
                echo 'Number must be in positive form';
            }
        }
    }

}

$number = filter_input(INPUT_POST, "value");

new perfect_number($number);
