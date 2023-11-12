<x-forms.field>
    <x-forms.label name="{{ $name }}" label="{{$label}}" />

    
    


    <select id="type" name="{{$name}}" class=" border border-gray-300 text-grey-900 text-sm  focus:ring-black focus:border-black block w-full xl:w-3/4 p-2.5 mx-auto rounded-md">
     {{$slot}}
    </select>

    <x-forms.error name='{{ $name }}' />
</x-forms.field>
