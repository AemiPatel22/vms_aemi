var Documenttype = function(){
    var list = function(){
        $('.select2').select2();
        $('#docentry_form').validate({
            errorElement: 'span',
            errorClass: 'error',

            rules:{
                document_for:{
                    required: true

                },
                document_type:{
                    required: true

                },
                document_of:{
                    required: true

                },

                issue_date:{
                    required: true

                },
                expriy_date:{
                    required: true

                },
                document_number:{
                    required: true

                },
                issue_place:{
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
                var elem = $(element);
                if (element.attr("type") == "checkbox") {
                    element = elem.parent();
                    error.insertAfter(element);
                } else {
                    if (elem.hasClass("select2")) {
                        element = $("#select2-" + elem.attr("id") + "-container").parent();
                        error.insertAfter(element);
                    } else {
                        error.insertAfter(element);
                    }
                }
            },
        });



    }

    return {
        init:function(){
            list();
        },

    }
}();

