<?php

/**
 * lot.php
 * 
 * Lot class file
 * 
 * @version 1.2 2011-02-03
 * @package Smithside Auctions
 * @copyright (c) 2011 Smithside Auctions
 * @license GNU General Public License
 * @since Since release 1.0
 */

/**
 * Lot class
 * @package Smithside Auctions
 */
class Lot {

    /**
     * Lot ID
     * @var int
     */
    protected $lot_id;

    /**
     * Lot Name
     * @var string
     */
    protected $lot_name;

    /**
     * Lot Description
     * @var string
     */
    protected $lot_description;

    /**
     * Lot Image path 
     * @var string
     */
    protected $lot_image;

    /**
     * Lot Image Number 
     * @var int
     */
    protected $lot_number;

    /**
     * Lot Price path 
     * @var float
     */
    protected $lot_price;

    /**
     * Lot Catalogo ID
     * @var int
     */
    protected $cat_id;
    

    /**
     * Initialize the item
     * @param array
     * 
     */ public function __construct($input = false) {
        if (is_array($input)) {
            foreach ($input as $key => $val) {
                //Note the $key instead of key
                // This will give the value in $key instead of 'key' itself
                $this->$key= $val;
            }
        }
    }

    /**
     * Return Lot ID
     * @return int
     */
    public function getLot_id() {
        return $this->lot_id;
    }

    /**
     * Return Category Name
     * @return string
     */
    public function getLot_name() {
        return $this->lot_name;
    }

    /**
     * Return Description
     * @return string
     */
    public function getLot_description() {
        return $this->lot_description;
    }

    /**
     * Return Image path
     * @return string
     */
    public function getLot_image() {
        return $this->lot_image;
    }
    
      /**
     * Return Lot Price path
     * @return string
     */
    public function getLot_price() {
        return $this->lot_price;
    }
    
      /**
     * Return Lot category ID
     * @return string
     */
    public function getCat_id() {
        return $this->cat_id;
    }

}
