function verifierInputs(){
    var input1 = document.querySelector('.prenoms');
    var input2 = document.querySelector('.noms');
    var input3 = document.querySelector('.telephone');
    var input4 = document.querySelector('.email');
    var input5 = document.querySelector('.motdepasse');
    var input6 = document.querySelector('.confirmer');
    var input7 = document.querySelector('.metier');
    

    var message1  = document.querySelector('.message1');
    var message2  = document.querySelector('.message2');
    var message3  = document.querySelector('.message3');
    var message4  = document.querySelector('.message4');
    var message5  = document.querySelector('.message5');
    var message6  = document.querySelector('.message6');
    var message7  = document.querySelector('.message7');
    var message8  = document.querySelector('.message8');
    var message9  = document.querySelector('.message9');
    var message10  = document.querySelector('.message10');

    var regexGmail = /^[a-zA-Z0-9._%+-]+@gmail.com$/;
    tousRemplis = true;
    if (input1.value === '') {
        tousRemplis = false;
        input1.style.border = '2px solid red';
        message1.style.display = 'flex';

        // alert('remplissez le champ');

    }else{
        input1.style.border = '2px solid #0b3761';
        message1.style.display = 'none';
    }

    if (input2.value === '') {
        tousRemplis = false;
        input2.style.border = '2px solid red';
        message2.style.display = 'flex';

        // alert('remplissez le champ');

    }else{
        input2.style.border = '2px solid #0b3761';
        message2.style.display = 'none';
    }

    if (input3.value === '') {
        tousRemplis = false;
        input3.style.border = '2px solid red';
        message3.style.display = 'flex';

        // alert('remplissez le champ');

    }else{
        input3.style.border = '2px solid #0b3761';
        message3.style.display = 'none';
    }

    if (input4.value === '') {
        tousRemplis = false;
        input4.style.border = '2px solid red';
        message4.style.display = 'flex';

        // alert('remplissez le champ');

    }else{
        input4.style.border = '2px solid #0b3761';
        message4.style.display = 'none';
    }

    if (input5.value === '') {
        tousRemplis = false;
        input5.style.border = '2px solid red';
        message5.style.display = 'flex';

        // alert('remplissez le champ');

    }else{
        input5.style.border = '2px solid #0b3761';
        message5.style.display = 'none';
    }

    if (input6.value === '') {
        tousRemplis = false;
        input6.style.border = '2px solid red';
        message6.style.display = 'flex';

        // alert('remplissez le champ');

    }else{
        input6.style.border = '2px solid #0b3761';
        message6.style.display = 'none';
    }

    if (input7.value === '') {
        tousRemplis = false;
        input7.style.border = '2px solid red';
        message7.style.display = 'flex';


        // alert('remplissez le champ');

    }else{
        input7.style.border = '2px solid #0b3761';
        message7.style.display = 'none';
    }

    if ((input5.value != input6.value) && !(input6.value === '')) {
        message8.style.display = 'flex';
        input6.style.border = '2px solid red';
    }
    else{
        input6.style.border = '2px solid #0b3761';
        message8.style.display = 'none';
    }
    if (!(input5.value === '') && (input6.value === '')) {
        message9.style.display = 'flex';
        input6.style.border = '2px solid red';
        message6.style.display = 'none';
    }
    else{
        message9.style.display = 'none';
    }

    if ((input5.value === '') && (input6.value === '')) {
        message6.style.display = 'flex';
        input6.style.border = '2px solid red';
    }
    else{
        message6.style.display = 'none';
    }

    if (!(regexGmail.test(input4.value)) && !(input4.value === '')) {
        message10.style.display = 'flex';
        input4.style.border = '2px solid red';
    }
    else{
        message10.style.display = 'none';
    }
}