function toggleClick(){
    var click = document.getElementById('nav');
    var x = document.getElementById('cancel'); 
    var y = document.getElementById('ul');
	click.style.height = "1000px";
    y.style.marginTop = "50px";
    x.style.display = "block";
    
}
function cancel(){
    var click = document.getElementById('nav');
    var x = document.getElementById('cancel');
    var y = document.getElementById('ul');   
	click.style.height = "0px";
    y.style.marginTop = "-350px";
    x.style.display = "none";
    

}