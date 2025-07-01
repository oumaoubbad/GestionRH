 <div wire:ignore.self>
@if($currentPage == PAGECREATEFORM)
         @include("livewire.utilisateurs.create")
    @endif

    @if($currentPage == PAGEEDITFORM)
        @include("livewire.utilisateurs.edit")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.utilisateurs.liste")
    @endif



    @if($currentPage == PAGESHOWUSER)
    @include("livewire.utilisateurs.show")
 @endif


    </div>
    <script>
        window.addEventListener("showSuccessMessage", event=>{
            Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    toast:true,
                    title: event.detail.message || "Opération effectuée avec succès!",
                    showConfirmButton: false,
                    timer: 5000
                    }
                )
        })
    </script>
