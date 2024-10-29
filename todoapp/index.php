<?php include "partials/header.php" ?>

<div class="page-header">
    <h1>VERY MUCH TODO LIST</h1>
</div>

<ul class="list-group col-sm-6">
    <li class="list-group-item">you very much need to do this</li>
    <li class="list-group-item">but also this other thing</li>
</ul>

<form action="add-new.php" class="col-sm-6" method="post">
    <p class="form-group">
        <textarea name="message" id="text" rows="3" class="form-control" placeholder="is the [/watch?v=GO3wwqikkFO ] ?"></textarea>
    </p>

<!--    <p class="form-group"><input type="text" class="form-control" name="balls"></p>-->
<!--    <p class="form-group"><input type="text" class="form-control" name="tits"></p>-->

    <p class="form-group">
        <input type="submit" value="add new thing" class="brn-sm btn-danger">
    </p>
</form>

<?php include "partials/footer.php" ?>
