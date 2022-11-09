<?php
require_once __DIR__.'/Controller.php';
require_once __DIR__.'/../model/ProfileModel.php';

class NotFoundController extends Controller
{

    public function __construct()
    {
    }

    public function handle(): string
    {
        return $this->render(view: 'error/404', status: 404);
    }
}