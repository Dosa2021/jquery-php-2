<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/TestModel.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/views/layout/header.php';

$userModel = new TestModel();

$tests = $userModel->getAllTests();

// var_dump('test-------');
// var_dump($tests);
?>
    <main>
        <!-- <h1>Ajax通信のテスト</h1>
        <button id="ajax-btn">データを取得</button>
        <div id="result"></div> -->
        <div class="main">
            <img src="/public/img/mei.webp" alt="">
            <h1 class="header-title header-title-first">
                腸腸腸<span class="text-combine">⭐︎</span>
            </h1>
            <h2 class="header-title header-title-second">イイかんじ</h2>
        </div>
    </main>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/views/layout/footer.php' ?>
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