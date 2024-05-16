<?php
    $name_page = "index";
    include 'components/header.php';
    $lot = $link->query("SELECT * FROM `lot` WHERE `ok` = 1");
    $store = $link->query("SELECT `views`.*, `lot`.*
    FROM `lot` 
    LEFT JOIN `views` ON `views`.`id_lot` = `lot`.`id`
    WHERE `views`.`id_user` = '{$_COOKIE['open_user']}' ");
?>
<nav>

    <?php
        $idLot = '';
        $nameCat = '';
        $category = $link->query("SELECT * FROM `category`");
        foreach($category as $i)
        {
            $lotCat = $link->query("SELECT `lot`.*, `category_lot`.`category`
            FROM `lot` 
            LEFT JOIN `category_lot` ON `category_lot`.`id_lot` = `lot`.`id`
            WHERE `category_lot`.`category` = '{$i['name']}' ");
            if(mysqli_num_rows($lotCat) >= 10)
            {
                $nameCat = $i['name'];
                foreach($lotCat as $j)
                {
                    $idLot .= $j['id'].",";
                }
            }
        }       
        $idLot = substr($idLot, 0, -1);
        $getLot = $link->query("SELECT * FROM `lot` WHERE `id` IN (".$idLot.") ");
    ?>
    <p class="name_block">Пополурная категория: <?=$nameCat?></p>
    <div class="cointainer_lots">
    <?php foreach($getLot as $i):?>
        <a href="components/page/lot.php?id=<?=$i['id']?>">
            <div class="lot">
                <?php
                    $image = $link->query("SELECT * FROM `img` WHERE `id_lot` = '{$i['id']}' "); 
                    $name_img = [];
                    foreach($image as $img)
                    {
                        array_push($name_img, $img['name_img']);
                    }
                ?>
                <img class="imgLot" src="<?="components/image/user_img/".reset($name_img)?>" alt="">
                <div class="namelot"><?=$i['name']?></div>
            </div>
        </a>
    <?php endforeach;?>
    </div>


    <?php if(mysqli_num_rows($store) != 0):?>
    <p class="name_block">Просмотренные лоты</p>
    <div class="cointainer_lots my_story">
    <?php foreach($store as $i):?>
        <a href="components/page/lot.php?id=<?=$i['id']?>">
            <div class="lot">
                    <?php
                        $image = $link->query("SELECT * FROM `img` WHERE `id_lot` = '{$i['id']}' "); 
                        $name_img = [];
                        foreach($image as $img)
                        {
                            array_push($name_img, $img['name_img']);
                        }
                    ?>
                <img class="imgLot" src="<?="components/image/user_img/".reset($name_img)?>" alt="">
                <div class="namelot"><?=$i['name']?></div>
            </div>
        </a>
    <?php endforeach;?>
    </div>
    <?php endif;?>

    <p class="name_block">Возможно вам будет интересно</p>
    <div class="cointainer_lots" id="wrapper_lot"></div>
    <div class="cointainer_but"><button id="add_list">Добавить еще</button></div>
</nav>
<?php 
    include 'components/footer.php';
?>