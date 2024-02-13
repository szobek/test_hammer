<?php
session_start();
if(!isset($_SESSION["logged"])) header('Location: login.php');



if (isset($result) && $result != null) {
    $news = $result[0];
    $title="Update | ".$news["title"];
    $action="setNews.php?function=saveAfterEdit&id=". $news["id"] ;
} else {
    $news = [];
    $news["id"] = "";
    $news["title"] = "";
    $news["news_desc"] = "";
    $news["content"] = "";
    $title="Create news";
    $action="setNews.php?function=createNews";
}
//var_dump($news);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <title><?php echo $title; ?></title>
    <script src="js/tinymce/tinymce.min.js"></script>
   <script src="js/createAndUpdate.js"></script>
</head>

<body>
<?php include "menu.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">

                <form action="<?php echo $action; ?>" method="post">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="<?php echo $news["title"]; ?>" id="title" class="form-control">

                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control"><?php echo $news["content"]; ?></textarea>

                    <label for="desc">Description</label>
                    <input type="text" name="desc" value="<?php echo $news["news_desc"]; ?>" id="desc" class="form-control">

                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>