<?php
namespace SpanishUtils;


abstract class Utility {

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Sets up the data to be checked. Take a look to the doc to enter the needed $data for each component.
     * @param mixed $data
     * @return $this
     */
    static public function setUp($data)
    {
        $class = get_called_class();
        $object = new $class($data);
        return $object;
    }

} 