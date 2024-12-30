$(function (){
    $('#answerbutton').on('click', function(){
        const item_name = [
            'name',
            'kana',
            'relation_id',
            'date',
            'from_id',
            'hobby',
            'food',
            'work',
            'word'
        ];

        const audio = new Audio('/sound/seikai.mp3');

        let result = 0;
        item_name.forEach(function(item){
            var input_ele = $('#'+item);
            var input_chk = $('#check_'+item);
            if(input_ele.val() == input_ele.attr('answer')){
                result++;
            }else {
                input_chk.textContent="違います！！"
            }
        });
        if(result < 9){
            alert('正解したのは'+result+'問です！');}
        else{audio.play();
            alert('おめでとう！'+result+'問全問正解です！');
            
        }
        
        
    });
});