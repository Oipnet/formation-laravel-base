<?php

abstract class Controller
{
    abstract public function handle(): string;

    protected function render(string $view, array $data = [], $status = 200): string {
        ob_start();
        extract($data);
        http_response_code($status);
        require_once __DIR__.'/../view/'.$view.'.php';

        return ob_get_clean();
    }

}