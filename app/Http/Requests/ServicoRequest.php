<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'nome' => ['required', 'min:2', 'max:255'],
            'icone' => [
                'required',
                Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])
            ],
            'posicao' => ['required', 'integer'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer'],
            'porcentagem' => ['required', 'integer'],
            'valor_quarto' => ['required', 'numeric'],
            'horas_quarto' => ['required', 'integer'],
            'valor_sala' => ['required', 'numeric'],
            'horas_sala' => ['required', 'integer'],
            'valor_banheiro' => ['required', 'numeric'],
            'horas_banheiro' => ['required', 'integer'],
            'valor_cozinha' => ['required', 'numeric'],
            'horas_cozinha' => ['required', 'integer'],
            'valor_quintal' => ['required', 'numeric'],
            'horas_quintal' => ['required', 'integer'],
            'valor_outros' => ['required', 'numeric'],
            'horas_outros' => ['required', 'integer'],

        ];
    }

    /**
     * Substitui os valores antes da validação
     *
     * @return void
     */
    public function validationData()
    {
        $dados = $this->all();

        $dados['valor_minimo'] = $this->formataValorMonetario($dados['valor_minimo']);
        $dados['valor_quarto'] = $this->formataValorMonetario($dados['valor_quarto']);
        $dados['valor_sala'] = $this->formataValorMonetario($dados['valor_sala']);
        $dados['valor_banheiro'] = $this->formataValorMonetario($dados['valor_banheiro']);
        $dados['valor_cozinha'] = $this->formataValorMonetario($dados['valor_cozinha']);
        $dados['valor_quintal'] = $this->formataValorMonetario($dados['valor_quintal']);
        $dados['valor_outros'] = $this->formataValorMonetario($dados['valor_outros']);

        $this->replace($dados);

        return $dados;
    }

    /**
     * Formata o valor do padrão brasileiro para o padrão internacional
     *
     * @param string $valor
     * @return void
     */
    protected function formataValorMonetario(string $valor)
    {
        return str_replace(['.', ','], ['', '.'], $valor);
    }
}
