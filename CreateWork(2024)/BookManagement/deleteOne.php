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
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    
    try {
        $database = new PDO('sqlite:/Users/lighttobrca/bookManagement.db');
    } catch (Exception $e) {
        print "Couldn't connect to database: " . $e->getMessage();
        exit();
    }
    
    $sql = "DELETE FROM bookManagement WHERE AccountId = :id";
    
    try {
        $stmt = $database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "レコードが削除されました。";
    } catch (Exception $error) {
        echo "削除に失敗 - {$error}<br />";
    }
} else {
    echo "削除するレコードのIDが指定されていません。";
}
?>
<a href="./delete.php">戻る</a>
</body>
</html>