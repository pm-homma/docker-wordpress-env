# DockerのWordPress環境
## 目的
- WordPress環境を公式イメージを使わずに、1から構築できるようになるため。
- HTTPS対応した環境構築を経験したかった。

## 構成
- Nginx：1.13.5
- PHP-FPM：7.4
- MySQL：5.7
- WordPress：5.5.1

## 設計
- WordPressはpluginディレクトリのみではなく、丸ごと全てユーザー側で編集できるようにしたかったので、appディレクトリからWordPressを全てマウントする形にしている。
- HTTPS化に対応しており、http://localhost:10080 でアクセスすると、https://localhost にリダイレクトするように設定。
- PHP-FPM + Nginxの構成を作成したことがなかったため、NginxをWebサーバーに使用。
- Docker起動時に自動的にコンテナを立ち上げるよう、docker-compose.ymlにrestartオプションを指定。
