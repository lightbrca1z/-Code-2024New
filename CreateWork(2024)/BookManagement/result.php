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
    try{
    $database = new PDO('sqlite:/Users/lighttobrca/bookManagement.db');
    }catch(Exception $e){
    print "Couldn't connect to database: ".$e->getMessage();
    exit();
    }
    
    $sql = "CREATE TABLE 'bookManagement' ('AccountId' INTEGER PRIMARY KEY AUTOINCREMENT, 
    'category' INTEGER,
     'bookTitle' TEXT,
     'price' INTEGER
    )";

    $error = "";

    // try{
    //     !$database->query($sql); 
    // }catch(Exception $error){
    //     echo "作成に失敗 - {$error}<br />";
    // }finally{
    //     echo "テーブル作成に成功！<br/>";
    // }
    ?>
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
        </label><br/>
        <label>
            カテゴリ：
            <?= $category ?>
        </label><br/>
        <label>
            価格：
            <?= $_POST['price']?>
        </label><br/>
    </form>

<?php
$sql = <<<SQL
INSERT INTO bookManagement ('category', 'bookTitle', 'price') 
VALUES ($categoryNumber,'$bookTitle',$price);

SQL;

try{
    !$database->query($sql); 
}catch(Exception $error){
    echo "追加に失敗 - {$error}<br />";
}finally{
    echo "AuthorsへのInsert - OK<br />";
}

?>
<a href="./Navigator.php">戻る</a>
</body>
</html>