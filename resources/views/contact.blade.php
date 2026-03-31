<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
    
    <form action="/contact" method="POST" class="max-w-lg">
        @csrf
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium mb-2">Name</label>
            <input type="text" id="name" name="name" required class="w-full border rounded px-3 py-2">
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" required class="w-full border rounded px-3 py-2">
        </div>
        
        <div class="mb-4">
            <label for="message" class="block text-sm font-medium mb-2">Message</label>
            <textarea id="message" name="message" rows="5" required class="w-full border rounded px-3 py-2"></textarea>
        </div>
        
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Send</button>
    </form>
</div>