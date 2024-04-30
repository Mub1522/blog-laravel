<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

    public $class;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        match ($type) {
            'info' => ($this->class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400'),
            'danger' => ($this->class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400'),
            'success' => ($this->class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400'),
            'warning' => ($this->class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300'),
            default => ($this->class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400'),
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
