<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
     $categoryNumber = $_POST['category'];
     $category = $_POST['category'];
    if($category == 1){
        $category = "プログラミング";
    }else if($category == 2){
        $category = "デザイン";
    }else if($category == 3){
        $category = "自己啓発本";
    }
     $bookTitle = $_POST['bookTitle'];
     $price = $_POST['price'];
    ?>
    <form action="result.php" method="POST">
        <label>
            書籍名：
            <?= $_POST['bookTitle']?>
            <input type="hidden" name="bookTitle" value="<?= $_POST['bookTitle']?>">
        </label><br/>
        <label>
            カテゴリ：
            <?= $category ?>
            <input type="hidden" name="category" value="<?= $_POST['category']?>">
        </label><br/>
        <label>
            価格：
            <?= $_POST['price']?>
            <input type="hidden" name="price" value="<?= $_POST['price']?>">
        </label><br/>
        <input type="submit" value="送信">
    </form>
</body>
</html>