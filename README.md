## 身体機能管理アプリ
---

## 定義書
[db仕様書](https://docs.google.com/spreadsheets/d/1PR9s_cDnP35ugRIphE39m26ItjIcajQ85kHMjIzOfag/edit#gid=0)

[アプリケーション詳細設計](https://docs.google.com/spreadsheets/d/1XzlIWw6Ce78BYS5AP9YMXUlZOi9XMgaMH_mFbRGaCYU/edit#gid=0)

[テストケース](https://docs.google.com/spreadsheets/d/1g8qDJMMW_4WTHeMA8P33cKv4dRdfM-sqYHMC-rAxiZE/edit#gid=8055108)

---

## ER図
![ER図](https://user-images.githubusercontent.com/61786366/143537623-8fe98f88-e82d-4778-a809-ef0e2c63cc4f.png)

---

## クラウド図
![クラウド図](https://user-images.githubusercontent.com/61786366/146944331-06f4ba36-5435-4bea-95fc-a5cd3315888f.png)

---
## 主な機能

```bash
##ログイン機能(laravelのログイン機能不使用)
・ログインができる。
・ログアウトができる。
・新規作成ができる。
・メールを送信してパスワード変更ができる。

##手帳機能
・スケジュールを書くことでできる。
・カレンダーを見ることができ、スケジュールを反映できる。
・部分検索ができる。　

##身体管理機能
・1日の身体の状態を記録できる。
・記録したデータをグラフに反映することができる。
・月ごとのデータを表示できる。
・データに紐付いてBMIが表示される。
```

---
## 使用したツール

```bash
##フロント
・HTML
・SCSS
・tailwindcss
・JavaScript
・(fullcalendar、chart.js、odometer)

##バック(開発環境: docker)
・PHP 7.4.27
・Composer 2.1.14
・Laravel Framework 8.51
・Mysql 8.0
・nginx

##バック(本番環境: HEROKU)
※AWSに変える可能性あり
・PHP 7.4.27
・Composer 2.1.14
・Laravel Framework 8.51
・Mysql 8.0
・apache
```
