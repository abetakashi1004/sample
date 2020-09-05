
<?php
    $post = $_POST;
    if(!empty($post)){
        $err_msg =  check_validation($post);
    }
    // var_dump($post, $err_msg);exit;
    // var_dump($err_msg);exit;


?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UFT-8">
        <title>フォームからデータを受け取る</title>
    </head>
    <body>
        <form action = "new.php" method = "post">
            <!-- <label for="">日付</label><input name="day" type="datetime-local"><br> -->
            <label for="">日付　</label><input name="day" type="date"><br>

            <label for="">予定　</label><input name="schedule" type="text">
            <label for=""></label><input type="submit" name="" id="">
        </form>

         <?php if(!empty($err_msg)): ?>
            <?php echo $err_msg ; ?>
         <?php endif; ?>

        <?php if(!empty($post['day'] && !empty($post['schedule']) )) : ?>
            <?php echo $post['day'] . ' に ' . $post['schedule'] . ' の予定があります' ?>            
        <?php endif;?>
    </body>
</html>

<?php
    function check_validation ($post){
        $err;
        // echo var_dump($post);exit;
        if(empty($post['day'])  || empty($post['schedule']) ){
            $err = 'ちゃんと入力して';
        }
        return $err;
    }
?>