/**
 * Created by ZB on 2018/4/19.
 */
$(function(){
    var height = document.getElementById("loginPopup");
    var h = height.offsetHeight;
    console.log(h);
    $(".popup").css("margin-top",(h-360)/2);
    
    //点击忘记密码
    $(document).on("click",'.isChose',function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
        }else{
            $(this).addClass('active');
        }
    });
    
});