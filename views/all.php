<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php  ?>
    <?php foreach($this->items as $item):?>
    <h1><?php echo $item['title'] ?></h1>
    <p> <?php echo $item['text'] ?></p>
    <?php endforeach;?><br>
    <a href="views/add.php">Добавить новость</a> 
</body>
</html>
