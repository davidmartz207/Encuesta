  $().ready(function() {

     // validate signup form on keyup and submit
    $("#registrar").validate({
      rules: {
        name: "required",
        password: {
          required: true,
          minlength: 5
        },
        password_confirmation: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },
        email: {
          required: true,
          email: true
        },
      },
      messages: {
        name: "Ingrese su nombre",
        password: {
          required: "Ingrese una contraseña",
          minlength: "Su contraseña debe poseer al menos 5 caracteres"
        },
        password_confirmation: {
          required: "Repita la contraseña",
          minlength: "Su contraseña debe poseer al menos 5 caracteres",
          equalTo: "Las contraseñas no coinciden"
        },
        email: "Ingrese una dirección de correo válida",
      },
      errorPlacement: function(error, element) {
        error.insertBefore(element);
      }

    });
    

  });