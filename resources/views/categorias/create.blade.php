<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>
    <style>
        /* Estilos Gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Formulário */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
            color: #4a90e2;
            text-align: center;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4a90e2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #357ab8;
        }

        /* Foco nos Campos */
        input[type="text"]:focus,
        textarea:focus {
            border-color: #4a90e2;
            outline: none;
            box-shadow: 0 0 4px rgba(74, 144, 226, 0.3);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastrar Categoria</h2>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows="4"></textarea>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
