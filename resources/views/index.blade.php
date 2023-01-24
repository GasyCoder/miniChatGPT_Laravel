<!DOCTYPE html>
<html>
    <script src="https://cdn.tailwindcss.com"></script>
<head>
    <title>Chat</title>
</head>

<body>
    <form class="bg-white p-6 rounded-lg" action="{{ route('sendMessage') }}" method="post">
        @csrf
        <textarea class="w-full border border-gray-400 p-2 rounded-lg" 
        id="message" name="message" rows="4" placeholder="Enter your message">
        </textarea>
       <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">
        Send
    </button>
    </form>

<div>
    @if(isset($response))
    <p>{{ $response }}</p>
    @endif
</div>
</body>
</html>