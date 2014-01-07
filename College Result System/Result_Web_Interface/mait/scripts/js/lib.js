// lib.js


/**
This function 'Capitalizes First Letters' of all the words except single letter words.
**/
function CFL(str)
{
	if(str=="" || str==null)
		return str;
	var re = /\s/;
	var words = str.split(re);
	re = /(\S)(\S+)/;
	for (i = words.length - 1; i >= 0; i--)
	{
		if(words[i].length==1)
		continue;
		re.exec(words[i]);
		words[i] = RegExp.$1.toUpperCase() + RegExp.$2.toLowerCase();
	}
	return words.join(' ');
}

/**
This function Returns true if the argument is empty else returns false
**/
function IsEmpty(str)
{
	if(str=="" || str==null)
	return true;
	else
	return false;
}

/**
This function Returns true if the argument is a valid name else it returns false
**/
function IsName(name)
{
	var patt = /[^A-Za-z\s]/;
	if (patt.test(name))
	return false;
	else
	return true;
}

/**
This function Returns true if the argument have any meta character else returns false
**/
function HaveMeta(str)
{
	var patt = /[^A-Za-z\d\s]/;
	if(patt.test(str))
	return true;
	else
	return false;
}

/**
This function Returns true if the argument is a valid Email Address else returns false
**/
function IsEmail(str) 
	{

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1)
		return false;
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
		return false;
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
		return false;
		if (str.indexOf(at,(lat+1))!=-1)
		return false;
		if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
		return false;
		if (str.indexOf(dot,(lat+2))==-1)
		return false;
		if (str.indexOf(" ")!=-1)
		return false;
 		return true;
	}

/**
This function removes the spaces before and after a string
**/	
function Trim(str)
{
	return str.replace(/^\s+|\s+$/g,"");
}
