$('body').on('change','#document_for',function(){
    var docforId = $(this).val();
    $.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
        url: baseurl + 'common-ajax',
        data: {'action' : 'change-doctype', 'docforId' : docforId},
        success:  function(data){
            var output = JSON.parse(data);

            var html = '<option value="">Select Document Type</option>';
            var doc_html = '<option value="">Select Document</option>';
            for(var i = 0; i < output.length; i++){
                var temp = '';
                temp = '<option value="'+ output[i]['id']+'">'+ output[i]['document_name'] +'</option>';
                html = html + temp;
            }
            $("#document_type").html(html);
            $("#document_of").html(doc_html);

        },
        complete: function(){

        },

    });
});

$('body').on('change','#document_type',function(){
    var doctypeId = $(this).val();

    $.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
        url: baseurl + 'common-ajax',
        data: {'action' : 'change-docof', 'doctypeId' : doctypeId},
        success:  function(data){
            var output = JSON.parse(data);

            var html = '<option value="">Select Document</option>';

            for(var i = 0; i < output.length; i++){
                var temp = '';
                temp = '<option value="'+ output[i]['id']+'">'+ output[i]['document_of'] +'</option>';
                html = html + temp;
            }
            $("#document_of").html(html);


        },
        complete: function(){

        },

    });
});
