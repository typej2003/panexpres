<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<div>
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card mx-auto my-3" style="width: 350px; height: 150px;">
                <div class="card-body text-center">
                    <button wire:click.prevent="login" class="btn btn-primary btnLogin mx-auto"> Entrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    window.onload = function() {
        let btnLogin = document.querySelector('.btnLogin')
        
        btnLogin.addEventListener('click', ()=> {
            //fetch('http://127.0.0.1:8000/api/accesoMikrotik')
            fetch('https://panexpres.com/api/accesoMikrotik')
            .then(response => response.json())
            //.then(data => console.log(data))
            .then(data => {   

                if (data.success == true) {
                    console.log(data.valor)
                }
                else {
                    console.log(data)
                }
            })
            .catch(error => {
                console.error('Error:', error)
                btnEnviarPagomovil.disabled = false;
            });
        })
    }
</script>
</html>