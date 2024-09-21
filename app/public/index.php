<?php
    require_once("../vendor/autoload.php");

    $app = new App\Example();
    $app->showDatabaseTables();
?>
<h1><?php echo $app->welcome(); ?></h1>
<p>Database tables:</p>
<pre><?php $tables = $app->showDatabaseTables(); print_r($tables); ?></pre>
<p>
    This is staring page of PHP Docker Example.<br />
    Check PHP configuration there: <a href="php.php">php.php</a>
</p>

<p>$_SERVER variable:</p>

<pre><?php print_r($_SERVER); ?></pre>
