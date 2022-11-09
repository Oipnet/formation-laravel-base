<?php

class ProfileModel
{

    public function __construct()
    {
    }

    public function getMyProfile(): array
    {
        return [
            'username' => 'John Doe',
        ];
    }
}