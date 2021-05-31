    {{-- Be like water. --}}
    <ul class="navbar-nav float-start me-auto">
        <!-- ============================================================== -->
        <!-- Search -->
        <!-- ============================================================== -->
      
        <div >
           
    
                <input type="text" wire:model="search" class="form-control" placeholder="Search..." style="width: 100%">
           
        </div>
       
        <div class="row">
            @if ($search !=='')
            <i style="color: red">{{ 'Typing...' }}</i>
            @foreach ($users as $user)
            <div class="form-control" class="col-md-12">{{ $user->name }}</div> 
            @endforeach
            @endif
        </div>
    </ul>

