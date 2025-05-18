<script type="text/javascript">
        var gk_isXlsx = false;
        var gk_xlsxFileLookup = {};
        var gk_fileData = {};
        function filledCell(cell) {
          return cell !== '' && cell != null;
        }
        function loadFileData(filename) {
        if (gk_isXlsx && gk_xlsxFileLookup[filename]) {
            try {
                var workbook = XLSX.read(gk_fileData[filename], { type: 'base64' });
                var firstSheetName = workbook.SheetNames[0];
                var worksheet = workbook.Sheets[firstSheetName];

                // Convert sheet to JSON to filter blank rows
                var jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1, blankrows: false, defval: '' });
                // Filter out blank rows (rows where all cells are empty, null, or undefined)
                var filteredData = jsonData.filter(row => row.some(filledCell));

                // Heuristic to find the header row by ignoring rows with fewer filled cells than the next row
                var headerRowIndex = filteredData.findIndex((row, index) =>
                  row.filter(filledCell).length >= filteredData[index + 1]?.filter(filledCell).length
                );
                // Fallback
                if (headerRowIndex === -1 || headerRowIndex > 25) {
                  headerRowIndex = 0;
                }

                // Convert filtered JSON back to CSV
                var csv = XLSX.utils.aoa_to_sheet(filteredData.slice(headerRowIndex)); // Create a new sheet from filtered array of arrays
                csv = XLSX.utils.sheet_to_csv(csv, { header: 1 });
                return csv;
            } catch (e) {
                console.error(e);
                return "";
            }
        }
        return gk_fileData[filename] || "";
        }
        </script><footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div>
                 <svg width="180" height="60" viewBox="0 0 180 60" xmlns="http://www.w3.org/2000/svg" class="h-12 mb-6">
                        <rect width="180" height="60" rx="8" fill="#111827"/>
                        <circle cx="30" cy="20" r="20" fill="#374151" opacity="0.8"/>
                        <circle cx="150" cy="40" r="15" fill="#374151" opacity="0.8"/>
                        <text x="50" y="35" font-family="Arial" font-size="20" font-weight="bold" fill="white">Sweet Delights</text>
                        <text x="30" y="35" font-family="Arial" font-size="24" fill="white">🍰</text>
                    </svg>
                <p class="text-gray-400 mb-6">Sweet Delights is a premium bakery in Sri Lanka, specializing in custom cakes, pastries, and desserts for all occasions.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="index.html" class="text-gray-400 hover:text-white transition">Home</a></li>
                    <li><a href="shop.html" class="text-gray-400 hover:text-white transition">Shop</a></li>
                    <li><a href="about.html" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="contact.html" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    <li><a href="faq.html" class="text-gray-400 hover:text-white transition">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-6">Categories</h3>
                <ul class="space-y-3">
                    <li><a href="categories.html#birthday" class="text-gray-400 hover:text-white transition">Birthday Cakes</a></li>
                    <li><a href="categories.html#wedding" class="text-gray-400 hover:text-white transition">Wedding Cakes</a></li>
                    <li><a href="categories.html#cupcakes" class="text-gray-400 hover:text-white transition">Cupcakes</a></li>
                    <li><a href="categories.html#pastries" class="text-gray-400 hover:text-white transition">Pastries</a></li>
                    <li><a href="categories.html#custom" class="text-gray-400 hover:text-white transition">Custom Cakes</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-6">Contact Us</h3>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start"><i class="fas fa-map-marker-alt mt-1 mr-3"></i><span>123 Galle Road, Colombo 03, Sri Lanka</span></li>
                    <li class="flex items-center"><i class="fas fa-phone-alt mr-3"></i><span>+94 11 234 5678</span></li>
                    <li class="flex items-center"><i class="fas fa-envelope mr-3"></i><span>info@sweetdelights.lk</span></li>
                    <li class="flex items-center"><i class="fas fa-clock mr-3"></i><span>Mon-Sat: 9AM - 7PM</span></li>
                </ul>
            </div>
        </div>
        <hr class="border-gray-800 mb-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 mb-4 md:mb-0">© 2025 Sweet Delights. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="privacy-policy.html" class="text-gray-500 hover:text-white transition">Privacy Policy</a>
                <a href="terms.html" class="text-gray-500 hover:text-white transition">Terms of Service</a>
                <a href="shipping.html" class="text-gray-500 hover:text-white transition">Shipping Policy</a>
            </div>
        </div>
    </div>
</footer>