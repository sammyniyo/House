<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our House</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-content">
            <h1>Welcome to Our House</h1>
            <p>Discover the best homes that suit your lifestyle</p>
            <a href="#gallery" class="cta-button">Explore Our Gallery</a>
        </div>
    </header>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <h2>Our Stunning Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300" alt="House Image 1">
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300" alt="House Image 2">
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300" alt="House Image 3">
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300" alt="House Image 4">
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300" alt="House Image 5">
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/400x300" alt="House Image 6">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>

        <div class="contact-info">
            <p><strong>Phone:</strong> +123 456 7890</p>
            <p><strong>Email:</strong> contact@ourhouse.com</p>
        </div>

        <!-- Success/Error Message -->
        @if (session('success'))
            <div class="alert success">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if (session('error'))
            <div class="alert error">
                <p>{{ session('error') }}</p>
            </div>
        @endif

        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    value="{{ old('email') }}" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" placeholder="Your message here..." required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="cta-button">Send Message</button>
        </form>
    </section>


    <footer>
        <p>&copy; 2025 Our House. All rights reserved.</p>
    </footer>
</body>

</html>
