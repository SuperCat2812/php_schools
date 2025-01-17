(function ($){

    var form = $('#add-form'),
        input =form.find('#text');
    input.val('').focus();
    form.on('submit', function (e) {
        event.preventDefault();

        var req=$.ajax({
            url:form.attr('action'),
            type:"POST",
            data:form.serialize()
        });
        req.done(function (data){

            if (data==='success'){
                var li =$('<li class="list-group-item">'+ input.val() +'</li>')

                li.appendTo('.list-group')
                    .css({backgroundColor:'#00bc8c'})
                    .delay(200)
                    .animate({backgroundColor:'#303030'})

            }
        });
    });
    input.on('keypress',function (event){
        if(event.which === 13){
            form.submit();
            return true;
        }
    })

    /**
     * Edit form
     */
    $('#edit-form').find('#text').select();

    /**
     * Delete form
     */

    $('delete-form').on('submit', function(event){return confirm('for sure?');});
}(jQuery))