<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?> </title>
    <?php wp_head() ?>
</head>

<body>

    <header>
        <? $query = new WP_Query( ['post_type' => 'page'] ); ?>
        <?php if ($query-> have_posts() ) : ?>
        <nav>
            <ul>
                
            </ul>
        </nav>
        <? endif ; ?>
    </header>