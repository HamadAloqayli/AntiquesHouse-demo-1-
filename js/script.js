
$('.container').mixItUp();



//==========================
function confirmSell()
{
    let check = confirm('are you sure ?');
    
        if(check == true)
        {
            location.href = "finalStage.php";
        }
}

function confirmeRead()
{
   let rus = confirm("are you sure ?");
   
   if (rus == true) {

        $('.hideIcon').hide();
       location.href="changeStatus.php?read";
       

   } 
}

function confirmeReadOrder()
{
    let rus = confirm("are you sure ?");
   
    if (rus == true) {
 
         $('.hideIconOrder').hide();
        location.href="changeStatusOrder.php?readOrder";
        
 
    } 
}

function conDelete(id)
 {
    
    let req = confirm("are you sure ?");
    if (req == true) {
        
        location.href=" deleteWorker.php?dWorker="+id;
    }

}

function conDelete1(id)
 {
    
    let req = confirm("are you sure ?");
    if (req == true) {
        
        location.href=" deletePost.php?dPost="+id;
    }

}

function getEdit(id,name,email)
{
    document.getElementById('editEmail').value = email;
    document.getElementById('editName').value = name;
    document.getElementById('editId').value = id;
}

function getEdit1(id,title,text)
{
    document.getElementById('editText').value = text;
    document.getElementById('editTitle').value = title;
    document.getElementById('editId').value = id;
}
/*function getValue(name)
{
    
}*/



$(document).ready(function(){

    $(".holder").hover(
        function()
        {
            $(this).find('.slideImg').animate({top:'-60px'});
        },
        function()
        {
            $(this).find('.slideImg').animate({top:'0px'});
        }
    );


    $(".addWorker").click(function(){

        let txt = $(".addWorker").text();
        let txt1 = $(".addWorker").attr('data');

            $(".formAdd").fadeToggle();
            $(".addWorker").toggleClass("btn-danger");


            if (txt == "cancle" && txt1 == "newWorker")
            {
                $(".addWorker").text("add Worker");
            }
            else if(txt == "cancle" && txt1 == 'newPost')
            {
                $(".addWorker").text("add new post");
            }
            else
            {
                $(".addWorker").text("cancle");
            }
            
    });

    $(".addComment").click(function(){

        let txtC = $(".addComment").text();

            $(".formAddC").fadeToggle();
            $(".addComment").toggleClass("btn-danger");

            if (txtC == "cancle")
            {
                $(".addComment").text("add comment");
            }
            else
            {
                $(".addComment").text("cancle");
            }
            
    });

    $('.toEdit').click(function(){
       
        $('.formEdit').fadeIn();

    });
    $('.toEdit').dblclick(function(){
       
        $('.formEdit').fadeOut();

    });

    $('.buttonCart').click(function(){

        $('.cartImg').css('color','gold');
        $('.cartImg').addClass('shake');
        
    });

});