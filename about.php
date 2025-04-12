<?php

$title = 'My Blog :: About';

$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eveniet facere harum quod? Ab
                        alias, cum delectus eum excepturi fuga necessitatibus nostrum odio porro rem repellendus
                        repudiandae soluta tenetur veniam.</p>
                    <p>A ab corporis deleniti deserunt dolorum laborum laudantium magni nulla possimus tempora, tempore
                        velit. At ipsa maxime nam, non, nostrum placeat praesentium, quasi quod rem repellendus sed
                        totam ut. Est.</p>
                    <p>Accusantium dolorum eaque excepturi fuga laborum, maiores minima neque quaerat quas quis
                        temporibus voluptatibus. Aliquid blanditiis consectetur magni officiis voluptatibus! Consequatur
                        dicta eaque natus suscipit? Beatae consectetur debitis in saepe.</p>';

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title' => 'And a fifth one',
        'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],

];

require_once 'about.tpl.php';

