$("#bt_save").click(function(){
	var f = $("form[name='g_form']");
	var writer = $("#writer");
	var content = $("#content");
	var email = $("#email");

	if(writer.val() == ""){
		alert("작성자를 입력해주세요.");
		writer.focus();
		return false;
	}
	if(email.val() == ""){
		alert("이메일을 입력하세요");
		email.focus();
		return false;
	}
	if(content.val() == ""){
		alert("내용을 입력하세요");
		content.focus();
		return false;
	}
	f.submit();
});

function delData(id){
	location.href = "gbook_del.php?id="+id;
}