<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Livro;


class UpdateLivroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => ['required','unique:livros,isbn,' . $this->livro->id],
            'tipo' => ['required', Rule::in(Livro::tipos())],
            'preco' => 'nullable'
        ];
    }

    public function messages()
    {
        return[
            'titulo.required'=> 'Insira um título.',
            'autor.required'=> 'Insira um autor.',
            'isbn.required'=> 'Insira um isbn.',
            'isbn.unique' => 'Isbn já cadastrado.',
            'tipo.required' => 'Escolha um tipo.'
        ];
    }
}
