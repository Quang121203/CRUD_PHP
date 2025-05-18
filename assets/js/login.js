const login = () => {
    const form = {};

    $('#loginForm').serializeArray().forEach(field => {
        field.name = field.name.replace('Login', '');
        form[field.name] = field.value;
    })

    console.log(form);
    $.ajax({
        url: baseURL + '/login',
        type: 'POST',
        dataType: 'JSON',
        data: form,
        success: function (response) {
            if(response['success']){
                window.location.href = baseURL + '/user';
                localStorage.setItem('toastMessage',"Login successful")
            }
            else{
                toast(false,'Incorrect email or password');
                $('#emailLogin').val('');
                $('#passwordLogin').val('');
            }
        },
        error: function () {
            console.log("1");
        }
    })
}