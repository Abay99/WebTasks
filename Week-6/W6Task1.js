var bs = document.querySelectorAll('button');
for(var i=0; i<bs.length; i++){
	bs[i].onclick = function(s){
		let click = s.currentTarget;
		let result = click.parentNode.setAttribute('data-status', 'done');
	}
}