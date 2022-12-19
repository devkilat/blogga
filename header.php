<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $site_description = get_bloginfo('description', 'display');
        $site_name = get_bloginfo('name');
        //for home page
        if ($site_description && (is_home() || is_front_page())):
            echo $site_name;
            echo ' - ';
            echo $site_description;
        endif;
        // for other post pages
        if (!(is_home()) && !is_404()):
            the_title();
            echo ' - ';
            echo $site_name;
        endif;
        ?>
    </title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <?php wp_head(); ?>

</head>

<body>


    <section id="header">
        <header>
            <div class="logo">
                <img src="/wp-content/themes/blogga/img/logo.png" alt="logo">
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="">Home</a>

                    </li>
                    <li>
                        <a href="">Design Tools</a>

                    </li>
                    <li>
                        <a href="">Daily Updates</a>

                    </li>
                    <li>
                        <a href="">Tutorials</a>

                    </li>
                    <li>
                        <a href="">Library</a>
                    </li>
                </ul>
            </nav>
            <a class="btn">Subscribe</a>
        </header>
        <div class="jumbotron container">
            <div class="row">
                <span>👋 HELLO</span>
                <h1>Insights about my personal and work life, and the in-betweens</h1>
            </div>
        </div>
    </section>