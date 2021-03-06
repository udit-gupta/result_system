// check.js


/**
This function checks the form and flashes errors
**/
function check(Formid,Errorid)
{   window.Fid = Formid;
	window.Eid = Errorid;
	var ret = false;
	FlushSpanErrors(Eid);
	// Assign Variables (Provide Field Names Here..)
	uname = document.getElementById(Fid).username.value;
	pass = document.getElementById(Fid).password.value;
	// --------------------------------- Main Logic ------------------------------------
	r1 = empty_check(uname,"You must provide your UserName");
	if(r1){
	r1=length_check(uname,4,30,"Minimum UsesrName length must be 4","UserName too long");}
	r4 = empty_check(pass,"You must provide a Password");
	if(r4){
	r4=length_check(pass,6,100,"Minimum Password length must be 6","Password too long");}
	// --------------------------------- Main Logic ------------------------------------
	ret = (r1 && r4);
	return ret;
}
