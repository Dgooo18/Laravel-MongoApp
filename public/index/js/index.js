


// registro
$( "#btn" ).click(function() {

		var name= $('#name').val();
		var	pass=	$('#pass').val();
		var age= 	$('#age').val();
		var token= $('#token').val();
		console.log(name);

	$.ajax({
		url: "http://localhost:8000/test2",
		type: "POST",
		headers: {
          'X-CSRF-Token':token
        },

		dataType:"json",
		data:{
			name: name,
			pass:	pass,
			age: age
			},
		success: function(respuesta) {

			console.log(respuesta.mensaje);
		},
		error: function() {
	    console.log("No se ha podido obtener la información");
	    }
	});


});

// Login

$( "#btnL" ).click(function() {

		var name= $('#name').val();
		var	pass=	$('#pass').val();
		var token= $('#token').val();
		console.log(name);

	$.ajax({
		url: "http://localhost:8000/Login",
		type: "POST",
		headers: {
          'X-CSRF-Token':token
        },

		dataType:"json",
		data:{
			name: name,
			pass:	pass
			},
		success: function(resp) {

			console.log(resp.mensaje);


			if (resp.url!='false') {
				window.location.href=resp.url;

			}

		},
		error: function() {
	    console.log("No se ha podido obtener la información");

	    }
	});


});



// update

$( "#update" ).click(function() {
		var id=		$('#idUsr').val();
		var name= $('#name').val();
		var	pass=	$('#pass').val();
		var age=	$('#age').val();
		var token=$('#token').val();
		console.log(name);

	$.ajax({
		url: "http://localhost:8000/Update",
		type: "POST",
		headers: {
          'X-CSRF-Token':token
        },

		dataType:"json",
		data:{
			id  : id,
			name: name,
			age:  age,
			pass:	pass

			},
		success: function(respuesta) {

			console.log(respuesta.mensaje);

		},
		error: function() {
	    console.log("No se ha podido obtener la información");

	    }
	});


});
