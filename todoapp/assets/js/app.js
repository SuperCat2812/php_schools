(function ($){

    var form = $('#add-form'),
        input =form.find('#text');
    list=$('#item-list');
    input.val('').focus();
    form.on('submit', function (e) {
        event.preventDefault();
        /**
         * SETTINGS
         */
        var animation={
            startColor: '#00bc8c',
            endColor:list.find('li').css('backgroundColor')|| '#303030',
            delay:200
        };

        var req=$.ajax({
            url:form.attr('action'),
            type:"POST",
            data:form.serialize()
        });
        req.done(function (data){

            if (data==='success'){
                $.ajax({url:baseURL}).done(function(html) {
var newItem=$(html).find('li:last-child');
                    console.log(newItem[0]);

                newItem.appendTo(list)
                    .css({backgroundColor:animation.startColor})
                    .delay(animation.delay)
                    .animate({backgroundColor:animation.endColor})

                });
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