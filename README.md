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

## シーケンス図
未定

---
## 主な機能

```bash
##ログイン機能
・ログインができる。
・ログアウトができる。
・新規作成ができる。
・メールを送信してパスワード変更ができる。
・退会ができる。(論理削除)

##手帳機能
・スケジュールを書くことでできる。
・カレンダーを見ることができ、スケジュールを反映できる。
・部分検索ができる。　

##身体管理機能
・1日の身体の状態を記録できる。
・記録したデータをグラフに反映することができる。
・データに紐付いてBMIが表示される。
```

---
## 使用したツール

```bash
##フロント
・HTML
・SCSS
・tailwindcss
・JavaScript(fullcalendar、chart.js、odometer)

##バック
・PHP 7.4.2
・Composer 2.0
・Laravel Framework 8.51
・Mysql 8.0
・nginx
・docker
```





