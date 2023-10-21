<!DOCTYPE html>
<html>
<head>
    <title>Informações Dinâmicas</title>
    <script type="text/javascript">
        function obterInformacoesDinamicas() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var dados = JSON.parse(this.responseText);
                    document.getElementById("ip").innerHTML = "IP: " + dados.ip;
                    document.getElementById("data").innerHTML = "Data: " + dados.data;
                    document.getElementById("hora").innerHTML = "Hora: " + dados.hora;
                
                }
            };
            xmlhttp.open("GET", "dados.php", true);
            xmlhttp.send();
        }

        setInterval(obterInformacoesDinamicas, 1000); 
    </script>
</head>
<body>
    <h1>Informações Dinâmicas</h1>
    <p id="ip"></p>
    <p id="data"></p>
    <p id="hora"></p>
    <!-- Você pode adicionar mais elementos HTML para mostrar outras informações dinâmicas -->
</body>
</html>
