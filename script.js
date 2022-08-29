document.getElementById('form-submit').addEventListener('click', function(){
    let name = document.getElementById('exampleInputName').value;
    let email = document.getElementById('exampleInputEmail1').value;
    let message = document.getElementById('exampleInputMessage').value;

    document.getElementById('name-error').innerText = '';
    document.getElementById('email-error').innerText = '';
    document.getElementById('message-error').innerText = '';
    if(name == '') {
        document.getElementById('name-error').innerText = 'Name required';
    } else if(email == '') {
        document.getElementById('email-error').innerText = 'Email required';
    } else if(message == '') {
        document.getElementById('message-error').innerText = 'Message required';
    } else{
        alert('Submited!');
    }
});