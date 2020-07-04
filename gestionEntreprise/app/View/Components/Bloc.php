<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Bloc extends Component
{
    public $titre;
    public $lignes;
    public $libelle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titre,$lignes,$libelle, $color)
    {
        $this->titre = $titre;
        $this->lignes = $lignes;
        $this->libelle = $libelle;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.bloc',[
            'lignes' => $this->lignes,
            'libelle' =>$this->libelle,
            'color' =>$this->color,
        ]);
    }
}
