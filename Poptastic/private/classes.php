<?php

class Item {
	public $id;
	public $name;
	public $category;
	public $catnumber;
}

public function __construct($args=[]) {
    $this->id = $args['id'] ?? '';
    $this->name = $args['name'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->catnumber = $args['catnumber'] ?? ''; 
  }
}

?>