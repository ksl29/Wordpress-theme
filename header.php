<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Custom theme</title>

    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="logo">
            <h1><?php bloginfo('name'); ?></h1>
        </div>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'my-custom-menu',
                'container_class' => 'main-menu'
            ));
            ?>
        </nav>
    </header>