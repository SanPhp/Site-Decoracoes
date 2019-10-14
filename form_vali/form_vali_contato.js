// JavaScript Document

function validacao() {
	
	if(document.form_contato.nome.value=="") {
		alert("Preencha o campo nome!")
		document.form_contato.nome.focus();
		return false;
	}
	
	if(document.form_contato.email.value=="" || document.form_contato.email.value.indexOf('@')==-1 || document.form_contato.email.value.indexOf('.')==-1) {
		alert("Email Inválido!")
		document.form_contato.email.focus();
		return false;
	}
	
	if(document.form_contato.fone.value=="") {
		alert("Preencha o campo Fone!")
		document.form_contato.fone.focus();
		return false;
	}
	
	if(document.form_contato.assunto.value=="") {
		alert("Preencha o campo Assunto!")
		document.form_contato.assunto.focus();
		return false;
	}
	
	if(document.form_contato.cidade.value=="") {
		alert("Preencha o campo Cidade!")
		document.form_contato.cidade.focus();
		return false;
	}
	if(document.form_contato.mensagem.value=="") {
		alert("Preencha o campo Mensagem!")
		document.form_contato.mensagem.focus();
		return false;
	}
	
}