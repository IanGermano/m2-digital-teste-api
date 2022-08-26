<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Documentação</title>
	</head>
	<body>
		<h1>Documentação da api</h1>
		<hr>
		<h2>Função Listar: Método GET</h2>
		<h3>Descrição: Lista todos os registros da tabela com suas dependencias</h3>
		<h3>Exemplo: api/listar/produtos</h3>
		<h4>Se sucesso:</h4>
		<pre id="codigo1" ></pre>
		<h2>Função Listar: Método GET com parâmetro id</h2>
		<h3>Descrição: Lista o registro com o id passado com suas dependencias</h3>
		<h3>Exemplo: api/listar/cidades/1</h3>
		<h4>Se sucesso:</h4>
		<pre id="codigo2" ></pre>
		<h4>Se fracasso:</h4>
		<pre id="codigo21" ></pre>
		<hr>
		<h2>Função Cadastrar: Método POST</h2>
		<h3>Descrição: Cadastra um registro na base de dados</h3>
		<h3>Exemplo: api/cadastrar/produtos</h3>
		<h4>Se sucesso:</h4>
		<pre id="codigo3" ></pre>
		<h4>Se fracasso: retorna json com erros</h4>
		<pre id="codigo31" ></pre>
		<hr>
		<h2>Função Editar: Método PUT</h2>
		<h3>Descrição: Edita um registro na base de dados com id passado</h3>
		<h3>Exemplo: api/editar/produtos/2</h3>
		<h4>Se sucesso:</h4>
		<pre id="codigo4" ></pre>
		<h4>Se fracasso: retorna json com erros</h4>
		<pre id="codigo41" ></pre>
		<hr>
		<h2>Função Excluir: Método DELETE</h2>
		<h3>Descrição: Deleta um registro na base de dados com id passado</h3>
		<h3>Exemplo: api/excluir/produtos/2</h3>
		<h4>Se sucesso:</h4>
		<pre id="codigo5" ></pre>
		<h4>Se fracasso:</h4>
		<pre id="codigo51" ></pre>
		<hr>

	</body>
	  <script>
	    var codigo1 = [{
		        "id": 2,
		        "nome": "cerveja x",
		        "valor": 5.54
		    },
		    {
		        "id": 4,
		        "nome": "teclado",
		        "valor": 25
		    },
		    {
		        "id": 5,
		        "nome": "monitor",
		        "valor": 60
		    }];
	    document.getElementById("codigo1").innerHTML = JSON.stringify(codigo1, null, 4);

	    var codigo2 = [{
				"id": 1,
				"nome": "rio de janeiro",
				"id_grupo": 1,
				"grupo_cidade": {
				"id": 1,
				"nome": "grupo 1",
				"id_campanha": 3
				},
				"campanha": {
				"id": 3,
				"nome": "legal",
				"laravel_through_key": 1
				}
				}];
	    document.getElementById("codigo2").innerHTML = JSON.stringify(codigo2, null, 4);

	    var codigo21 = [{
				"status": "404",
				"success": "false"
			}];
	    document.getElementById("codigo21").innerHTML = JSON.stringify(codigo21, null, 4);

	    var codigo3 = [{
		    	"status": "201",
		    	"success": "true"
		}];
	    document.getElementById("codigo3").innerHTML = JSON.stringify(codigo3, null, 4);

	    var codigo31 = [{
		    "status": 400,
		    "success": false,
		    "message": "errors de validação",
		    "data": {
		        "nome": [
		            "O campo nome é requerido."
		        ],
		        "valor": [
		            "O campo valor é requerido."
		        ]
		    }
		}];
	    document.getElementById("codigo31").innerHTML = JSON.stringify(codigo31, null, 4);

	    var codigo4 = [{
		    	"status": "200",
		    	"success": "true"
		}];
	    document.getElementById("codigo4").innerHTML = JSON.stringify(codigo4, null, 4);

	    var codigo41 = [{
		    "status": 400,
		    "success": false,
		    "message": "errors de validação",
		    "data": {
		        "valor": [
		            "O campo valor deve ser um número."
		        ]
		    }
		}];
	    document.getElementById("codigo41").innerHTML = JSON.stringify(codigo41, null, 4);

	    var codigo5 = [{
		    	"status": "200",
		    	"success": "true"
		}];
	    document.getElementById("codigo5").innerHTML = JSON.stringify(codigo5, null, 4);

	    var codigo51 = [{
		    	"status": "400",
		    	"success": "false"
		}];
	    document.getElementById("codigo51").innerHTML = JSON.stringify(codigo51, null, 4);

	    
	    
	  </script>
</html>