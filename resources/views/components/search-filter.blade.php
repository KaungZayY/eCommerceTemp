<!-- Search & Filter -->
<div class="flex flex-row items-center justify-center w-full mt-2 mb-4" id="filterContainer">
    <input type="text"
        class="w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 mr-4"
        placeholder="Search . . .">
    <button
        class="px-4 py-2 bg-blue-500 text-white rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        Filter
    </button>
</div>
<script>
    var lastScrollTop = 0; // Variable to store the last scroll position
    var filterContainerOriginalTop = 0; // Variable to store the original top position of the filter container

    window.addEventListener('scroll', function() {
        var filterContainer = document.getElementById('filterContainer');
        var rect = filterContainer.getBoundingClientRect();
        var currentScrollTop = window.pageYOffset || document.documentElement
        .scrollTop; // Get current scroll position

        if (rect.top < 0) {
            // Scroll down: fix the container at the top
            filterContainer.classList.add('top-0', 'fixed');
        } else if (currentScrollTop < filterContainerOriginalTop) {
            // Scroll up to the original position: reset the position
            filterContainer.classList.remove('top-0', 'fixed');
        }

        lastScrollTop = currentScrollTop; // Update last scroll position
    });

    // Store the original top position of the filter container
    window.addEventListener('load', function() {
        var filterContainer = document.getElementById('filterContainer');
        filterContainerOriginalTop = filterContainer.offsetTop;
    });
</script>