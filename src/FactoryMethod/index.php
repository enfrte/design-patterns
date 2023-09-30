<?php

namespace CodingInTheCold\DesignPatterns\FactoryMethod;

use CodingInTheCold\DesignPatterns\FactoryMethod\Classes\SocialNetworkFormProcessor;
use CodingInTheCold\DesignPatterns\FactoryMethod\Classes\FacebookPoster;
use CodingInTheCold\DesignPatterns\FactoryMethod\Classes\LinkedInPoster;

require '../../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory method example</title>
</head>
<body>

    <h4>Factory method example</h4>
    
    <form method="post">
        <div>
            <label for="social_media_selection">Social media platform: </label>
            <select id="social_media_selection" name="social_media_selection">
                <option value="1">Facebook</option>
                <option value="2">LinkedIn</option>
            </select>
        </div>    
        <div>
            <p>Message</p>
            <textarea name="post" cols="30" rows="10"></textarea>
        </div>
        
        <button type="submit">Post</button>
    </form>

    <?php
        $formProcessor = new SocialNetworkFormProcessor();
    ?>

</body>
</html>