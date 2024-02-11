<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
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