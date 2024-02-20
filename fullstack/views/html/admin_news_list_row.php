<tr>
    <td><?php echo $elem["id"] ?></td>
    <td> <a href="newsSingle.php?id=<?php echo $elem["id"] ?>"> <?php echo $elem["title"] ?></a></td>
    <td><?php echo $elem["news_desc"] ?></td>
    <td>
        <a href="../controllers/newscontroller.php?function=update&id=<?php echo $elem["id"] ?>">
            <button class="btn btn-success">
                U
            </button>
        </a>

        <a onclick="deleteFunction(<?php echo $elem['id'] ?>)">
            <button class="btn btn-danger">
                X
            </button>
        </a>
    </td>
</tr>