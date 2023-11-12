


<x-forms.field>
    <x-forms.label name="{{ $name }}" label="{{$label}}" />

    
    
    <input
    {{$attributes(['class'=>'text-gray-900 text-base rounded-md focus:ring-black focus:border-black block p-2.5 w-full'])}}
    
    name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>



    <x-forms.error name='{{ $name }}' />
</x-forms.field>
