
<footer id="footer" class="footer">

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename"><?=$profile['name']?></strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    Designed by <a href="https://fahad-jadiya.com/" target="_blank">Fahad Jadiya</a>
  </div>
</div>

</footer>
<script>
  function loadProducts(page = 1) {
    fetch(`/get-products?page=${page}`)
        .then(response => response.json())
        .then(data => {
            const productListing = document.getElementById("productListing");

            if (data.status) {
                productListing.innerHTML = data.html;
                addPaginationEventListeners();
            } else {
                productListing.innerHTML = "<p>No products found.</p>";
            }
        })
        .catch(error => {
            console.error("Error loading products:", error);
            document.getElementById("productListing").innerHTML = "<p>Error loading products.</p>";
        });
}

// Load products on page load
document.addEventListener("DOMContentLoaded", () => loadProducts());

// Function to handle pagination clicks dynamically
function addPaginationEventListeners() {
    document.querySelectorAll(".pagination a").forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const page = new URL(this.href).searchParams.get("page") || 1;
            loadProducts(page);
        });
    });
}

</script>
