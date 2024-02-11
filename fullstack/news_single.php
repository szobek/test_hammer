<!DOCTYPE html>
<html lang="en">

<head>
    <title>Single</title>
<?php include "header.php"; ?>
</head>

<body>
    <?php
    $news = null;
    include_once "class_news.php";

    if (isset($_REQUEST["id"])) {
        $id = $_REQUEST["id"];

        $i = 0;
        while ($i < count($news_db) && $id != $news_db[$i]->getId()) $i++;


        if ($i < count($news_db)) {
            $news = $news_db[$i];
            //echo $news_db[$i]->obj_to_json();
        } else {
            echo "nincs ilyen hír";
            exit;
        }
    } else {
        echo "Nincs id";
        exit;
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $news->getImage(); ?>" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $news->getTitle(); ?></h5>
                        <p class="card-text"><?php echo $news->getContent(); ?></p>
                    </div>
                </div>
                <div class="col-auto"><a href="news_list.php">Vissza</a></div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>