<!DOCTYPE html>
<html lang="en">

<head>
    <title>Central Perk Coffee House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cp.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://code.jquery.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
            $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
        } );
    </script>

    <style>
        .ui-tabs-vertical { width: 55em; }
        .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
        .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
        .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
        .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
        .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
    </style>
</head>

<body>
    <?php
        $json = file_get_contents('./data/websitedata.json');

        //read json data and convert it as PHP Associative Array
        $json_data = json_decode($json,true);

        //print_r($json_data);
        ksort($json_data);

        if (!isset($_GET["p"])){
            $menuitem = "home";
        }
        else {
            $menuitem = $_GET["p"];
        }
        
        foreach ($json_data as $key1 => $value1) {
            if ($json_data[$key1]["topic"] == $menuitem){
                $heading = $json_data[$key1]["heading"];
                $body = $json_data[$key1]["body"];
            }
        }
    ?>

    <header>
        <?php require("header.php") ?>
    </header>

    <nav>
        <?php require("dynamicmenu.php") ?>
    </nav>

    <main>
        <?php 
        if ($menuitem == "contact") {
            require($body);
        }
        else {
            echo $body;
        }
        
        ?>
    </main>

    <footer>
        <?php require("footer.php") ?>
    </footer>
</body>

</html>