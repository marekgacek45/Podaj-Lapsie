<x-layouts.admin>
    <main >
        <div >
            <h2 class="text-center uppercase font-bold text-2xl mb-8">Stwórz Nowy Post</h2>


            <form action="{{ route('admin.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 xl:grid-cols-6 gap-4">

                    <!--LEFT SIDE-->
                    <div class="xl:col-span-4 p-8 bg-primaryColor rounded-md w-full">
                        <x-form.input name="title" namePl="Tytuł Posta" class=" w-full xl:w-3/4"
                            placeholder="Wprowadź tytuł" />
                       

                            <textarea name="content" id="editor" class="text-black">{{old('content')}}</textarea>

                    </div>
                    <!--RIGHT SIDE-->
                    <div class="xl:col-span-2  p-8 bg-primaryColor rounded-md max-h-[450px]">
                       

                        


                        <x-form.fileInput name="thumbnail" namePl="miniaturka" type="file" />

                        <x-buttons.submit>Dodaj Posta</x-buttons.submit>

                    </div>
                </div>
        </div>

        </form>

        </div>
    </main>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
   
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                ckfinder: {
                    uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}',
                }
            })
            .catch( error => {
                  
            } );
    </script>
  
</x-layouts.admin>