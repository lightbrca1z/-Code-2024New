<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>削除</h1>
<a href="deleteConfirm.php">全件削除</a>
<?php
$result = "";
try{
    $database = new PDO('sqlite:/home/users/0/moo.jp-lighttobrca0228/bookManagement.db');
    }catch(Exception $e){
    print "Couldn't connect to database: ".$e->getMessage();
    exit();
    }

    $sql = "select * from bookManagement";

try{
    // !$database->query($sql); 
    $sqlExcute = $database->prepare($sql);
    $sqlExcute->execute();
    $result = $sqlExcute->fetchAll();
}catch(Exception $error){
    echo "追加に失敗 - {$error}<br />";
}finally{
    // echo "AuthorsへのInsert - OK<br />";
}
?>
    <table>
        <tr>
        <th>書籍名</th><th>カテゴリ</th><th>価格</th>
        </tr>
        <?php foreach($result as $row){
            echo "<tr>";
            echo "<td>".$row["bookTitle"]."</td>";
            if($row["category"] == 1){
                echo "<td>"."プログラミング"."</td>";
            }else if($row["category"] == 2){
                echo "<td>"."デザイン"."</td>";
            }else if($row["category"] == 3){
                echo "<td>"."自己啓発本"."</td>";
            }
            echo "<td>".$row["price"]."</td>";
            echo "<td>".'<a href="deleteOne.php?id='.$row["AccountId"].'">削除</a>'."</td>";
            echo "</tr>";
        }?>
    </table>
    <a href="./Navigator.php">戻る</a>
</body>
</html>