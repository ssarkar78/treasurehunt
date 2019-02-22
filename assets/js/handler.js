$(document).on('click','.icon-medkit', function(){$("#cip_tnh").css('display','inline')});

$(document).on('click','#key_anchor',function(){
    $("#key_input").val("golden key");
    $("#target").submit();
});

$(document).on('click','#key_anchor_2',function(){
    $("#key_input").val("3rd postion");
    $("#target").submit();
});

function endLoading(id){
    switch(id){
        case 1:
        $("body").append("<div class='theme' style='color:black;font-size:5px'>death</div>");
        console.log("here");
        break;
        case 2:
        document.title = "coffee";
        case 3:
        $('#question').attr('data-solution','bazzinga');
    }
}