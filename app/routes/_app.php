<?php

use Leaf\UI;

require dirname(__DIR__) . '/pages/Home/HomePage.php';

app()->get('/', function () {
    /**
     * `render(view, [])` is the same as `echo view(view, [])`
     */
    UI::render(new HomePage());
});
