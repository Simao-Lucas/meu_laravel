<li>Título: <input type="text" name="titulo" value="{{old('titulo',$livro->titulo)}}"></li>
<li>Autor: <input type="text" name="autor" value="{{old('autor',$livro->autor)}}"></li>
<li>Isbn: <input type="text" class="isbn" name="isbn" value="{{old('isbn',$livro->isbn)}}"></li>

<button type="submit"> Enviar </button>