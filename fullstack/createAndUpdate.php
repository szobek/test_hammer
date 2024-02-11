<?php

if (isset($result) && $result != null) {
    $news = $result[0];
    $title="Update | ".$news["title"];
} else {
    $news = [];
    $news["id"] = "";
    $news["tile"] = "";
    $news["desc"] = "";
    $news["content"] = "";
    $title="Create news";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">

                <form action="setNews.php?function=saveAfterEdit&id=<?php echo $news["id"] ?>" method="post">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="<?php echo $news["title"] ?>" id="title" class="form-control">

                    <label for="content">Content</label>
                    <input type="text" name="content" value="<?php echo $news["content"] ?>" id="content" class="form-control">

                    <label for="desc">Description</label>
                    <input type="text" name="desc" value="<?php echo $news["news_desc"] ?>" id="desc" class="form-control">

                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>