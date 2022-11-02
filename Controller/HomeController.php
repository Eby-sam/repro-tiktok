<?php

namespace repro\Controller;

class HomeController extends AbstractController {

    /**
     * @return mixed|void
     */
    public
    function index()
    {
        $this->render('home/index');
    }
}