<?php
session_start();
if (!isset($_SESSION["logged"])) header('Location: login.php');



if (isset($result) && $result != null) {
    $news = $result[0];
    $title = "Update | " . $news["title"];
    $action = "setNews.php?function=saveAfterEdit&id=" . $news["id"];
} else {
    $news = [];
    $news["id"] = "";
    $news["title"] = "";
    $news["news_desc"] = "";
    $news["content"] = "";
    $news['image_url'] = "";
    $title = "Create news";
    $action = "setNews.php?function=createNews";
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
            <div class="col-8 offset-2 pt-4">
                <p class="text-center">
                    <picture>
                        <source id="newimgurl" srcset="<?php echo $news['image_url'] ?>" />
                        <img alt="news image" style="width:auto; max-width: 100%;" />
                    </picture>
                </p>
                <form name="photo" id="imageUploadForm" enctype="multipart/form-data" action="<?php echo 'setNews.php?function=upload_img' ?>" method="post">
                    <input type="file" name="image" />
                    <input type="submit" name="upload" value="Upload" />
                </form>
<small>max 10mb és csak jpeg vagy png</small>


                <form action="<?php echo $action; ?>" method="post">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="<?php echo $news["title"]; ?>" id="title" class="form-control">

                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control"><?php echo $news["content"]; ?></textarea>

                    <label for="desc">Description</label>
                    <input type="text" name="desc" value="<?php echo $news["news_desc"]; ?>" id="desc" class="form-control">
                    <input type="hidden" name="img_url" id="imgurl" value="<?php echo $news['image_url'] ?>">
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>