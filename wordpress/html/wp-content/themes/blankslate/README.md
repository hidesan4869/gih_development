### 2023/4/23 ランディングページ作成環境
- page-product-introduction.php
    - WPの管理画面からランディングページ用の固定ページを作成

- ランディングページ作成時に、トップページとUI(header, footer)に相違があるので、個別でスタイルを適応しました。
    - scssファイルのコンパイル
        - 開発時の動作環境
            - windows 10
            - WSL2: For Linux 20.04
            - node: 16.14.0
            - npm: 8.3.1
            - タスクランナー：gulp
            - tailwindCSS

- 環境設定 
    - npm install //コンパイルに必要なパッケージをインストール
        - sass、gulpのモジュールがなかったら
        - npm install sass --save-dev
        - npm install gulp gulp-sass gulp-concat sass --save-dev
    - npm run watch
        - コマンドを叩くと、/src/scss/*.scssファイルが下記ファイルに全て結合されてコンパイルされる
            - /src/css/style.css
    - npm run dev
        - tailwindをコンパイル。下記ディレクトリファイルにコンパイル
            - /css/tailwind.prod.css

- functions.php
    - L168にスタイルシートの読み込み

- js
    - /app/FooterLandingPage.php
        - 上記ファイルに直接記載している

- 2023/05/10 アップロード完了
    - 追加ディレクトリ, ファイル
        1. app/*
        2. src/*
        3. page-product-introduction.php
        4. gulpfile.js
        5. functions.php
            - js, cssファイルの読み込みを定義
        6. postcss.config.js
        7. tailwind.config.js
        8. package.json
        9. package-lock.json
        10. node_modules
        11. README.md