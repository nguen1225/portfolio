## 身体機能管理アプリ
---

## 定義書
[db仕様書](https://docs.google.com/spreadsheets/d/1PR9s_cDnP35ugRIphE39m26ItjIcajQ85kHMjIzOfag/edit#gid=0)

[アプリケーション詳細設計](https://docs.google.com/spreadsheets/d/1XzlIWw6Ce78BYS5AP9YMXUlZOi9XMgaMH_mFbRGaCYU/edit#gid=0)

[テストケース](https://docs.google.com/spreadsheets/d/1g8qDJMMW_4WTHeMA8P33cKv4dRdfM-sqYHMC-rAxiZE/edit#gid=8055108)

---

## ER図
![ER図](https://user-images.githubusercontent.com/61786366/147398474-6ffeb172-9093-467e-b9da-c6cb51016f64.png)

---

## HEROKU構成図
![HEROKU構成図](https://user-images.githubusercontent.com/61786366/147398470-a70e020a-8a31-4f17-aaee-c7f1fd2cf97b.png)

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

##レスポンシブ対応
・PC
・スマホ

##対応ブラウザ
・Google Chrome
・Safari
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
・PHP 7.4.27
・Composer 2.1.14
・Laravel Framework 8.51
・Mysql 8.0
・apache
```
