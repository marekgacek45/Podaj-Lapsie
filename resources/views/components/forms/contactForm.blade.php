

<form method="post" action="{{route('form.send')}}" id="contactForm">
    @csrf
    
    <div class="grid grid-col-1 xl:grid-cols-2  xl:gap-6">  
        <x-forms.input :name="'name'" :label="'imię'" type='text' placeholder="Imię" required/>
        <x-forms.input :name="'email'" :label="'email'" type='email' placeholder="Email" required/>

    </div>
    <div class="grid grid-col-1 xl:grid-cols-2  xl:gap-6">  
       

            <x-forms.input :name="'phone'" :label="'telefon'" type='text' placeholder="Numer Telefonu"/>
            <x-forms.input :name="'breed'" :label="'rasa Psa'" type='text' placeholder="Rasa Psa"/>
        
        
        </div>
        <div class="flex justify-center" > 

            <x-forms.select :name="'type'" :label="'Wybierz usługę'" class="justify-self-center" required>
                <option disabled selected >Wybierz</option>
                <option>Konsultacje Behawioralne</option>
                <option>Budowanie Więzi i Relacji</option>
                <option>Profesjonalna pomoc w wyborze psa</option>
                <option>Pettsiting</option>
                <option>Inne</option>
            </x-forms.select>
        </div>
        
            <x-forms.textArea :name="'content'" :label="'Napisz Wiadomość'" />
        
   



   
    
    <x-buttons.btnSubmit class=" px-16">Wyślij</x-btnSecondary>
    </form>

   