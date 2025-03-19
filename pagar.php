<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos de Pago - Atheria System</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
    <div class="titulo">
    <font size="6">
    <b><i>
    <h1 style="color:rgb(208, 247, 202)">                            Pagos                     </h1> <br>
   ___________________________________________________________________ </font>
    <br>
    <h2>Selecciona tu metodo de pago</h2>
        </i>
        </div>


       <form action="carrito.php" method="get">
    <button type="submit">Regresar</button>

    
</form>

    <div class="login.container">

   
        <form action="procesar_pago.php" method="POST">
            <!-- Opción de Tarjeta de Crédito/Débito -->
            <div class="metodo">
                <input type="radio" id="tarjeta" name="metodo_pago" value="tarjeta" required>
                <label for="tarjeta">Tarjeta de Crédito/Débito</label>
                <div id="tarjeta-info" class="info oculto">
                    <input type="text" name="nombre_tarjeta" placeholder="Nombre en la tarjeta" required>
                    <input type="text" name="numero_tarjeta" placeholder="Número de tarjeta" required>
                    <input type="text" name="expiracion" placeholder="MM/AA" required>
                    <input type="text" name="cvv" placeholder="CVV" required>
                </div>
            </div>

            <!-- Opción de PayPal -->
            <div class="metodo">
                <input type="radio" id="tarjeta" name="metodo_pago" value="tarjeta" required>
                <label for="tarjeta">Pay-pal</label>
                <div id="tarjeta-info" class="info oculto">
                    <input type="text" name="nombre_tarjeta" placeholder="Nombre en la tarjeta" required>
                    <input type="text" name="numero_tarjeta" placeholder="Número de tarjeta" required>
                    <input type="text" name="expiracion" placeholder="MM/AA" required>
                    <input type="text" name="cvv" placeholder="CVV" required>
                </div>
            </div>

            <!-- Opción de Transferencia Bancaria -->


            
            <div class="metodo">
            <input type="radio" id="transferencia" name="metodo_pago" value="transferencia" onclick="mostrarInfo(true)">
            <label for="transferencia">Transferencia Bancaria</label>
        </div>

        <!-- Información de la cuenta bancaria (se oculta hasta que se selecciona) -->
        <div id="infoCuenta">
            <p><strong>Número de Cuenta:</strong> 1234-5678-9101-1121</p>
            <p><strong>Banco:</strong> Bancomer.</p>
        </div>



            <button type="submit">Pagar</button>
            

       

        </form>
    </div>
    </div>

    <script>
        // Mostrar información de tarjeta si es seleccionada
        document.querySelectorAll('input[name="metodo_pago"]').forEach((input) => {
            input.addEventListener('change', function () {
                const tarjetaInfo = document.getElementById('tarjeta-info');
                if (this.value === 'tarjeta') {
                    tarjetaInfo.classList.remove('oculto');
                } else {
                    tarjetaInfo.classList.add('oculto');
                }
            });
        });

        function mostrarInfo(mostrar) {
        var infoCuenta = document.getElementById("infoCuenta");
        if (mostrar) {
            infoCuenta.style.display = "block";
        } else {
            infoCuenta.style.display = "none";
        }
    }


        
    </script>
     



</body>
</html>