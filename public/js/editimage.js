/*　jsの記述　*/
const txt=document.getElementById("txt");
$(function(){
 
    //ファイルチェック
    function inputCheck(){
     
        //inputフィールドの文字数を取得
        fileCheck = $("#fileCheck").val().length;
        
        //値が無ければボタンを非表示
        if(fileCheck == 0){
            //ここには「画像が変更されました」
            txt.textContent="現在の画像";
        }else{
            txt.textContent="画像が変更されました";
        }
    }
     
        //フォームの中身を検証
        inputCheck();
        
        //inputフィールドの値が変わったら
        $("#fileCheck").change(function(){
            inputCheck();
        });
     
    });