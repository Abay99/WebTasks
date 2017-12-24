/*let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

let cntr = document.querySelector("#countries");
let ct = document.querySelector("#cities");

for(let i = 0; i < countries.length; i++) {
			let n = document.createElement("option");
			n.append(countries[i]);
			cntr.append(n);
		}


function add2() {
	while (ct.hasChildNodes()) {
    	ct.removeChild(ct.lastChild);
	}

	var val = cntr.value;

	var cities = cities_by_country[val];
	for(let i = 0; i < cities.length; i++) {
		let n = document.createElement("option");
		n.innerHTML = cities[i];
		ct.add(n);
	}
}

cntr.addEventListener("click", add2);*/


let countries = ["Kazakhstan","Russia","England","France"]; 
let cities_by_country = { 
	"Kazakhstan":["Uralsk","Atyrau","Aktobe","Aktau"], 
	"Russia":["Moscow","Saint-Petersburg","Kazan"], 
	"England":["London","Manchester","Liverpool"], 
	"France":["Paris","Lyon","Marseille"] 
}; 
let first = document.querySelector("#countries"); 
for(var i=0;i<countries.length;i++){ 
	var option_i = document.createElement('option'); 
	option_i.innerHTML = String(countries[i]); 
	first.appendChild(option_i); 
}; 

document.querySelector("#countries").onchange = function(){ 
	var val = document.getElementById('countries').value; 
	document.querySelector("#cities").options.length = 1; 
	for(var i=0;i<cities_by_country[String(val)].length;i++){ 
			var city = document.createElement('option'); 
			city.innerHTML=String(cities_by_country[String(val)][i]); 
			cities.appendChild(city); 
	}; 
};

