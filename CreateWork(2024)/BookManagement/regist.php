<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="confirm.php" method="POST">
        <label>
            カテゴリ：
            <select name="category">
            <option value="1">プログラミング言語</option>
            <option value="2">デザイン</option>
            <option value="3">自己啓発</option>
            </select>
        </label><br/>
        <label>
            書籍名：
            <input type="text" name="bookTitle">
        </label><br/>
        <label>
            価格：
            <input type="text" name="price">
        </label><br/>
        <input type="submit" value="送信">
    </form>
</body>
</html>