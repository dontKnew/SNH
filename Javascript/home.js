function copyBtn(link){
    let linkPage = link.getAttribute("data-page-link")
    alert("Copied : " + linkPage);
    navigator.clipboard.writeText(linkPage);
}

$(document).ready(function(){
    $('.changeName').click(function(e){
        e.preventDefault();
        // console.log($('.userid').val());
        if($('.newName').val()=="" ){
            $('#errorProfile').html("<strong class='text-danger'> Please enter name </strong>");
        }else if($('.namePassword').val()==""){
            $('#errorProfile').html("<strong class='text-danger'> Please enter password </strong>");
        }else{
            $.ajax({
                type:"POST",
                url:"changeprofile.php",
                data:{
                        name:$('.newName').val(),
                        password:$('.namePassword').val(),
                        userid:$('.userid').val()
                    },
                beforeSend:function(){
                    $('#errorProfile').fadeOut();
                },
                success:function(response){
                    console.log('daata-send');
                    console.log(response);
                    if(response=="200"){
                        $('#errorProfile').html("<strong class='text-success'> Name changed successfully. </strong>").fadeIn();
                        setTimeout(function(){ $('.nameChangeBtn').click();$('#errorProfile').fadeOut();$('.newName').val("");$('.namePassword').val("");},2000);
                    }else if(response=="201"){
                        $('#errorProfile').html("<strong class='text-danger'> Your password is incorrect </strong>").fadeIn();
                    }else{
                        $('#errorProfile').html("<strong class='text-danger'> name could not change,  <a href='contact.php' target='blank'> <u> Contact us </u> </a> </strong>").fadeIn();
                    };
                },
                error:function(){
                    console.log("unable to send data");
                }
            })
        };
    });
  
    // change email
    $('.changeEmail').click(function(e){
        e.preventDefault();
        // console.log($('.userid').val());
        if($('.newEmail').val()=="" ){
            $('#errorEmail').html("<strong class='text-danger'> Please enter email </strong>");
        }else if($('.emailPassword').val()==""){
            $('#errorEmail').html("<strong class='text-danger'> Please enter password </strong>");
        }else{
            $.ajax({
                type:"POST",
                url:"changeprofile.php",
                data:{
                        email:$('.newEmail').val(),
                        password:$('.emailPassword').val(),
                        userid:$('.userid').val()
                    },
                beforeSend:function(){
                    $('#errorEmail').fadeOut();
                },
                success:function(response){
                    console.log('daata-send');
                    console.log(response);
                    if(response=="200"){
                        $('#errorEmail').html("<strong class='text-success'> Email changed successfully. </strong>").fadeIn();
                        setTimeout(function(){ $('.emailChangeBtn').click();$('#errorEmail').fadeOut();$('.newEmail').val("");$('.emailPassword').val("");},2000);
                    }else if(response=="201"){
                        $('#errorEmail').html("<strong class='text-danger'> Your password is incorrect </strong>").fadeIn();
                    }else{
                        $('#errorEmail').html("<strong class='text-danger'> Email could not be changed,  <a href='contact.php' target='blank'> <u> Contact us </u> </a> </strong>").fadeIn();
                    };
                },
                error:function(){
                    console.log("unable to send data");
                }
            })
        };
    });

    // change passowrd
    $('.changePassword').click(function(e){
        e.preventDefault();
        // console.log($('.userid').val());
        if($('.oldPassword').val()==""){
            $('#errorPassword').html("<strong class='text-danger'> Old password field could not be blank </strong>");
        }else if($('.newPassword').val()=="" ){
            $('#errorPassword').html("<strong class='text-danger'> New password field could not be blank </strong>");
        }else if($('.confirmPassword').val()==""){
            $('#errorPassword').html("<strong class='text-danger'> Confirm password field could not be blank </strong>");
        }else if($('.confirmPassword').val() !== $('.newPassword').val()){
         $('#errorPassword').html("<strong class='text-danger'> Please enter same password </strong>");
        }else{
            $.ajax({
                type:"POST",
                url:"changeprofile.php",
                data:{
                        oldPass:$('.oldPassword').val(),
                        newPass:$('.newPassword').val(),
                        confirmPass:$('.confirmPassword').val(),
                        userid:$('.userid').val()
                    },
                beforeSend:function(){
                    $('#errorPassword').fadeOut();
                },
                success:function(response){
                    console.log('data-send');
                    console.log(response);
                    if(response=="200"){
                        $('#errorPassword').html("<strong class='text-success'> Password changed successfully. </strong>").fadeIn();
                        setTimeout(function(){ $('.passwordChangeBtn').click();$('#errorPassword').fadeOut();$('.newPassword').val("");$('.oldPassword').val("");$('.confirmPassword').val("");},2000);
                    }else if(response=="201"){
                        $('#errorPassword').html("<strong class='text-danger'> Old password is incorrect </strong>").fadeIn();
                    }else{
                        $('#errorPassword').html("<strong class='text-danger'> Password could not be changed,  <a href='contact.php' target='blank'> <u> Contact us </u> </a> </strong>").fadeIn();
                    };
                },
                error:function(){
                    console.log("unable to send data");
                }
            })
        };
    });
})