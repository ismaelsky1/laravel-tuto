<div>
    Show Tweets
    <hr />
    <form wire:submit.prevent='create' method="post">
        <input type="text" wire:model='message'>
        <button type="submit">Criar Tweet</button>
<br /><br />
    </form>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br />
    @endforeach

</div>
