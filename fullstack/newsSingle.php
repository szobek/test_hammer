<?php
    $news = null;
    include_once "class_news.php";

    if (isset($_REQUEST["id"])) {
        $id = $_REQUEST["id"];

        require_once "connectToDb.php";

        $result = open("SELECT * FROM `news` WHERE `id`=$id");
        if (count($result) === 0) {
            echo "Nincs hír";
            die();
        } else {
            $news = $result[0];
        }
    } else {
        echo "Nincs id";
        exit;
    }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $news["title"]; ?></title>
    <?php include "header.php"; ?>
</head>

<body>
<?php include "menu.php"; ?>   
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mb-5 mt-5">
                <div class="card" >
                    <img class="card-img-top" src="<?php echo $news["image_url"]; ?>" alt="image">
                    <div class="card-body">
                        <h5 class="card-title news-title"><?php echo $news["title"]; ?></h5>
                        <p><small>
                                    <?php include_once "usercontroller.php"; include_once "newscontroller.php";
                                echo "Write by: <b>".getUserNameById($news["author"])."</b>";
                                echo "<br />";
                                echo "Date: ".getNewsDate($news["created"]);
                                ?> </small></p>
                        <p class="card-text"><?php echo $news["content"]; ?></p>
                    </div>
                </div>
                <div class="col-auto"><a href="newsList.php">Vissza</a></div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>