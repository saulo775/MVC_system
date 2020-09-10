<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::titulo;?></title>

    <link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <div class="center">
        <div class="logo">Danki Code</div>
        <nav class="menu">
            <?php
                foreach ($this->menuItems as $key => $value) {
                    echo '<a href="'.INCLUDE_PATH.$value.'">'.$value.'</a>';

                }
            ?>
        </nav>
    </div>
</header>
