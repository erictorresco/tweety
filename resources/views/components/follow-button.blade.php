@unless(current_user()->is($user))

<form action="/profiles/{{ $user->name }}/follow" method="post">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white text-xs"
    >
        {{ current_user()->following($user) ? 'Unfollow me' : 'Follow me'}}
    </button>
</form>
@endunless
