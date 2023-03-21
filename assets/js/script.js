const cpf = document.getElementById('cpf');
    cpf.addEventListener('keypress', ()=>{
        let cpf_length = cpf.value.length;
        if (cpf_length == 3 || cpf_length == 7){
            cpf.value += '.'
        } else if (cpf_length == 11){
            cpf.value += '-'
        };
    });

    const cell_phone = document.getElementById('cell_phone');
    cell_phone.addEventListener('keypress', ()=>{
        let phone_length = cell_phone.value.length;
        if (phone_length == 0){
            cell_phone.value += '('
        } else if (phone_length == 3){
            cell_phone.value += ') '
        } else if (phone_length == 10){
            cell_phone.value += '-'
        };
    });