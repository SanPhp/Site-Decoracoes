function validacao() {
	
	if(document.form.nome.value=="") {
		alert("Preencha o campo nome!")
		document.form.nome.focus();
		return false;
	}
	if(document.form.local.value=="") {
		alert("Preencha o campo Local!")
		document.form.local.focus();
		return false;
	}
	if(document.form.email.value=="" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1) {
		alert("Email Inválido!")
		document.form.email.focus();
		return false;
	}
	if(document.form.numero_convidados.value=="") {
		alert("Preencha o campo Número de Convidados!")
		document.form.numero_convidados.focus();
		return false;
	}
	if(document.form.fone.value=="") {
		alert("Preencha o campo Fone!")
		document.form.fone.focus();
		return false;
	}
	if(document.form.mensagem.value=="") {
		alert("Preencha o campo Mensagem!")
		document.form.mensagem.focus();
		return false;
	}
	if(document.form.data.value=="") {
		alert("Preencha o campo Data!")
		document.form.data.focus();
		return false;
	}
	
}