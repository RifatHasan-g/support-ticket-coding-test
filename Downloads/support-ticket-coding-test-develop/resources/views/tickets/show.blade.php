<x-layout>
    <div class="container">
        <h1>Ticket Details</h1>
        <h3>Title: {{ $ticket->title }}</h3>
        <p>Description: {{ $ticket->description }}</p>
        <p>Status: {{ $ticket->status }}</p>

        <h3>Responses</h3>
        @foreach($ticket->responses as $response)
            <div class="card mb-2">
                <div class="card-body">
                    <p>{{ $response->response }}</p>
                    <small>By: {{ $response->user->name }} on {{ $response->created_at }}</small>
                </div>
            </div>
        @endforeach

        @if(Auth::user()->role === 'admin' && $ticket->status === 'open')
            <h3>Add Response</h3>
            <form action="{{ route('tickets.respond', $ticket->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="response" class="form-label">Response</label>
                    <textarea name="response" id="response" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Response</button>
            </form>
        @endif

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>
    </div>
</x-layout>
