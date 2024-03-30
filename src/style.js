// console.log('ada kah?')

// $(document).off('click', 'btn').on('click', 'btn', function(){
//     console.log('clicked')
//     $(this).addClass('transition-all duration-100 scale-105')
//     setTimeout(() => {
//         $(this).removeClass('scale-105')
        
//     }, 400);
// });

$('.btn').click(function(){
    // console.log($(this));

    // Add inline style for scale-95
    $(this).css('transform', 'scale(0.95)');

    // Remove scale-95 and add inline style for scale-105 after a delay
    setTimeout(() => {
        $(this).css('transform', 'scale(1.05)');
    }, 75);

    // Remove scale-105 after another delay
    setTimeout(() => {
        $(this).css('transform', 'scale(1)');
    }, 140);
})