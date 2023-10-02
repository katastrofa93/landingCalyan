const button = document.getElementById('button'); //доступ к кнопке
    const section_feedback = document.querySelector('.section-feedback'); //доступ к блоку
    let getHTML = document.documentElement;
    let get_scroll = document.documentElement.scrollTop;
    button.addEventListener('click', function(e){
        e.preventDefault();
        console.log(getHTML);
        
        //console.log(section_feedback.offsetTop + section_feedback.scrollHeight); // до куда листать
        let scrollTo = section_feedback.offsetTop;
        window.scrollBy({
            behavior: "smooth",
            top: scrollTo,
    });


})