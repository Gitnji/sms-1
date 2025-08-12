<?php
class teachers{
    private $teacher_id;
    private $name;
    private $address;
    private $mobile;

    // teacher constructor
    public function __construct($teacher_id, $name, $address, $mobile, ) {
        $this->teacher_id = $teacher_id;
        $this->name = $name;
        $this->address = $address;
        $this->mobile = $mobile;
    }
}