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
        $.ajax({
          dataType: 'json',//データタイプはjsonを指定
          type: 'GET', //値を得たいからGET
          url: '/api/index.php', //ajaxBasicのなかのapi.phpにアクセス
          success: function(orders){ //通信成功時の処理
            console.log('ok-------------'); //consoleにArrayで{jsonデータ}が出ていたらOK
            console.log(orders); //consoleにArrayで{jsonデータ}が出ていたらOK
            // $.each(orders,function(i,order){
            //   $orders.append('<li>name: '+ order.name + ', drink: ' + order.drink + '</li>'); //eachで回してorderそれぞれの要素をorder.name / order.drinkとして出力
            // })
          },
          error: function(){ //通信失敗時の処理
            alert('error loading order');
          }
        });
    </script>
</body>
</html>
