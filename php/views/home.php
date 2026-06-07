<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/TestModel.php';

$userModel = new TestModel();

$tests = $userModel->getAllTests();

var_dump('test-------');
var_dump($tests);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP + jQuery + Docker</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Ajax通信のテスト</h1>
    <button id="ajax-btn">データを取得</button>
    <div id="result"></div>
    <script>
        $('#ajax-btn').on('click', function () {
            $.ajax({
                dataType: 'json',
                type: 'GET',
                url: '/api/users.php',
                success: function (users) {
                    console.log('ok-------------');
                    console.log(users);
                    $('#result').empty();
                    $.each(users, function (i, user) {
                        $('#result').append('<p>id: ' + user.id + ', name: ' + user.name + '</p>');
                    });
                },
                error: function () {
                    alert('error loading users');
                }
            });
        });
    </script>
</body>
</html>
