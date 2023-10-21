<?php

use Leaf\UI;
use Leaf\UI\Component;

class HomePage extends Component
{
  public $key = 'HomePage';

  public function render()
  {
    return UI::view(dirname(__DIR__) . '/Home/welcome.html');
  }
}
