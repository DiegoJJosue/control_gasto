
	const validar=()=>{
		const usu_nombre=document.querySelector("#usu_nombre");
		if(usu_nombre.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}

		const usu_apellido=document.querySelector("#usu_apellido");
		if(usu_apellido.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}		


		const usu_direccion=document.querySelector("#usu_direccion");
		if(usu_direccion.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}


		const usu_telefono=document.querySelector("#usu_telefono");
		if(usu_telefono.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}


			const usu_cedula=document.querySelector("#usu_cedula");
		if(usu_cedula.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}

		const email=document.querySelector("#email");
		if(email.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}



		const password=document.querySelector("#password");
		if(password.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}


	}
