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

<div class="container">
    <h1>이것은 h1</h1>
    <h2>이것은 h2</h2>
    <h3>이것은 h3</h3>
    <h4>이것은 h4</h4>
    <h5>이것은 h5</h5>
    <h6>이것은 h6</h6>
    <textarea id="editor1"></textarea>
    <script>
        CKEDITOR.replace( 'editor1');
    </script>
</div>

<?php
require_once("include/footer.php");
?>