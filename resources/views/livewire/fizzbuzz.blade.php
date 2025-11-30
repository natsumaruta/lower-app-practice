<?php

use function Livewire\Volt\{state};

state([
    'count' => 0,
    'FizzBuzz',
    'Buzz',
    'Fizz',
    'text',
]);

$increment = function () {
    $this->count++;
    if ($this->count % 15 === 0) {
        $this->text = 'FizzBuzz';
    } elseif ($this->count % 3 === 0) {
        $this->text = 'Fizz';
    } elseif ($this->count % 5 === 0) {
        $this->text = 'Buzz';
    } else {
        $this->text = $this->count;
    }
};
?>

<div>
    <h1>FizzBuzz</h1>
    <div>Count : {{ $text }}</div>
    <button wire:click="increment">+</button>

</div>
