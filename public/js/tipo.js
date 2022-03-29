
	const validar=()=>{
		const tip_nombre=document.querySelector("#tip_nombre");
		if(tip_nombre.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}

	}
