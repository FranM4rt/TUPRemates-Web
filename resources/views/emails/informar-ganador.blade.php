<x-mail::message>
# Ganaste el {{-- $producto->titulo --}}!

Eres el ganador del producto {{-- $producto->titulo --}} en la subasta {{-- $producto->subasta->nombre ?? ' ' --}}.

Ponte en contacto con el vendedor para coordinar la entrega del producto y el pago.
Vendedor: {{-- $producto->user->nombre . " " . $producto->user->apellido --}}
Email: {{-- $producto->user->email --}}
Teléfono: {{-- $producto->user->phone --}}

<x-mail::button :url="''">
Ir a la subasta
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
