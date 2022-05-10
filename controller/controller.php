<?php

    require_once('model/UserModel.php');
    require_once('model/TestimonialsModel.php');

    function home() {
        $userManager = new UserManager();
        $requete = $userManager->getUsers();

        require('view/listUserView.php');
    }

    function testimonials() {
        $testimoniolManager = new TestimoniolManager();
        $requete = $testimoniolManager->getTestimonials();

        require('view/listTestimonialsView.php');
    }