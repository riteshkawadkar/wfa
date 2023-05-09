<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CompanyInputField extends Component
{
  /**
   * The input label text.
   *
   * @var string
   */
  public $label;

  /**
   * The input name attribute.
   *
   * @var string
   */
  public $name;

  /**
   * The input value.
   *
   * @var string
   */
  public $value;

  /**
   * Indicates whether the input is required or not.
   *
   * @var bool
   */
  public $required;

  /**
   * Create a new component instance.
   *
   * @param  string  $label
   * @param  string  $name
   * @param  string  $value
   * @param  bool  $required
   * @return void
   */
  public function __construct($label, $name, $value = '', $required = false)
  {
    $this->label = $label;
    $this->name = $name;
    $this->value = $value;
    $this->required = $required;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.company-input-field');
  }
}
