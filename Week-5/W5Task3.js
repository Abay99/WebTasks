
	function addToList(){ 
        var table = document.getElementById("students"); 
        var rowCount = table.rows.length; 
        var row = table.insertRow(rowCount); 
        var _name = document.getElementById("name"); 
        var _surname = document.getElementById("surname"); 
        var _faculty = document.getElementById("faculty"); 
        if(check(_name.value, _surname.value, _faculty.value)==true){
            var cell1 = row.insertCell(0); 
            var cell2 = row.insertCell(1); 
            var cell3 = row.insertCell(2); 
            cell1.innerHTML=_name.value; 
            cell2.innerHTML=_surname.value; 
            cell3.innerHTML=_faculty.value; 
        } 
} 
function check(a, b, c){
    if(a==""){
        document.getElementById("name").classList.add('error'); 
    } 
    if(a!=""){
        document.getElementById("name").classList.remove('error'); 
    } 
    if(b==""){ 
        document.getElementById("surname").classList.add('error'); 
    } 
    if(b!=""){ 
        document.getElementById("surname").classList.remove('error'); 
    } 
    if(a=="" || b=="" || c=="-1")
        return false; 
    else{
        document.getElementById("name").classList.remove('error'); 
        document.getElementById("surname").classList.remove('error'); 
        return true; 
    } 

}	 
document.getElementById("addStudent").addEventListener('click',addToList);