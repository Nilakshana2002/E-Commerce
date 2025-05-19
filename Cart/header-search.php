<!-- Search Form for Header -->
<form id="header-search-form" action="search.php" method="GET" class="relative flex items-center">
    <div class="relative flex-1">
        <input 
            type="text" 
            id="header-search-input" 
            name="q" 
            placeholder="Search for delicious treats..." 
            class="w-full px-4 py-2 pl-10 rounded-l-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent"
        >
        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <button 
        type="submit" 
        class="bg-amber-600 hover:bg-amber-700  font-medium px-4 py-2 rounded-r-full transition-all flex items-center"
    >
        <span>Search</span>
    </button>
</form>
