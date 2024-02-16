<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .news-list {
            gap: 2rem;
        }
    </style>
<title>List</title>
    <?php include "sections/header.php"; ?>
</head>

<body>
<?php include "sections/menu.php"; ?>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h1 class="m-5 text-center"> News</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap news-list">

                    <?php
                    require_once "../classes/class_news.php";
                    require_once "../connectToDb.php";

    $result = open("SELECT * FROM `news`");
    if (count($result) === 0) {
        echo "Nincs hír";
        die();
    }
                    foreach ($result as $elem) :
                    ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $elem["image_url"]; ?>" alt="image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $elem["title"]; ?></h5>
                                <p><small>
                                    <?php include_once "../controllers/usercontroller.php"; include_once "../controllers/newscontroller.php";
                                echo getUserNameById($elem["author"]);
                                echo "<br />";
                                echo getNewsDate($elem["created"]);
                                ?> </small></p>
                                <p class="card-text"><?php echo $elem["news_desc"]; ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="newsSingle.php?id=<?php echo $elem["id"]; ?>"> <button class="btn btn-primary">Tovább</button></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>


    </div>

</body>

</html>