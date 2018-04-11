<?php
$messages = array(
    '你说啥？' ,
    '你也好' ,
    '你找我有啥事？' ,
    '我在吃饭！'
);
$key = array_rand($messages);
echo $messages[ $key ];
sleep(0.5)
?>