// Rohan Tumkur
// 12/1/2023
// IT202-003
// Section 003 Unit 11 Asignment
// rat6@njit.edu

$('document').ready(() => {
    $('#reset').click(() => {
        $('#breadCode').val('');
        $('#breadName').val('');
        $('#description').val('');
        $('#price').val('');
        $('span').text('');
    })
    $('#submit').click((event) => {
        let isValid = true;

        if (!$('#breadCode').val()){
            $('#breadCode').prev().text('This field is required.');
            isValid = false;
        } else if ($('#breadCode').val().length < 4 || $('#breadCode').val().length > 10){
            $('#breadCode').prev().text('Bread Code should be between 4 and 10 characters long.');
            isValid = false;
        }

        if (!$('#breadName').val()){
            $('#breadName').prev().text('This field is required.');
            isValid = false;
        } else if ($('#breadName').val().length < 10 || $('#breadCode').val.length() > 100){
            $('#breadName').prev().text('Bread Name should be between 10 and 100 characters long.');
            isValid = false;
        }

        if (!$('#description').val()){
            $('#description').prev().text('This field is required.');
            isValid = false;
        } else if ($('#description').val().length < 10 || $('#description').val().length > 255){
            $('#description').prev().text('Description should be between 10 and 255 characters long.');
            isValid = false;
        }
        
        if (!$('#price').val()){
            $('#price').prev().text('This field is required.');
            isValid = false;
        } else if ($('#price').val() <= 0 || $('#price').val() > 100000){
            $('#price').prev().text('The price should be between $1.00 and $100,000.');
            isValid = false;
        }

        if(!isValid){
            event.preventDefault();
        }
    }) 
})