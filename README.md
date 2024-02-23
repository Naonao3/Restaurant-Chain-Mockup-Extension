# 概要 
架空のレストランチェーンの情報を表示する動的なウェブサイトです。
利用者が、
・従業員の数
・従業員の給与
・支店の数
・郵便番号
を自由に入力することができ、架空のデータと合わせて動的に生成します。

## Preview

<img width="1047" alt="スクリーンショット 2024-02-19 123239" src="https://github.com/Naonao3/Restaurant-Chain-Mockup-Extension/assets/97473345/0ac4c4ca-b20f-4a2b-92d5-0d65fa61bd33">
<img width="1039" alt="スクリーンショット 2024-02-19 123318" src="https://github.com/Naonao3/Restaurant-Chain-Mockup-Extension/assets/97473345/7cf98f59-88cf-4289-90d0-d6a5ac7ad084">

## 使用技術
- フロントエンド
  - HTML
  - CSS
  - Bootstrap
- バックエンド
  - PHP

## 実行方法
 1. Clone from Git
 
 ```shell
 php -S localhost:8000
```
2. Access in Browser.

## クラス図及びUML図
- Employee クラス（User クラスを拡張）
    - 職種（string）: 従業員の職種
    - 給与（float）: 従業員の給与
    - 開始日（DateTime）: 従業員がレストランでの雇用を開始した日付
    - 賞（array）: 従業員が獲得した賞の配列
- Company クラス
    - 会社名（string）: 会社の名称
    - 設立年（int）: 会社が設立された年
    - 説明（string）: 会社の簡単な説明
    - ウェブサイト（string）: 会社の公式ウェブサイトの URL
    - 電話（string）: 会社の連絡先電話番号
    - 業界（string）: 会社が事業を展開している業界
    - CEO（string）: 会社の CEO の名前
    - 公開取引の有無（bool）: 会社が公開取引されているかどうかを示します
- RestaurantChain クラス（Company クラスを拡張）
    - チェーン ID（int）: レストランチェーンの一意の識別子
    - レストランの場所（array）: レストランチェーンの異なる場所を表す RestaurantLocation オブジェクトの配列
    - 料理の種類（string）: レストランチェーンで提供される料理の種類
    - 場所の総数（int）: チェーン内のレストランの総数
    - ドライブスルーの有無（bool）: チェーンのレストランにドライブスルーがあるかどうかを示します
    - 設立年（int）: レストランチェーンが設立された年
    - 親会社（string）: 親会社の名前（該当する場合）
<img width="596" alt="UML図" src="https://github.com/Naonao3/Restaurant-Chain-Mockup-Extension/assets/97473345/38444bb2-5eae-445b-9afa-0421271c1160">


