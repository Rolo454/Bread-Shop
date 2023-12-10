// Rohan Tumkur
// 12/1/2023
// IT202-003
// Section 003 Unit 11 Asignment
// rat6@njit.edu

$('document').ready(() => {
    $('.delete-button').click((event) => {
        const confirmation = confirm('Are you sure?');
        if (!confirmation) {
            event.preventDefault();
        }
    })
})