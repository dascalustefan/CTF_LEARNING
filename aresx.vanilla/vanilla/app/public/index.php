<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Vanilla</title>
        <style>
body {
    padding: 0;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, Helvetica, Arial, sans-serif;
}

html {
    font-size: 18px;
}

#app {
    padding: 2em;
    max-width: 960px;
    margin: 0 auto;
}

.jumbotron {
    font-size: 2rem;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

h1 {
    margin-bottom: 0;
}
        </style>
    </head>

    <body>
        <div id="app">
            <div class="jumbotron">
                <h1>Hello <?php echo $_GET['name'] ?? 'user' ?></h1>
            </div>
        </div>
    </body>
</html>
