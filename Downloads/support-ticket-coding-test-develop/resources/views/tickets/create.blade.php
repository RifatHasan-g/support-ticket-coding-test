<!-- resources/views/tickets/create.blade.php -->
<x-layout>
    <div class="container mt-5">
        <h1 class="mb-4">Create New Ticket</h1>
        <form method="POST" action="{{ route('tickets.store') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="priority" class="form-label">Priority</label>
                <select name="priority" class="form-control" id="priority" required>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</x-layout>
