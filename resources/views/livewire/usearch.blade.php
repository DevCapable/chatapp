{{-- Be like water. --}}
<ul>
    <!-- ============================================================== -->
    <!-- Search -->
    <!-- ============================================================== -->
    <div class="ms-auto">
        <div class="dl">
            
            <input type="text"  wire:model="Usearch" class="form-control" placeholder="Locate any name here..." style="width: 100%">
            
        </div>
    </div>

    <!-- title -->
    </div>
    <div class="table-responsive">
        <table class="table v-middle">
            <thead>
                <tr class="bg-light">
                    <th class="border-top-0">Users</th>
                    <th class="border-top-0">Username</th>
                    <th class="border-top-0">Email</th>
                    <th class="border-top-0">Activity</th>
                    <th class="border-top-0">Last Seen</th>
                    <th class="border-top-0">Address</th>
                    <th class="border-top-0">Gender</th>
                    <th class="border-top-0">phone</th>
                </tr>
            </thead>
            @if ($Usearch !=='')
            @foreach ($users2 as $user )
            <tbody>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="m-r-10"><a class="btn btn-circle d-flex btn-info text-white">
                                <img src="{{ $user->profile_photo_url   }}" alt="" style="width: 100%; border-radius: 100px;"></a>
                            </div>
                            <div class="">
                                <h4 class="m-b-0 font-16">{{ $user ->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                       
                            @if(Cache::has('is_online' . $user->id))
                                <span class="text-success">Online</span>
                            @else
                                <span class="text-secondary">Offline</span>
                            @endif
                        
                        </td>
                        <td>{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</td>
                   
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>
                        <h5 class="m-b-0">{{ $user->phone }}</h5>
                    </td>
                </tr>



            </tbody>
            @endforeach
            @else
            @foreach ($users2 as $user )
            <tbody>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="m-r-10"><a class="btn btn-circle d-flex btn-info text-white">
                                <img src="{{ $user->profile_photo_url   }}" alt=""></a>
                            </div>
                            <div class="">
                                <h4 class="m-b-0 font-16">{{ $user ->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                       
                            @if(Cache::has('is_online' . $user->id))
                                <span class="text-success">Online</span>
                            @else
                                <span class="text-secondary">Offline</span>
                            @endif
                       
                    </td>
                        <td>{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</td>
                  
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>
                        <h5 class="m-b-0">{{ $user->phone }}</h5>
                    </td>
                </tr>



            </tbody>
            @endforeach
            @endif
        </table>
    </div>
</ul>