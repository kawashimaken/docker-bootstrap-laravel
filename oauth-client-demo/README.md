APIを利用するクライアントアプリの作り方


# React.js（node.js）の場合


 - ngrokを使って、localのlaravelアプリケーションをトンネリングします。
その後、http://xxxxxxxx.ngrok.io　のようなurlがngrokの管理画面で確認できます。

 - 上記のurlをapp.jsの中の「authorizationURL」、「authorizationURL」に適切に置き換えして、

 - docker-compose-node-mongodbのフォルダに入り、下記のコマンドを実行します。

```docker-compose up```

 - 下記の URLを開く

```http://localhost/auth/example```


# PHPの場合(仮)

# Pythonの場合(仮)
