<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .news-list {
            gap: 2rem;
        }
    </style>
<title>List</title>
    <?php include "header.php"; ?>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h1 class="m-5 text-center"> Hírek</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap news-list">

                    <?php
                    require_once "class_news.php";
                    foreach ($news_db as $elem) :
                    ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $elem->getImage(); ?>" alt="image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $elem->getTitle(); ?></h5>
                                <p class="card-text"><?php echo $elem->getContent(); ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="news_single.php?id=<?php echo $elem->getId(); ?>"> <button class="btn btn-primary">Tovább</button></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>


    </div>

</body>

</html>