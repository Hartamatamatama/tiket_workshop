@if (session('success'))
    <div id="toast-success"
         class="fixed top-20 right-20 bg-green-500 text-white px-6 py-4 rounded shadow-lg z-50 transition-opacity duration-500"
         style="opacity: 1;">
         {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast-success');
            if (toast) {
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 500);
            }
        }, 5000);
    </script>
@endif
