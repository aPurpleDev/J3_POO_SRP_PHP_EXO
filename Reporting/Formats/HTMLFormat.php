<?php

namespace Reporting\Formats;

class HTMLFormat extends Format
{

  public function __construct($arrayConstruct){
    $this->date = $arrayConstruct['date'];
    $this->title = $arrayConstruct['title'];
  }

  function formatData() : string
  {
    return "<h2>$this->title</h2><em>$this->date</em>";
  }
}

?>
