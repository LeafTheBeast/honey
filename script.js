
$(document).ready(function(){

    //$('.password').on('change', checkFunc)
    $('.password').on('keydown', function(evt) {
        let test = String.fromCharCode(evt.keyCode);
        console.log(test);

        const array = [...test];
        console.log(array)

       
        if(array[array.length - 1] === 'h')
        {
            alert('ACHTUNG')
            return;
        }
    })
})




