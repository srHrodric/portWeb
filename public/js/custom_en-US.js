// overlay menu
function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
}


/** google_map js **/

// lightbox gallery
$(document).on("click", '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

function message(value) {
    let message ='';
    if(value == 'contato'){
      message = {title: 'Hello',text:'As soon as possible I will be returning to you.'};
    }else if(value == 'twitter'){
      message = {title: `Hello`,text:`I still don't have Twitter.`};
    }else{
      message = {title: `Hello ${document.querySelector('#name')}`,text:`I'll be back soon to talk better.`};
    }

    Swal.fire({
      title: message.title,
      text: message.text,
      icon: 'success',
      confirmButtonText: 'Thank you',
      confirmButtonColor: 'green',
      showClass: { popup: 'animate__animated animate__fadeInDown' },
      hideClass: { popup: 'animate__animated animate__fadeOutUp' }
    });

    setTimeout(() => {
        document.querySelector('#name').value = '';
        document.querySelector('#telefone').value = '';
        document.querySelector('#message').value = '';
        document.querySelector('#email').value = '';
    }, 1500);
}