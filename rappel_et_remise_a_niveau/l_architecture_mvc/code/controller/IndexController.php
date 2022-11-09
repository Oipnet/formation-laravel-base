<?php
require_once __DIR__.'/Controller.php';
require_once __DIR__.'/../model/ProfileModel.php';

class IndexController extends Controller
{

    public function __construct()
    {
    }

    public function handle(): string
    {
        return $this->render(
            view: 'index',
            data: [
                'profile' => (new ProfileModel())->getMyProfile()
            ]
        );
    }
}