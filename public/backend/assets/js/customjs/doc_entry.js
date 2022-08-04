var Docentry = function(){
    var list = function(){


        $('body').on('click','.docentry-action', function(){

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
                url: baseurl + 'docentry-ajax',
                success:function(data){
                    if(data){
                        window.location.href = baseurl + 'doc-entry';
                    }
                },
                complete:function(){

                }
            });
        });





    }
    return {
        init:function(){
            list();
        }
    }
}();
