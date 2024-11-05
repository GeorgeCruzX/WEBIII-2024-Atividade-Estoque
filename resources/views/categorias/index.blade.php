<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
        /* Estilos Gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
            margin: 0;
            line-height: 1.6;
        }

        /* Título */
        h2 {
            color: #4a90e2;
            font-size: 24px;
            margin-bottom: 20px;
            border-bottom: 2px solid #4a90e2;
            padding-bottom: 5px;
        }

        /* Seção de Filtro */
        .filter-section {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .filter-label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #555;
        }

        .filter-input {
            padding: 8px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #4a90e2;
            color: #fff;
            font-weight: bold;
            border-bottom: 2px solid #ddd;
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        /* Hover e Foco */
        .client-row:hover {
            background-color: #e6f7ff;
        }

        .filter-input:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 4px rgba(74, 144, 226, 0.5);
        }
    </style>
</head>
<body>
    <h2>Clientes</h2>

    <div class="filter-section">
        <div class="filter-label">Digite um nome para filtrar:</div>
        <input type="text" id="searchInput" class="filter-input" placeholder="Buscar por nomes...">
    </div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <tr class="client-row" data-name="Maria Silva" data-phone="(11) 98765-4321" data-cpf="123.456.789-00">
                <td>Maria Silva</td>
                <td>(11) 98765-4321</td>
                <td>123.456.789-00</td>
            </tr>
            <tr class="client-row" data-name="João Oliveira" data-phone="(21) 91234-5678" data-cpf="234.567.890-11">
                <td>João Oliveira</td>
                <td>(21) 91234-5678</td>
                <td>234.567.890-11</td>
            </tr>
            <tr class="client-row" data-name="Ana Costa" data-phone="(21) 98875-5432" data-cpf="345.678.901-22">
                <td>Ana Costa</td>
                <td>(21) 98875-5432</td>
                <td>345.678.901-22</td>
            </tr>
            <tr class="client-row" data-name="Carlos Pereira" data-phone="(41) 98543-2109" data-cpf="458.789.012-33">
                <td>Carlos Pereira</td>
                <td>(41) 98543-2109</td>
                <td>458.789.012-33</td>
            </tr>
            <tr class="client-row" data-name="Lucia Mendes" data-phone="(51) 95432-1987" data-cpf="567.890.123-44">
                <td>Lucia Mendes</td>
                <td>(51) 95432-1987</td>
                <td>567.890.123-44</td>
            </tr>
        </tbody>
    </table>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');

            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                const rows = document.getElementsByClassName('client-row');

                Array.from(rows).forEach(row => {
                    const name = row.dataset.name.toLowerCase();
                    const phone = row.dataset.phone.toLowerCase();
                    const cpf = row.dataset.cpf.toLowerCase();

                    const matches = name.includes(searchTerm) ||
                                    phone.includes(searchTerm) ||
                                    cpf.includes(searchTerm);

                    row.style.display = matches ? '' : 'none';
                });
            }

            searchInput.addEventListener('input', filterTable);
        });
    </script>
</body>
</html>
