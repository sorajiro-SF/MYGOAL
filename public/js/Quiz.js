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
            const input_chk=document.getElementById('check_'+item)
            var input_ele = $('#'+item);
            if(input_ele.val() == input_ele.attr('answer')){
                result++;
                input_chk.textContent="";
            }else if (input_ele.val() != input_ele.attr('answer')){
                input_chk.textContent="回答が違います！";
            }
        });
        if(result < 9){
            alert('正解したのは'+result+'問です！');}
        else{audio.play();
            alert('おめでとう！'+result+'問全問正解です！');
            
        }
        
        
    });
});