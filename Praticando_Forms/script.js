document.addEventListener("DOMContentLoaded", function () {

var phone = document.getElementById("phone");
var cep = document.getElementById("cep");
var cpf = document.getElementById("cpf");

Inputmask({ mask: "(99)99999-9999" }).mask(phone);
Inputmask({ mask: "99999-999" }).mask(cep);
Inputmask({ mask: "999.999.999-99" }).mask(cpf);

});
