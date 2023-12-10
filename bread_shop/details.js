// Rohan Tumkur
// 12/1/2023
// IT202-003
// Section 003 Unit 11 Asignment
// rat6@njit.edu

$('document').ready(() => {
    $('#bread-pic').mouseover(() => {
        $('#bread-pic').css({
            'width': '700px',
            'filter': 'grayscale(0%)'
        })
    })
    $('#bread-pic').mouseout(() => {
        $('#bread-pic').css({
            'width': '700px',
            'filter': 'grayscale(100%)'
        })
    })
})