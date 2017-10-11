function Matrix(){
	const r1 = document.querySelector("#r1");
	const r2 = document.querySelector("#r2");
	const r3 = document.querySelector("#r3");
	const r4 = document.querySelector("#r4");
	const r5 = document.querySelector("#r5");
	const r6 = document.querySelector("#r6");
	const r7 = document.querySelector("#r7");
	const r8 = document.querySelector("#r8");
	const r9 = document.querySelector("#r9");
	const r10 = document.querySelector("#r10");
	
	let result =  (parseInt(r1.value)*parseInt(r5.value)*parseInt(r9.value))+(parseInt(r2.value)*parseInt(r6.value)*parseInt(r7.value))+(parseInt(r3.value)*parseInt(r4.value)*parseInt(r8.value))-(parseInt(r7.value)*parseInt(r5.value)*parseInt(r3.value))-(parseInt(r1.value)*parseInt(r6.value)*parseInt(r8.value))-(parseInt(r2.value)*parseInt(r4.value)*parseInt(r9.value))

	r10.value = result;
}

document.querySelector("#rb").addEventListener('click', Matrix);