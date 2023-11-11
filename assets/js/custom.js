// $(document).ready(function () {

//     $("#submitForm").click(function (e) {
//         console.log('0');
//         e.preventDefault();

//         // Obtenha os dados do formulário
//         var formData = {
//             nome: $('#name').val(),
//             email: $('#email').val(),
//             subject: $('#subject').val(),
//             mensagem: $('#message').val()
//         };

//         console.log(formData);

//         // Faça uma solicitação AJAX para o seu servidor Node.js (ou outro servidor)
//         $.ajax({
//             type: 'POST',
//             url: 'contact.php', // Substitua pela rota do seu servidor
//             data: formData,
//             success: function (data) {
//                 $('#statusMessage').text(data);
//             },
//             error: function (err) {
//                 $('#statusMessage').text('Erro ao enviar o e-mail.');
//             }
//         });
//     });
// });