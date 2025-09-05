<div class="row g-4">
    <?php foreach ($products as $product) : ?>
        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card d-flex">
                <div class="product-img">
                    <img loading="lazy" src="<?= asset($product->thumbnail); ?>" alt="<?= htmlspecialchars($product->name); ?>">
                </div>

                <div>
                    <h3><?= htmlspecialchars($product->name); ?></h3>
                    <div class="d-flex justify-content-between text-muted">
                        <span>Category: <?= htmlspecialchars($product->parent->name ?? 'N/A'); ?></span> |
                        <p>Weight: <?= number_format($product->weight ?? 0, 2); ?> KG</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span><i class="fa-brands fa-whatsapp"></i> Whatsapp Us</span> |
                        <span><i class="fa fa-phone"></i> Call Us</span>
                    </div>
                </div>
            </div>
        </div><!-- End Service Card -->
    <?php endforeach; ?>
</div>

<!-- Pagination Links with Bootstrap Styling -->
<div class="d-flex justify-content-center mt-4">
    <?= $products->links('pagination::bootstrap-5'); ?>
</div>