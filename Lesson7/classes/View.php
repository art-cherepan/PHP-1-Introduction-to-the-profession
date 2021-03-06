<?php


class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include $template;
    }

    public function render($template)
    {
        ob_start();
        $this->display($template);
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }
}