<?php

namespace Reporting\Formats;

class JSONFormat extends Format
{

  public function __construct(array $arrayConstruct){
    $this->date = $arrayConstruct['date'];
    $this->title = $arrayConstruct['title'];
  }

  public function getContents(): array
  {
      return [
          'date'  => $this->date,
          'title' => $this->title
      ];
  }

  function formatData() : string
  {
    return json_encode($this->getContents());
  }
}

?>
