<?php
/**
 * User: rchung
 * Date: 13. 7. 28.
 * Time: 오후 7:12
 * To change this template use File | Settings | File Templates.
 */

/**
 * 주의 : 파일 이름이 한글이거나 공백이 포함 된 경우 체크하는 부분이 없으므로 실제 사용을 위해서는 추가하거나, 이름을 재지정 해서 사용해야함
 * 사용자 인증 부분도 필요함
 */

$up_url = '/upload'; // 업로드후 반환할 이미지 경로 URL
$up_dir = 'upload'; // 업로드 경로

// 업로드 DIALOG 에서 전송된 값
$funcNum = $_GET['CKEditorFuncNum'] ;
$CKEditor = $_GET['CKEditor'] ;
$langCode = $_GET['langCode'] ;

$message = "";

if(isset($_FILES['upload']['tmp_name']))
{
    $file_name = $_FILES['upload']['name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) ) {
        $message = "파일이 업로드 되지 않았습니다.";
    } else if ($_FILES['upload']["size"] == 0) {
        $message = "파일이 올바르지 않습니다.";
    } else if ('jpg' != $ext && 'jpeg' != $ext && 'gif' != $ext && 'png' != $ext) {
        $message = "jpg, gif, png 형식만 가능합니다";
    } else if (!is_uploaded_file($_FILES['upload']["tmp_name"])) {
        $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
    } else {
        $save_dir = sprintf('%s/%s', $up_dir, $file_name);
        $save_url = sprintf('%s/%s', $up_url, $file_name);

        if (move_uploaded_file($_FILES["upload"]["tmp_name"],$save_dir)) {
            $message = "업로드 성공";
        }
    }
    echo "<meta http-equiv='Content-type' content='text/html; charset=utf8'><script>window.parent.CKEDITOR.tools.callFunction($funcNum, '$save_url', '$message');</script>";
}
?>



