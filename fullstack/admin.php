<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>
    
    <?php include "header.php"; ?>
    <?php
    require_once "connect-to-db.php";

    $result = open("SELECT * FROM `news`");
    if (count($result) === 0) {
        echo "Nincs hír";
        die();
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 class="text-center ">admin page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Desc</th>
                            <th scope="col">setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $elem) :
                        ?>
                            <tr>
                                <td><?php echo $elem["id"] ?></td>
                                <td><?php echo $elem["title"] ?></td>
                                <td><?php echo $elem["news_desc"] ?></td>
                                <td>
                                    <button class="btn btn-success">
                                        U
                                    </button>

                                    <button class="btn btn-danger">
                                        X
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>