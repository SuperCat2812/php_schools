<?php
require_once '_inc/config.php';
$item = $database->get("items", "text", [
    "id" => $_GET["id"]
]);

if (!$item) {
    header("HTTP/1.0 404 Not Found");
    include_once "404.php";
    die();
}

include_once "_partials/header.php" ?>


    <div class="page-header">
        <h1>VERY MUCH TODO LIST</h1>
    </div>
<?php
$data = $database->select('items','text');
?>


    <form id="edit-form" action="_inc/edit-item.php" class="col-sm-6" method="post">
        <p class="form-group">
            <textarea name="message" id="text" rows="3" class="form-control"><?php echo $item?></textarea>
        </p>

        <!--    <p class="form-group"><input type="text" class="form-control" name="balls"></p>-->
        <!--    <p class="form-group"><input type="text" class="form-control" name="tits"></p>-->

        <p class="form-group">
            <input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
            <input type="submit" value="edit item" class="brn-sm btn-danger">
            <span class="controls">
                <a href="<?php echo $site_url ?>" class="back-link text-muted">Back</a>
            </span>
        </p>
    </form>

<?php include_once "_partials/footer.php" ?>