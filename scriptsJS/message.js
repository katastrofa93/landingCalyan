    const get_button_class_send = document.querySelector('.send'); // получение кнопки отправить
    const form_send = document.querySelector('.form-feedback'); // получение доступа ко всей форме
    const message__block = document.querySelector('.message__block'); // обращение к блоку сообщения
    const close = document.querySelector('.close'); //обращение к кнопке блока сообщения
    const check = document.querySelector('.check') // обращение к чкбоксу
    




    /**Очистка формы */
    function clearForm(form){
        document.querySelector(form).reset();
    }

    /** Показать блок с сообщением */
    function showMessage(){
        message__block.classList.toggle('message__block_show');
    }

    /** Закрыть блок с сообщением */
    close.addEventListener('click', function(){
        message__block.classList.toggle('message__block_show');
        clearForm('.form-feedback');
        get_button_class_send.disabled = false;
    });



    /**Валидация */
    const no_text = /[^\d]/g;
    const no_number = /[0-9]/g;
    const telephone = '^[8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]';
    const text = '^[А-Яа-яЁё\s]';



    /**Отключить ввод букв в строке инпут телефон */
    let phone = document.querySelector('.form-feedback__phone');
    phone.oninput = function(){
        this.value = this.value.replace(no_text, "");
    }




    /**Отключить ввод цифр в строке инпут имя */
    let name = document.querySelector('.form-feedback__name');
    name.oninput = function(){
        this.value = this.value.replace(no_number, "");
    }


    

    /**Нажатая кнопка отправить */
    get_button_class_send.addEventListener('click', async function(e){
        e.preventDefault();
        //*
        let feedback_name = document.querySelector('.form-feedback__name').value; //input имя
        let feedback_phone = document.querySelector('.form-feedback__phone').value; //input телефон
        let message = document.querySelector('.text');
        //*
        console.log('ТИП строки имя:' + typeof(feedback_name));
        console.log('ТИП строки телефон:' + typeof(feedback_phone));
        const send ='send';

        if(get_button_class_send){ //* Начало первого IF
            console.log('Кнопка нажата');

            if(feedback_name !== '' && feedback_phone !== ''){
                console.log('Количество символов телефон ' + feedback_phone.length);
                if(feedback_name.length > 2 && feedback_name.match(text) && feedback_phone.length == 11 && feedback_phone.match(telephone)
                && check.checked
                ){
                    
                    
                    let response = await fetch('scriptsPHP/mail.php', {
                        method: 'POST',
                        body: new FormData(form_send),
                    })
                    if(response.ok){
                        console.log(send)
                        showMessage();  
                        message.innerHTML = 'Ваша заявка принята!';
                        get_button_class_send.disabled = true;
                    }  
                }
                else if(feedback_name.length < 2){
                    showMessage();  
                    message.innerHTML = 'Поле имя меньше 2';
                    get_button_class_send.disabled = true;
                }
                else if(!feedback_name.match(text)){
                    showMessage();  
                    message.innerHTML = 'Поле имя только русскими буквами';
                    get_button_class_send.disabled = true;
                }
                else if(feedback_phone.length < 11){
                    showMessage();  
                    message.innerHTML = 'Введите телефон в формате 89998887766';
                    get_button_class_send.disabled = true;
                }
                else if(!feedback_phone.match(telephone)){
                    showMessage();  
                    message.innerHTML = 'Введите телефон в формате 89998887766';
                    get_button_class_send.disabled = true;
                }
                else if(!check.checked){
                    showMessage();  
                    message.innerHTML = 'Подтвердите чек';
                    get_button_class_send.disabled = true;
                }
                
            }
            else if(feedback_name === ''){ //
                showMessage();  
                message.innerHTML = 'Поле имя пустое';
                get_button_class_send.disabled = true;
            }
            else if(feedback_phone === ''){
                showMessage();  
                message.innerHTML = 'Поле телефон пустое';
                get_button_class_send.disabled = true;
            }
        } //* конец первго IF
    });