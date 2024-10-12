<?php

namespace App\models;

class Menu {
    private $items = [
        'home' => ['title' => 'Главная', 'link' => '/home'],
        'about' => ['title' => 'О нас', 'link' => '/home/about'],
        'contact' => ['title' => 'Контакты', 'link' => '/home/contact'],
    ];

    public function getItems() {
        return array_values($this->items);
    }

    public function getTitle($action) {
        return isset($this->items[$action]) ? $this->items[$action]['title'] : 'Ошибка';
    }
}