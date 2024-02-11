<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .d-flex {
            gap: 2rem;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
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
                <div class="d-flex flex-wrap">

                    <?php
                    include_once "class_news.php";
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