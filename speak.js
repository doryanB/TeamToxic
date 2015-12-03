$(document).ready(function(){
    if (annyang) {
        // Let's define our first command. First the text we expect, and then the function it should call
        var commands = {
            'oui': function() {
                $(".message").text("oui");
            },
            'non': function() {
                $(".message").text("non");
            }
        };

        // Add our commands to annyang
        annyang.addCommands(commands);
        annyang.setLanguage("fr-FR");
        // Start listening. You can call this here, or attach this call to an event, button, etc.
        annyang.start();
    }
});