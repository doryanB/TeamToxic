$(document).ready(function(){
    if (annyang) {
        annyang.setLanguage("fr-FR");

        var commands = {
            'qui sommes nous': function() {
                window.location.href = "who.php";
            },
            'fide': function() {
                window.location.href = "feed.php";
            },
            'contact': function() {
                window.location.href = "contact.php";
            },
            'info': function() {
                window.location.href = "inform.php";
            }
        };

        annyang.addCommands(commands);

        annyang.debug(true);

        annyang.start();
    }
});