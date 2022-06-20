<div>
    Show Tweets
    <hr />
    <form wire:submit.prevent='create' method="post">
        <input type="text" wire:model='content' name="content" id="content">
        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Criar Tweet</button>
        <br />
        <hr />
    </form>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br />
    @endforeach

    <div>
       {{ $tweets->links()}}
    </div>

</div>
