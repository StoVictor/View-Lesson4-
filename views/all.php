<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php  ?>
    <?php foreach($this as $key=>$item):?>
    <?php if($key == 'items'):  ?>
    <?php foreach($item as $article):  ?>
    <h1><?php echo $article['title'] ?></h1>
    <p> <?php echo $article['text'] ?></p>
    <?php endforeach;?>
    <?php endif;?>
    <?php endforeach;?><br>
    <a href="views/add.php">Добавить новость</a> 
</body>
</html>
