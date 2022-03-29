
	const validar=()=>{
		const cat_nombre=document.querySelector("#cat_nombre");
		if(cat_nombre.value.length==0){	
			//alert('Debe llenar el campo');
			
			Swal.fire({
 				 icon: 'error',
 				 title: 'Error',
 				 text: 'Debe llenar el campo',
})
			return false;

		}

	}
