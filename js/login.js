/**
 * Created by venim on 6/4/2016.
 */
(function ($) {
    $('.modal-trigger').leanModal();
    $('#login-form').submit(function(e){

        $.post(
            "src/ajax/login.php",
            $( "#login-form" ).serialize(),
            function() {
            })
            .done(function(data) {
                $('.modal-trigger').leanModal();
            })
            .fail(function() {
                    alert( "error" );
                }
            );

        e.preventDefault();
    });

}( jQuery ));
