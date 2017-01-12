function Correito()
{
	$(document).ready(function(){
			if (document.olvido.emailrec.value.length != 0)
			{
				$("#olvidomodal").modal('toggle'); 
				$("#yaesta").modal();
			}
			
	});
}

$(document).ready(function(){
    
    //INICIO SLIDER
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
    
	setInterval(Derecha,10000);
    //FIN SLIDER
    
	
    $("#botonalta").click(function(){   
        $(".lista").hide();
        $(".modif").hide();
        $(".borrar").hide();
        $(".alta").slideDown();
    });
    $("#botonlista").click(function(){
        $(".alta").hide();
        $(".modif").hide();
        $(".borrar").hide();
        $(".lista").slideDown();
    });
    $("#botonmodif").click(function(){
        $(".lista").hide();
        $(".alta").hide();
        $(".borrar").hide();
        $(".modif").slideDown();
    });
    $("#botonborrar").click(function(){
        $(".lista").hide();
        $(".modif").hide();
        $(".alta").hide();
        $(".borrar").slideDown();
    });
    

	
	$("nav .elemnav").hover(
		function()
		{
			$(this).find(".mierditoculto").css("visibility","visible");
		},
		function()
		{
			$(this).find(".mierditoculto").css("visibility","hidden");
		}
	);
		
	$('.mismaltura').matchHeight();
		
	$(window).on('resize', function(){
		$('.mismaltura').matchHeight();
		
	});
	
	var eventos = {
		"2016/12/1" : "Concierto 01",
		"2016/12/5" : "Concierto 02",
		"2016/12/10" : "Concierto 03",
		"2016/12/20" : "Concierto 04",
		"2017/1/2" : "Concierto 05",
		"2017/1/4" : "Concierto 06",
		"2017/1/14" : "Concierto 07",
		"2017/1/31" : "Concierto 08",
		"2017/2/5" : "Concierto 09",
		"2017/2/11" : "Concierto 10",
		"2017/2/18" : "Concierto 11",
		"2017/2/23" : "Concierto 12",
		"2017/3/1" : "Concierto 13",
		"2017/3/10" : "Concierto 14",
		"2017/3/14" : "Concierto 15",
		"2017/3/23" : "Concierto 16",
		"2017/4/2" : "Concierto 17",
		"2017/4/9" : "Concierto 18",
		"2017/4/13" : "Concierto 19",
		"2017/4/24" : "Concierto 20",
		"2017/5/2" : "Concierto 21",
		"2017/5/7" : "Concierto 22",
		"2017/5/8" : "Concierto 23",
		"2017/5/12" : "Concierto 24",
		"2017/5/23" : "Concierto 25",
	}
	
	$("#agenda").datepicker({
		numberOfMonths: [ 1, 3 ],
		onSelect: pickDate,
		dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
		monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
		nextText: "Siguiente",
		prevText: "Anterior",
		dateFormat: 'dd/mm/yy',
		beforeShowDay: function(date) 
		{
			var search = date.getFullYear() + '/' + (date.getMonth() + 1) + '/' + date.getDate();
			if (search in eventos) {
				return [true, 'highlight', (eventos[search] || '')];
			}

		  return [false, '', ''];
		}
	});

    function pickDate(d) {
		var ano = d.slice(6, 10);
		var mes = d.slice(3, 5);
		if (mes.substr(0, 1) == "0")
		{
			mes = mes.slice(1,2);
		}
		var dia = d.slice(0, 2);
		if (dia.substr(0, 1) == "0")
		{
			dia = dia.slice(1,2);
		}
		var selector = ano + '/' + mes + '/' + dia;
        if (eventos[selector] == "Concierto 01"){$("#concierto01").modal();};
		if (eventos[selector] == "Concierto 02"){$("#concierto02").modal();};
		if (eventos[selector] == "Concierto 03"){$("#concierto03").modal();};
		if (eventos[selector] == "Concierto 04"){$("#concierto04").modal();};
		if (eventos[selector] == "Concierto 05"){$("#concierto05").modal();};
		if (eventos[selector] == "Concierto 06"){$("#concierto06").modal();};
		if (eventos[selector] == "Concierto 07"){$("#concierto07").modal();};
		if (eventos[selector] == "Concierto 08"){$("#concierto08").modal();};
		if (eventos[selector] == "Concierto 09"){$("#concierto09").modal();};
		if (eventos[selector] == "Concierto 10"){$("#concierto10").modal();};
		if (eventos[selector] == "Concierto 11"){$("#concierto11").modal();};
		if (eventos[selector] == "Concierto 12"){$("#concierto12").modal();};
		if (eventos[selector] == "Concierto 13"){$("#concierto13").modal();};
		if (eventos[selector] == "Concierto 14"){$("#concierto14").modal();};
		if (eventos[selector] == "Concierto 15"){$("#concierto15").modal();};
		if (eventos[selector] == "Concierto 16"){$("#concierto16").modal();};
		if (eventos[selector] == "Concierto 17"){$("#concierto17").modal();};
		if (eventos[selector] == "Concierto 18"){$("#concierto18").modal();};
		if (eventos[selector] == "Concierto 29"){$("#concierto19").modal();};
		if (eventos[selector] == "Concierto 20"){$("#concierto20").modal();};
		if (eventos[selector] == "Concierto 21"){$("#concierto21").modal();};
		if (eventos[selector] == "Concierto 22"){$("#concierto22").modal();};
		if (eventos[selector] == "Concierto 23"){$("#concierto23").modal();};
		if (eventos[selector] == "Concierto 24"){$("#concierto24").modal();};
		if (eventos[selector] == "Concierto 25"){$("#concierto25").modal();};
    }
	
	$(".conciertomodal").click(function(){
		if ( $(this).hasClass("c01") ){$("#concierto01").modal();};
		if ( $(this).hasClass("c02") ){$("#concierto02").modal();};
		if ( $(this).hasClass("c03") ){$("#concierto03").modal();};
		if ( $(this).hasClass("c04") ){$("#concierto04").modal();};
		if ( $(this).hasClass("c05") ){$("#concierto05").modal();};
		if ( $(this).hasClass("c06") ){$("#concierto06").modal();};
		if ( $(this).hasClass("c07") ){$("#concierto07").modal();};
		if ( $(this).hasClass("c08") ){$("#concierto08").modal();};
		if ( $(this).hasClass("c09") ){$("#concierto09").modal();};
		if ( $(this).hasClass("c10") ){$("#concierto10").modal();};
		if ( $(this).hasClass("c11") ){$("#concierto11").modal();};
		if ( $(this).hasClass("c12") ){$("#concierto12").modal();};
		if ( $(this).hasClass("c13") ){$("#concierto13").modal();};
		if ( $(this).hasClass("c14") ){$("#concierto14").modal();};
		if ( $(this).hasClass("c15") ){$("#concierto15").modal();};
		if ( $(this).hasClass("c16") ){$("#concierto16").modal();};
		if ( $(this).hasClass("c17") ){$("#concierto17").modal();};
		if ( $(this).hasClass("c18") ){$("#concierto18").modal();};
		if ( $(this).hasClass("c19") ){$("#concierto19").modal();};
		if ( $(this).hasClass("c20") ){$("#concierto20").modal();};
		if ( $(this).hasClass("c21") ){$("#concierto21").modal();};
		if ( $(this).hasClass("c22") ){$("#concierto22").modal();};
		if ( $(this).hasClass("c23") ){$("#concierto23").modal();};
		if ( $(this).hasClass("c24") ){$("#concierto24").modal();};
		if ( $(this).hasClass("c25") ){$("#concierto25").modal();};
	});
	
	$(".lanzamodal").click(function(){
		$("#loginmodal").modal();
	});
	$(".lanzamodal2").click(function(){
		$("#loginmodal").modal('toggle'); 
		$("#olvidomodal").modal();
	});
	$(".lanzamodal3").click(function(){
		$("#olvidomodal").modal('toggle'); 
		$("#yaesta").modal();
	});
	$(".cierramodal").click(function(){
		$("#yaesta").modal('toggle'); 
	});
	
	$("#cuquis").fadeIn(400);
	$("#cuquiclose").click(function(){
		$("#cuquis").fadeOut(400);
	});
	
	$("#calendario").datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd"
    });
	
	
	vecespinchadomas = 0
	$("#mas").click(function(){
		if (vecespinchadomas == 0){$("#mas0").slideDown();}
		/*if (vecespinchadomas == 1){$("#mas1").slideDown();}
		if (vecespinchadomas == 2){$("#mas2").slideDown();}*/
		if (vecespinchadomas > 0){
			$("#nohaymas").fadeIn()
			setTimeout(function(){ $("#nohaymas").fadeOut(); },1000);	
		}
		vecespinchadomas++;
	});
    
});

