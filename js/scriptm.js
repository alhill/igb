$(document).ready(function(){
    
    var izq = $("#flechaizda");
	var dch = $("#flechadcha");
	var pos = 0;
    
    function Izquierda(){
		anchura = $(".lif").width();
		if (pos == 0)
		{
			pos = -3*anchura;
		}
		else
		{
			pos += anchura;
		}
		$("#fotos").animate({left: pos},1000);
	};
    
    function Derecha(){
		anchura = $(".lif").width();
		if (pos == -3*anchura)
		{
			pos = 0;
		}
		else
		{
			pos -= anchura;
		}
		$("#fotos").animate({left: pos},1000);
	};	
    
    izq.click(function(){
		Izquierda();
	});
    
	dch.click(function(){
		Derecha();
	});
});
    