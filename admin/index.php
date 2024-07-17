<?php

    
    $pageController = new PageController();    
        class PageController {
            private $actions = [
                'buttons' => "./view/buttons.php",
                'cards' => "./view/cards.php",
                'color' => "./view/utilities-color.php",
                'border' => "./view/utilities-border.php",
                'utilities-animation' => "./view/utilities-animation.php",
                'other' => "./view/utilities-other.php",
                'login' => "./view/login.php",
                'register' => "./view/register.php",
                'forgot-password' => "./view/forgot-password.php",
                '404' => "./view/404.php",
                'blank' => "./view/blank.php",
                'charts' => "./view/charts.php",
                'tables' => "./view/tables.php",
            ];


            public function __construct() {
                $this->loadHeader();
                $this->loadBoxLeft();
                $this->route();
                $this->loadFooter();
            }


            private function loadHeader() {
                include "layout/header.php";
            }

            private function loadBoxLeft() {
                include "layout/box_left.php";
            }

            private function loadFooter() {
                include "layout/footer.php";
            }

            private function route() {
                if (isset($_GET['act'])) {
                    $action = $_GET['act'];
                    $this->loadView($action);
                } else {
                    $this->loadHome();
                }
            }

            private function loadView($action) {
                if (array_key_exists($action, $this->actions)) {
                    include $this->actions[$action];
                } else {
                    $this->loadHome();
                }
            }
~
            private function loadHome() {
                include "./layout/home.php";
            }
        }
        ?>

