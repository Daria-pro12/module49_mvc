<?php

namespace App\controllers;

use App\core\Controller;
use App\models\Menu;

class Home extends Controller
{
    private $menuModel;

    public function __construct() {
        parent::__construct();
        $this->menuModel = new Menu();
    }

    public function index()
    {
        $menuItems = $this->menuModel->getItems();
        $title = $this->menuModel->getTitle('home');
        $this->view->render('home.phtml', 'template.phtml', ['menu' => $menuItems, 'title' => $title]);
    }

    public function about()
    {
        $menuItems = $this->menuModel->getItems();
        $title = $this->menuModel->getTitle('about');
        $this->view->render('about.phtml', 'template.phtml', ['menu' => $menuItems, 'title' => $title]);
    }

    public function contact()
    {
        $menuItems = $this->menuModel->getItems();
        $title = $this->menuModel->getTitle('contact');
        $this->view->render('contact.phtml', 'template.phtml', ['menu' => $menuItems, 'title' => $title]);
    }
}