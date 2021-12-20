$('#test-form').on('#formLogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());    
    var password = $.trim($("#password").val());    
    if(usuario.length == "" || password == ""){
        Swal.fire({
            type:'warning',
            title:'Debe ingresar un usuario y/o password',
        });
        return false; 
    }else{
        $.ajax({
            url:"ajax/login.php",
            type:"POST",
            datatype: "json",
            data: {usuario:usuario, password:password}, 
            success:function(data){ 
                
                var prueba = data.includes('Administrador');
                
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario y/o password incorrecta',
                    });
                }else{
                    if(prueba == true){
                        Swal.fire({
                            type:'success',
                            title:'¡Conexión exitosa!',
                            confirmButtonColor:'#3085d6',
                            confirmButtonText:'Ingresar'
                        }).then((result) => {
                            if(result.value){
                                //window.location.href = "vistas/pag_inicio.php";
                                window.location.href = "usuariosAd.php";
                            }
                        })
                    }else{
                        Swal.fire({
                            type:'success',
                            title:'¡Conexión exitosa!',
                            confirmButtonColor:'#3085d6',
                            confirmButtonText:'Ingresar'
                        }).then((result) => {
                            if(result.value){
                                //window.location.href = "vistas/pag_inicio.php";
                                window.location.href = "visualizarCe.php";
                            }
                        })
                    }
                    
                }
            }    
        });
    }     
});
