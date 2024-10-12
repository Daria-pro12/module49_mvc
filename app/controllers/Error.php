<?php

namespace App\controllers;
use App\core\controller;

use App\models\Menu;

class Error extends Controller
{
    private $menuModel;

    public function __construct() {
        parent::__construct();
        $this->menuModel = new Menu();
    }

    public function index()
    {
        $menuItems = $this->menuModel->getItems();
        $title = $this->menuModel->getTitle('error');
        $this->view->render('error.phtml', 'template.phtml', ['menu' => $menuItems, 'title' => $title]);
    }
}