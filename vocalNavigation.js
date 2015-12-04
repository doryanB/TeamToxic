$(document).ready(function(){
    if (annyang) {
        annyang.setLanguage("fr-FR");

        var commands = {
            '(qui sommes) nous': function() {
                window.location.href = "who.php";
            },
            '(live) fide': function() {
                window.location.href = "feed.php";
            },
            'site': function() {
                window.location.href = "feed.php";
            },
            'Sid': function() {
                window.location.href = "feed.php";
            },
            'side': function() {
                window.location.href = "feed.php";
            },
            'actualité': function() {
                window.location.href = "feed.php";
            },
            'flux': function() {
                window.location.href = "feed.php";
            },
            'contact': function() {
                window.location.href = "contact.php";
            },
            'info': function() {
                window.location.href = "inform.php";
            },
            'information': function() {
                window.location.href = "inform.php";
            },
            'accueil': function() {
                window.location.href = "index.php";
            },
            "s'informer": function() {
                window.location.href = "inform.php";
            }
        };

        annyang.addCommands(commands);

        annyang.debug(true);

        annyang.start();
    }
});