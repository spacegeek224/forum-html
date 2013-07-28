<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pearlc
 * Date: 13. 7. 27
 * Time: 오후 11:50
 * To change this template use File | Settings | File Templates.
 */

require_once("include/header.php");

?>

<form method="post">
    <div class="container">

        <textarea id="editor1" name="content"><?php echo $_POST["content"]; ?></textarea>
        <script>
            CKEDITOR.replace('editor1',{
                filebrowserImageUploadUrl: "/image_upload.php?type=Images"
            });
        </script>
        <input type="submit" />

        <div>
            <?php
            echo $_POST["content"];
            ?>
        </div>

    </div>
</form>

<?php
require_once("include/footer.php");
?>