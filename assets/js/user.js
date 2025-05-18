const openModal = (id, type = '') => {
    if (id == 0) {
        $('#modalTitle').text('Add user');
        $('#inputId').hide();
        $('#inputPass').show();
        $('#save').show();

        $('#type').val('add');
        $('#name').val('');
        $('#email').val('');
        $('#password').val('');

        dissabled(false);
    }
    else {
        $.ajax({
            url: baseURL + '/user/detail/' + id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                if (type == "info") {
                    $('#modalTitle').text('Info user');
                    $('#save').hide();
                    $('#inputPass').hide();

                    dissabled(true);
                }
                else {
                    $('#modalTitle').text('Update user');
                    $('#save').show();
                    $('#inputPass').show();

                    $('#type').val('update');
                    $('#idOld').val(id);
                    $('#password').val(response.password);

                    dissabled(false);
                }
                $('#inputId').show();

                $('#id').val(id);
                $('#name').val(response.name);
                $('#email').val(response.email);
            }, error: function (error) {
                console.log(error);
            }
        });
    }
    $('#modalUser').modal('show');
}

const dissabled = (isDissabled) => {
    $('#id').prop('disabled', isDissabled);
    $('#name').prop('disabled', isDissabled);
    $('#email').prop('disabled', isDissabled);
}

const userConfirm = (id) => {
    $('#deleteUser').text('Are you sure you want to delete this user with id =' + id + '  ?')
    $('#modalDelUser').modal('show');
    $('#userDelete').val(id);
}

const deleteUser = () => {
    const id = $('#userDelete').val();
    $.ajax({
        url: baseURL + "/user/delete/" + id,
        type: 'DELETE',
        dataType: 'JSON',
        success: function () {
            localStorage.setItem('toastMessage', 'Delete user success');
            location.reload();
        },
        error: function (error) {
            console.log(error);
        }
    })
}

const saveUser = (type = '') => {
    const form = {};
    $("#userForm").serializeArray().forEach(field => {
        form[field.name] = field.value;
    });

    const fields = ["name", "email", "password", ...(form['type'] === "update" ? ["id"] : [])];

    if (fields.some(field => form[field].trim() === '')) {
        toast(false, "All fields required");
    }

    else {
        $.ajax({
            url: baseURL + '/user/' + form['type'],
            type: 'POST',
            dataType: 'JSON',
            data: form,
            success: function () {
                localStorage.setItem('toastMessage', form['type'] + ' user success!');
                location.reload();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
}
