<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="">
            <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                    style="left: 50%"
                    width="150"

                >

        </div>
        <div class="flex justify-between items-center my-4">
            <div>
                <h2 class="font-bold text-2xl mb-0 ">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
            @can('edit', $user)
                           <a
                           href="{{$user->path('edit')}}"
                type="submit"
                class="rounded-full shadow py-2 px-2 text-black text-xs"
              >
                  Edit profile
              </a>
            @endcan
              <x-follow-button :user="$user">
              </x-follow-button>

            </div>
        </div>
        <p class="text-sm">
        Curabitur metus ante, egestas sit amet quam tempus, iaculis pharetra ante. Sed quis rutrum dui. Mauris felis erat, maximus ut sodales et, maximus id lectus. Praesent varius ligula sit amet erat efficitur dictum. Donec pulvinar tellus at purus laoreet eleifend. Vestibulum feugiat sapien eu elit ultrices, eget accumsan velit volutpat.
        </p>
    </header>

    @include ('_timeline', ['tweets' => $user->tweets])
</x-app>
