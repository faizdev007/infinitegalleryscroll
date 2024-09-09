<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto my-10">
        <div id="gallery" class="grid grid-cols-3 gap-4">
        <!-- Gallery items will be appended here -->
        </div>
        <div id="loading" class="text-center my-4" style="display: none;">
            Loading...
        </div>
    </div>

    <script>
        let page = 1;
        const gallery = document.getElementById('gallery');
        const loading = document.getElementById('loading');
    
        async function loadMore() {
            try {
                loading.style.display = 'block';
                const response = await fetch(`/gallery/load-more?page=${page}`);
                const data = await response.json();
                data.data.forEach(item => {
                    const div = document.createElement('div');
                    div.classList.add('gallery-item');
                    div.innerHTML = `<img src="${item.image_path}" alt="${item.title}">`;
                    gallery.appendChild(div);
                });
                if (data.next_page_url) {
                    page++;
                } else {
                    window.removeEventListener('scroll', handleScroll);
                }
            } catch (error) {
                console.error('Error loading more items:', error);
            } finally {
                loading.style.display = 'none';
            }
        }
    
        function handleScroll() {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                loadMore();
            }
        }
    
        window.addEventListener('scroll', handleScroll);
        document.addEventListener('DOMContentLoaded', loadMore);
    </script>
</x-app-layout>



