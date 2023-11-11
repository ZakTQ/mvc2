>>>bootstrap // composer require twbs/bootstrap

You could use a post update command in the composer.json file:
"scripts": {
        "post-update-cmd": [
            "rm -rf public/bootstrap",
            "cp -R vendor/twbs/bootstrap/dist public/bootstrap"
        ]
    }

And then just include the javascript- and css-files like this:
<script type="text/javascript" src="{{ ROOT_URL }}bootstrap/js/bootstrap.min.js"></script>
<link href="{{ ROOT_URL }}bootstrap/css/bootstrap.min.css" rel="stylesheet">

// php composer.phar run-script [--dev] [--no-dev] script

>>>