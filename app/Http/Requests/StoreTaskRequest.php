<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'status' => 'required|in:open,in_progress,closed',
            'priority' => 'required|in:low,medium,high',
            'due_date' => 'required|date'
        ];
        
    }

    public function message(): array
    {
        return [
            'title.required' => 'El titulo de la tarea es obligatorio',
            'status.required' => 'El estado de la tarea es obligatorio',
            'priority.required' => 'La prioridad de la tarea es obligatoria',
            'due_date.required' => 'La fecha de la tarea es obligatoria'
        ];
    }
}
