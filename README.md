## 身体機能管理アプリ
---

## 定義書
[db仕様書](https://docs.google.com/spreadsheets/d/1p4i_Ajhom7o7MJFoEdKQFIV8wAGmPRBjRyauppTjaNA/edit#gid=2044204095)

[アプリケーション詳細設計]()

---

## ER図
調整中

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
・カレンダーを見ることができ、にスケジュールを反映できる。
・検索ができる。　

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
・JavaScript(fullcalendar、chart.js)

##バック
・PHP 7.4.2
・Composer 2.0
・Laravel Framework 8.51
・Mysql 8.0
・nginx
・docker
```





