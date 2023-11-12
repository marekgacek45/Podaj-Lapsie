<x-forms.field>
    <x-forms.label name="{{ $name }}" label="{{$label}}" />

    
    
  

    <textarea name="{{ $name }}" id="{{ $name }}" rows="2"  class="block p-2.5 w-full text-sm text-gray-900  rounded-md border border-gray-300 focus:ring-black focus:black  min-h-[200px]" placeholder="W czym mogę Ci pomóc?" required>{{old($name)}}</textarea>
    

    <x-forms.error name='{{ $name }}' />
</x-forms.field>