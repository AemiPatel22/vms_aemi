$('body').on('click', '.doctype-action', function(){

    var action_type = $(this).attr('data-action-type');
    var data_id = $(this).attr('data-id');

    if(action_type == 0){
        // yes-sure-inactive
        setTimeout(function() {
            $('.yes-sure-inactive:visible').attr('data-id', data_id);
            $('.yes-sure-inactive:visible').attr('data-action-type', action_type);
        }, 500);

    }else{
        if(action_type == 1){
            // yes-sure-active
            setTimeout(function() {
                $('.yes-sure-active:visible').attr('data-id', data_id);
                $('.yes-sure-active:visible').attr('data-action-type', action_type);
            }, 500);
        }else{
            // yes-sure
            setTimeout(function() {
                $('.yes-sure-delete:visible').attr('data-id', data_id);
                $('.yes-sure-delete:visible').attr('data-action-type', action_type);
            }, 500);
        }
    }

});


$('body').on('click', '.action-btn', function(){
    var action_type = $(this).attr('data-action-type');
    var data_id = $(this).attr('data-id');
    $.ajax({
        type:'POST',
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
        data:{'action' : 'action-employee', 'data_id' : data_id, 'action_type': action_type},
        url: baseurl + 'doctype-ajax',
        success:function(data){
            if(data){
                window.location.href = baseurl + 'doc-type';
            }
        },
        complete:function(){

        }
    });
});


$('#employee_form').validate({
    errorElement: 'span',
    errorClass: 'error',


    rules:{
        document_for:{
            required: true

        },
        document_name:{
            required: true

        },
        validity_piriod:{
            required: true

        },

        warn_before:{
            required: true

        },



    },
    messages:{

        document_for:{
            required: 'please enter your document type'
        },
        document_name:{
            required: "please enter your document name"
        },
        validity_piriod:{
            required: "please enter your validity period"
        },
        warn_before:{
            required: "please enter your document worn"
        },

    },

        submitHandler: function(form){
            form.submit();
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },



    });

    // $('.select2').select2();











