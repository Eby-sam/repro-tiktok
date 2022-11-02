<?php


namespace repro\Controller;


class UserController extends AbstractController
{

    /**
     * @return void
     */
    public function index()
    {
        $this->render('home/index');
    }


}