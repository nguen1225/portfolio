## 身体機能管理アプリ
---

## 定義書
[db仕様書](https://docs.google.com/spreadsheets/d/1PR9s_cDnP35ugRIphE39m26ItjIcajQ85kHMjIzOfag/edit?usp=sharing)

[アプリケーション詳細設計](https://docs.google.com/spreadsheets/d/1XzlIWw6Ce78BYS5AP9YMXUlZOi9XMgaMH_mFbRGaCYU/edit?usp=sharing)

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





