(function($){
    $(function(){


        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false, // Does not change width of dropdown to that of the activator
                hover: false, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false, // Displays dropdown below the button
                alignment: 'right' // Displays dropdown with edge aligned to the left of button
            }
        );




    }); // end of document ready
})(jQuery); // end of jQuery name space

function getFormContact(){
    $.post("/contact/new",function(data){
        $('.modal-content').html(data);
        $('#modal1').openModal();
    });
}