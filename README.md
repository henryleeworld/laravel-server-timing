# Laravel 7 伺服器計時

引入 beyondcode 的 laravel-server-timing 套件來擴增實作伺服器計時，可以監控伺服器端性能情況。Server Timing 標頭提供了一種離散且方便的方式，可以將伺服器端服務器性能計時與瀏覽器中的開發人員工具進行通信。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/user` 來進行查詢全部使用者的伺服器計時。

----

## 畫面截圖
![](https://i.imgur.com/dXjywZc.png)
> 如果不能測量某些工作的速度，我們無法判斷所做的改變是改善性能，沒有效果，甚至是使事情變得更糟。注意別暴露敏感機密資訊