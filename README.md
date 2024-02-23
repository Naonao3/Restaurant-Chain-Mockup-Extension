# 概要 
架空のレストランチェーンの情報を表示する動的なウェブサイトです。
利用者が、
- 従業員の数　1~5の間<br>
- 従業員の給与 1~100の間
- 支店の数 1~5の間
- 郵便番号 1~20の間
  
を自由に入力することができ、それらのデータと架空のデータとを合わせて動的にウェブサイトを生成します。

## スキルセット
- PHP8.2を利用して、強力な片付けをベースに開発を行う。
- UML図及びクラス図に基づいてOOPコードを作成する。
- OOPの原則であるカプセル化、抽象化、継承、ポリモーフィズムを利用して設計を行う。
- ユーザーが様々な具象クラスを活用できるように、インタフェースや抽象クラスを作成し、インタフェースに対する設計原則に従う。
- fakerライブラリを使い、ランダムなデータを生成する。
- 入力フォーム(index.php)のPOSTリクエストからユーザーの入力を取得し、RandomGeneratorクラスを使用して入力された数値のrestaurantChainsインスタンスを生成する。

## 学んだこと
- サーバーサイド言語であるPHP8での開発。
- UML図及びクラス図に沿って、OOPの原則に基づく開発。
- 同じエントリーポイントから始め、開発に必要なクラスと依存関係やライブラリをインポートし、プロジェクトを構築する。
  

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


