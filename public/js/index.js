$(function (){
    $('#answer_check').on('click', function(){
        const item_name = [
            's',
            'shussin',
            'nenrei',
        ];
        let result = 0;
        item_name.forEach(function(item){
            var input_ele = $('#'+item);
            if(input_ele.val() == input_ele.attr('answer')){
                result ++;
            }
        });
        alert('正解数は'+result+'です');
    });

    /*$('#answer_check_text').on('click', function(){
        $('.answer_text').show();
        $('#answer_hide_text').show();
        $('#answer_check_text').hide();
    });
    $('#answer_hide_text').on('click', function(){
        $('.answer_text').hide();
        $('#answer_check_text').show();
        $('#answer_hide_text').hide();
    });*/
});