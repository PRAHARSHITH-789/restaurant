<html>
<head>
    <style>
        body {
            background-color: lightgray;
    font-size:200px;
        }
        button {
            background-color: green;
            display: inline-block;
            margin-right: 20px;
            margin-bottom: 1px;
            width: 200px;
            height: 100px;
            font-size:50px;
            
        }
        button:hover {
            border-color: yellow;
        }
    </style>
</head>
<body>
    <button onclick="details(1)">1</button>
    <button onclick="details(2)">2</button>
    <button onclick="details(3)">3</button>
    <button onclick="details(4)">4</button>
    <button onclick="details(5)">5</button>
    <button onclick="details(6)">6</button>
    <button onclick="details(7)">7</button>
    <button onclick="details(8)">8</button>
    <button onclick="details(9)">9</button>
    <button onclick="details(10)">10</button>

    <div id="response"></div>

    <script>
        function details(x) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "test4.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    var responseDiv = document.getElementById("response");
                    responseDiv.innerHTML = "";

                    if (response.error) {
                        responseDiv.innerText = response.error;
                    } else {
                        var table = document.createElement("table");
                        table.border = "2";
                        var headerRow = document.createElement("tr");

                        var headers = ["Name", "Table No", "Number"];
                        headers.forEach(function(headerText) {
                            var header = document.createElement("th");
                            header.innerText = headerText;
                            headerRow.appendChild(header);
                        });
                        table.appendChild(headerRow);

                        response.forEach(function(row) {
                            var tr = document.createElement("tr");

                            var tdName = document.createElement("td");
                            tdName.innerText = row.name;
                            tr.appendChild(tdName);

                            var tdTable = document.createElement("td");
                            tdTable.innerText = row.tablei;
                            tr.appendChild(tdTable);

                            var tdNumber = document.createElement("td");
                            tdNumber.innerText = row.number;
                            tr.appendChild(tdNumber);

                            table.appendChild(tr);
                        });

                        responseDiv.appendChild(table);
                    }
                }
            };

            xhr.send("tabei=" + x);
        }
    </script>
</body>
<button>
<a href="mainpage.php" style="text-decoration:none; color:white;" >Home</a>
</button>
</html>
