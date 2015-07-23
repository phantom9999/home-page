<?php

use Phalcon\Mvc\Model;

class Content extends Model {

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $href;

    /**
     * @var string
     */
    public $span;

    /**
     * @var string
     */
    public $images;

    /**
     * @var string
     */
    public $style;
}