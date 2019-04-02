function ajax(operation, id){
var fname = document.getElementById('fname').value; var lname = document.getElementById('lname').value; var email = document.getElementById('email').value; var gender = document.getElementById('gender').value; var age = document.getElementById('age').value;
if(operation == undefined){ operation = ''; id = ''; }else if(operation == 'create'){ id == '';}
if(fname == ''){ fname = '';}
if(lname == ''){ lname = '';}
if(email == ''){ email = '';}
if(gender == ''){ gender = '';}
if(age == ''){ age = '';}
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () { if(xmlhttp.readyState == 4 &&xmlhttp.status == 200){ var result = document.getElementById('result'); result.innerHTML = xmlhttp.responseText;
}}
xmlhttp.open('GET', 'ajax.php?operation='+operation+'&id='+id+'&fname='+fname+'&lname='+lname+'&email='+email+'&gender='+gender+'&age='+age,true);
xmlhttp.send();
}
function ajax_edit(operation, id){ if(operation == 'edit'){
}else if(operation == 'update'){
var fname = document.getElementById('fname').value;
var lname = document.getElementById('lname').value;
var email = document.getElementById('email').value;
var gender = document.getElementById('gender').value;
var age = document.getElementById('age').value;
}
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if(xmlhttp.readyState == 4 &&xmlhttp.status == 200){
var edit = document.getElementById('edit');
edit.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.open('GET', 'edit.php?operation='+operation+'&id='+id+'&fname='+fname+'&lname='+lname+'&email='+email+'&gender='+gender+'&age='+age,true);
xmlhttp.send();
}