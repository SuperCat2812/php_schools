<?php include "_partials/header.php" ?>


    <div class="page-header">
        <h1>VERY MUCH TODO LIST</h1>
    </div>
<?php
$data = $database->select('items',['id','text']);
echo '<pre>';
print_r($data);
echo '</pre>';
?>
    <ul class="list-group col-sm-6">
        <?php
        foreach ($data as $item) {
            echo '<li class="list-group-item">';
            echo $item['text'];
            echo '<div class="controls pull-right">';
            echo ' <a href="edit.php?id='.$item['id'].'" class="edit-link">edit</a>';
            echo ' <a href="delete.php?id='.$item['id'].'" class="delete-link glyphicon text-muted glyphicon-remove"></a>';

            echo '</div>';
            echo '</li>';
        }
        ?>
<!--        <li class="list-group-item">you very much need to do this</li>-->
<!--        <li class="list-group-item">but also this other thing</li>-->
    </ul>

    <form id="add-form" action="_inc/add-new.php" class="col-sm-6" method="post">
        <p class="form-group">
            <textarea name="message" id="text" rows="3" class="form-control"
                      placeholder="is the [/watch?v=GO3wwqikkFO ] ?"></textarea>
        </p>

        <!--    <p class="form-group"><input type="text" class="form-control" name="balls"></p>-->
        <!--    <p class="form-group"><input type="text" class="form-control" name="tits"></p>-->

        <p class="form-group">
            <input type="submit" value="add new thing" class="brn-sm btn-danger">
        </p>
    </form>

<?php include_once "_partials/footer.php" ?>