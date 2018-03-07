<?php
namespace Bbc\MVC\Lib\FormBuilder;


class Form
{
    public function __construct($action = '#', $method = 'POST')
    {
        echo "<form class=\"form-horizontal\" action=\"$action\" method=\"$method\">";
        echo '  <div class="component" data-html="true">';
    }

    public function end()
    {
        echo '  </div>';
        echo '</form>';
    }

    public function __call($name, $args)
    {
        $builderName = ucfirst($name).'Builder';
        $builderClass = 'Bbc\MVC\Lib\Formbuilder\\'.$builderName;
        return new $builderClass();
    }
}
