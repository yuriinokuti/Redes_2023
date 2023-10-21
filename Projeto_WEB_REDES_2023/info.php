<!DOCTYPE html>
<html>
<head>
    <title>Informações Dinâmicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .info-container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }
        .info-item {
            margin-bottom: 15px;
        }
    </style>
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
    <div class="info-container">
        <h1>Informações Dinâmicas</h1>
        <div class="info-item" id="ip"></div>
        <div class="info-item" id="data"></div>
        <div class="info-item" id="hora"></div>
    </div>
</body>
</html>
