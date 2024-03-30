console.log('ada kah?')

// $(document).off('click', 'btn').on('click', 'btn', function(){
//     console.log('clicked')
//     $(this).addClass('transition-all duration-100 scale-105')
//     setTimeout(() => {
//         $(this).removeClass('scale-105')
        
//     }, 400);
// });

$('.btn').click(function(){
    console.log($(this))
    $(this).addClass('scale-95')
    setTimeout(() => {
        $(this).removeClass('scale-95').addClass('scale-105')
    }, 75);
    setTimeout(() => {
        $(this).removeClass('scale-105')
    }, 140);
})