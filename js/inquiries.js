(function ($) {
    $('.modal-trigger').leanModal();
    $('#inquiry-form').submit(function(e){
       
        $.post( 
            "src/ajax/inquiries.php", 
            $( "#inquiry-form" ).serialize(), 
            function() {
                //console.log($( "#inquiry-form" ).serialize());alert( "success" );
        })
        .done(function(data) {
          $('.modal-trigger').leanModal();
          openModal1(data);
        })
        .fail(function() {
          alert( "error" );
        }
        );
        
       e.preventDefault();
   });
   
   function openModal1(firstname) {
        //append the html to the modal
        $('#modal_content').html(firstname);
        //open the modal
        $('#modal1').openModal();
      };
   
}( jQuery ));


