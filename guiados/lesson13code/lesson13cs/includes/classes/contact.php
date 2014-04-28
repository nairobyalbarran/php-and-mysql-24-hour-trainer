<?php

/*
 * contact.php
 * 
 * Contact class file
 * @version 1.2 2011-02-03
 * @package Snithside Auctions
 * @copyright Copyright (c)2011 Smithside Auctions
 * @license  GNU Genera Public License
 * @since
 */

/*
 * Contact class
 * @package Smithside Aucttions
 */

class Contact {

    /**
     * First name
     * @var string
     */
    public $first_name;

    /**
     * Last Name
     * @var string
     */
    public $last_name;

    /**
     * Position in the company
     * @var string
     */
    public $position;
    /**
     * Phone number, formatted in string
     * @var string
     */

    /**
     * Creates a full name by concatenating firts and last names
     * @return string
     */
    public $phone;

    public function name() {
        $name = $this->firts_name . '' . $this->last_name;
        return $name;
    }

}

?>
