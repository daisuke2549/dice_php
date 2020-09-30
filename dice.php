<?php

$dice = mt_rand(1,6);
$dice2 = mt_rand(1,6);

$zorome = ($dice == $dice2 ) ? true :false;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>サイコロ</h1>
    <p>サイコロの目は「<?php echo $dice; ?>」「<?php echo $dice2; ?>」でした！
    <?php if ($zorome == true) : ?>
    ゾロ目です
    <?php endif; ?>
    </p>
    <p> <a href = "<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう１度<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html></a></p>
</body>
</html>
