<?php function printTop() { 
    $sitemap = array();
    $sitemap["Home"] = '/sandbox/index.php';
    $sitemap["Settings"] = '/sandbox/settings.php';
    $sitemap["Processes"] = '/sandbox/processes.php';
    $sitemap["Pressure Levels"] = '/sandbox/pressure.php';
    $sitemap["Machinery Room"] = '/sandbox/machinery.php';
    $sitemap["System Components"] = '/sandbox/components.php';
    $sitemap["Overview"] = '/sandbox/overview.php';
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/sandbox/css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <title>IRC Engineering Toolbox</title>
    </head>
    <body>
            <div class="header">
                <div class="inner_header">
                    <div class="logo_container">
                        <h1>Engineering <span>Toolbox</span></h1>
                    </div>
                </div>
                <ul class="navigation">
                        <a><li>Save Progress</li></a>
                        <a><li>LoadFile</li></a>
                        <a><li>Print Reports</li></a>
                        <a><li>Exit</li></a>
                </ul>
            </div>
            <div class="tab">
                <ul class="tab_navigation">
                    <?php foreach($sitemap as $name => $link) {
                        if($link == $_SERVER['PHP_SELF']) {
                            print "<a class='tab_button_active'><li>$name</li></a>";
                        } else {
                            print "<a class='tab_button' href='$link'><li>$name</li></a>";
                        }
                    } ?>
                </ul>
            </div>
<?php  } ?>

<?php function printBottom() { ?>
  </body>
<?php  } ?>