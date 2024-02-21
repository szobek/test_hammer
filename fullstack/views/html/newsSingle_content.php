<div class="col-8 offset-2 mb-5 mt-5">
                <h1 class="single-news-title"><?php echo $news["title"];?></h1>
                <div class="card" >
                    <img class="card-img-top" src="<?php echo $news["image_url"]; ?>" alt="image">
                    <div class="card-body">
                        <p><small>
                                    <?php include_once "../controllers/usercontroller.php"; include_once "../controllers/newscontroller.php";
                                echo "Write by: <b>".setUser::getUserNameById($news["author"])."</b>";
                                echo "<br />";
                                echo "Date: <b>".setNews::getNewsDate($news["created"])."</b>";
                                ?> </small></p>
                        <p class="card-text"><?php echo $news["content"]; ?></p>
                    </div>
                </div>
                <div class="col-auto"><a href="newsList.php">Vissza</a></div>
            </div>
        </div>