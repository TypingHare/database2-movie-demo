# Movie Demo

## Directory Structure

```python
.
├── android     # Android source code (Phase 3 Demo)
├── php         # PHP scripts
├── sql         # SQL files
├── phase2      # Phase 2 Demo
└── README.md   # This file
```

## Start services using XAMPP

On **Windows**, open XAMPP and start "Apache" (reverse proxy service) and "MySQL" (MySQL database service).

On **macOS**, open XAMPP (in Finder, go to Applications, then XAMPP, and open "manager-osx.app"). Select the "Manage Servers" tab and click the "Start All" button.

> Note that the `Apache` service listens on 80, and the `MySQL` service listens on 3306. If these ports are already in use, the service will not be able to start. You need to kill the processes that occupy these ports and start the services again.

## Initialize Demo Database

Open `http://localhost/phpmyadmin`, and you should see the phpMyAdmin panel. Click "new" in the sidebar and create a database named "movie". Then, you should see an entry named "movie" in the sidebar. Click the "movie" entry and select the "SQL" tab.

Copy content in `sql/movie.sql` and paste it in the textfield in the "SQL" tab. Next, press the "Go" button at the bottom. You will see that a "movies" table is added to the "movie" database, and the table contains two records.

## Move PHP script to htdocs

The `htdocs` directory is the **document root**. It is where the web server looks for files to serve over HTTP. Find the XAMPP "htdocs" directory in your file system. On Windows, it can be `C:\xampp\htdocs\` (if you install it elsewhere, you need to find it by yourself). On macOS, it should be `/Applications/XAMPP/xamppfiles/htdocs`.

Create a `demo` directory in the `htdocs` directory, and move the `php/movie.php` file in this directory to this (`demo`) directory.

Verify it with the following command:

```bash
curl -i -X POST http://localhost/demo/movie.php -d "year=1977"
```

It should show:

```
HTTP/1.1 200 OK
Date: Mon, 09 Feb 2026 20:05:18 GMT
Server: Apache/2.4.56 (Unix) OpenSSL/1.1.1t PHP/8.2.4 mod_perl/2.0.12 Perl/v5.34.1
X-Powered-By: PHP/8.2.4
Content-Length: 81
Content-Type: text/html; charset=UTF-8

{"success":true,"title":"Star Wars","year":"1977","length":"124","genre":"sciFi"}
```

## Run Phase 2 Demo

Copy the `phase2` directory to the document root directory (`htdocs`). Then, open the following URL in the browser:

```text
http://localhost/phase2/mysql_example.html
```

Input `1939` in the text field and click `Submit Query`. You should then be brought to a new webpage (`http://localhost/phase2/mysql_example.php`) displaying:

```text
Title                     Length               Year
Gone With the Wind   231   1939
```

You can also explore the `http://localhost/phase2/orderform.html` webpage. It is another demo that uses filesystem to store the data.

## Run Android App (Phase 3 Demo)

Open the `android` directory using Android Studio. Android Studio detects that the `build.gradle` file is present in the root directory, so it will treat it as an Android application project. It will then do the following:

- Install dependencies (~3 minutes)
- Syncing the project (this will change the display of the directory structure) (1 minute)
- Indexing (~1 minute)

If nothing goes wrong, click the green triangle button in the top-right corner. Android Studio will start building the project (that is, compile Java files into bytecode files). This will take around 3 minutes for the first time.

After building, Android Studio will start the default emulator (or "virtual device"), and the application will be automatically opened.

Input "1977" in the text field, and click the "Submit Query" button. If it works, you should see the movie title and the length on the screen.
