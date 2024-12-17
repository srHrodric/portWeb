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
      message = {title: 'Olá',text:'Assim que possível estarei lhe retornando.'};
    }else if(value == 'twitter'){
      message = {title: `Olá`,text:`Ainda não tenho Twitter.`};
    }else{
      message = {title: `Olá ${document.querySelector('#name')}`,text:`Logo retornarei para conversarmos melhor.`};
    }

    Swal.fire({
      title: message.title,
      text: message.text,
      icon: 'success',
      confirmButtonText: 'Obrigado',
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