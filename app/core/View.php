<?php

namespace App\core;

class View {
    public function render($content_view, $templade_view = null, $payload = null) {
        if ($templade_view) {
            include_once LAYOUT . $templade_view;
        }
}
}