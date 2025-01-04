$(function (){
	const form_name = [
		'question_0',
		'question_1',
		'question_2',
		'question_3',
		'question_4',
		'question_5',
		'question_6',
		'question_7',
		'question_8',
		'question_9'
	];

    $('#answer_button').on('click', function(){

        const audio = new Audio('/sound/seikai.mp3');

        let result = 0;
        form_name.forEach(function(item){
			const input_chk=document.getElementById('check_'+item)
			const radioButtons = document.getElementsByName(item);
        	let selectedValue = "";
            var input_ele = $('#'+item);
			for (const radioButton of radioButtons) {
				if (radioButton.checked) {
				  selectedValue = radioButton.value;
				  break;
				}
			  }
            if( selectedValue == input_ele.attr('answer')){
                result++;
				input_chk.textContent="";
            }else {
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