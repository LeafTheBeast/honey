
$(document).ready(function(){

    //$('.password').on('change', checkFunc)
    $('.password').on('change', function() {

        let checkValue = $('.password').val();
        const array = [...checkValue];
        console.log(checkValue);

        const toCheck =  checkValue;

        const re = new RegExp(/^[a-zA-Z0-9_!?]+$/);

        if(!re.test(toCheck)) 
        {
            alert('ACHTUNG')
            $('.submit_button').attr("disabled", true);
        }
        else
        {
            $('.submit_button').attr("disabled", false);
            console.log(re.test(toCheck))
        }



    })
})




