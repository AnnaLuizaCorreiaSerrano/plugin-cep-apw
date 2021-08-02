<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>


 <script type="text/javascript">
 $(document).on('click', '#buscar', function(){
 var cep = $("#cep").val();

 $.ajax({
 type: "get",
 url: "https://viacep.com.br/ws/"+cep+"/json/",
 success: function(data){
 var conteudo = '';
 conteudo+= "<p>Estado: " +data.uf+ "</p>";
 conteudo+= "<p>Cidade: " +data.localidade+ "</p>";
 conteudo+= "<p>Bairro: " +data.bairro+ "</p>";
 conteudo+= "<p>Rua: " +data.logradouro+ "</p>";
 conteudo+= "<p>DDD: " +data.ddd+ "</p>";

 $('#dados').append(conteudo);
 }

 });
 });

 </script>


<div class="row">
<div class="col-6">
<div class="form-group">
<label for="">CEP:</label>
<input type="text" class="form-control" id="cep">
</div>
</div>
</div>

<div class="row">
<div class="col-6">
<div class="form-group">
<button id="buscar" class="btn btn-secondary btn-block">Buscar</button>
</div>
</div>
</div>

<div class="row">
<div class="col-6">
<div id="dados"></div>
</div>
</div>