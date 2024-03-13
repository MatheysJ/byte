<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Byte</title>
</head>
<body>
    <?php $ROOT_ROUTE = "/byte" ?>

        <header class="header">
            <a class="header__logo" aria-label="Logo da Byte" href="<?php echo $ROOT_ROUTE; ?>"><img src="\byte\assets\images\logoByte.svg" alt=""></a>
            <nav class="header__menu menu">
                <ul role="menubar" aria-label="Restaurante Byte" class="menu__list">
                    <li role="none" class="menu__item">
                        <a href="<?php echo $ROOT_ROUTE . "/"; ?>" role="menuitem" >Home</a>
                    </li>
                    <li role="none" class="menu__item">
                        <a href="<?php echo $ROOT_ROUTE . "/menu"; ?>" role="menuitem">Menu</a>
                    </li>
                    <li role="none" class="menu__item">
                        <a href="<?php echo $ROOT_ROUTE . "/contato"; ?>" role="menuitem">Contato</a>
                    </li>
                    <li role="none" class="menu__item">
                        <a href="<?php echo $ROOT_ROUTE . "/feedbacks"; ?>" role="menuitem">Feedbacks</a>
                    </li>
                    <li role="none" class="menu__item">
                        <a href="<?php echo $ROOT_ROUTE . "/quem-somos"; ?>" role="menuitem">Quem somos</a>
                    </li>
                </ul>
            </nav>
            <a href="<?php echo $ROOT_ROUTE . "/cart"; ?>" class="header__cart"> <img src="\byte\assets\images\CartIcon.svg" alt="Acesse o carrinho"></a>
        </header>        
</body>
</html>