(function($){
    $(function(){

        $("input:checked").next().css('text-decoration','line-through');

        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false, // Does not change width of dropdown to that of the activator
                hover: false, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false, // Displays dropdown below the button
                alignment: 'right' // Displays dropdown with edge aligned to the left of button
            }
        )

    }); // end of document ready
})(jQuery); // end of jQuery name space

function confirmDelete(){
    $('#modal2').openModal();
}

function getFormContact(){
    $.post("/contact/new",function(data){
        $('.new-form').html(data);
        $('#modal1').openModal();
    });
}

function getFormTache(){
    $.post("/tache/new",function(data){
        $('.modal-content').html(data);
        $('#modal1').openModal();
    });
}

function getInfoContact(id){
    $.get(id+"/show",function(data){
        $('#contact-view').html(data);
    });
}

function tacheFaite(id){
    $("label[for='tache"+id+"']").css('text-decoration','line-through');
    $("#tache"+id).attr('onclick','tacheNonFaite('+id+')');
    $.post("/tache/"+id+"/fait");
}

function tacheNonFaite(id){
    $("label[for='tache"+id+"']").css('text-decoration','none');
    $("#tache"+id).attr('onclick','tacheFaite('+id+')');
    $.post("/tache/"+id+"/nonFait");
}



$(".button-collapse").sideNav();
