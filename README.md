Installation:
1) Start your open server (or other tools for local development)
2) Create folder with name "pure-php.local" at open server panel (or other tools for local development)
3) Copy all files from this repository from "pure-php-site" folder, into created folder at step 1
4) Open terminal in your workspace and use command "npm install", for create node_modules folder (it will be auto compiled from package.json)
5) As 4th step use command "composer install"
6) Download database "pure-php.sql"
7) Import downloaded file from 6th step at your SQL (phpMyAdmin, MariaDb or other), with "Import" tool (it's in all the databases)

Usage:
1) Change datas in .env at your DB connection (Host type, DB user, DB pass)
2) Open browser page by url http://pure-php.local
