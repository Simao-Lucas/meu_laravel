<li>Título: <input type="text" name="titulo" value="{{old('titulo',$livro->titulo)}}"></li>
<li>Autor: <input type="text" name="autor" value="{{old('autor',$livro->autor)}}"></li>
<li>Isbn: <input type="text" class="isbn" name="isbn" value="{{old('isbn',$livro->isbn)}}"></li>
<li>
Selecione uma opção:
<select name = "tipo">
    <option value="" selected=""> Selecione </option>
    @foreach($livro::tipos() as $tipo)
    @if (old('tipo') == '')
        <option value="{{$tipo}}"  {{$livro->tipo == $tipo ? 'selected':''}}>{{$tipo}}</option>
    @else
        <option value="{{$tipo}}"  {{old('tipo') == $tipo ? 'selected':''}}>{{$tipo}}</option> 
    @endif   
    @endforeach
</select>
</li>
<li>Preço: <input type="text" name="preco" value="{{old('preco',$livro->preco)}}"></li>
<br>
<button type="submit"> Enviar </button>