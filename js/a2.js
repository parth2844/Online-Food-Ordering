
	function validateForm() {}
    var x = document.forms(["user_details"]["password"]).value;
     var patt1 = /\W/g;
     var result = x.match(patt1);
     var n=result.length;
     if(n>0)
     {
     	alert("invalid data");
        return false;
    }
}
