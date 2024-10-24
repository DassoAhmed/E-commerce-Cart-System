$(document).ready(function() {
        // Add to cart
        $('.add-to-cart').click(function() {
            var productId = $(this).data('product-id');
            $.ajax({
                url: 'add_to_cart.php',
                method: 'POST',
                data: { product_id: productId },
                success: function(response) {
                    alert('Product added to cart!');
                },
                error: function() {
                    alert('Error adding product to cart.');
                }
            });
        });
    
        // Update quantity
        $('.update-quantity').click(function() {
            var productId = $(this).closest('.cart-item').data('product-id');
            var quantity = $(this).siblings('.quantity').val();
            updateCartItem(productId, quantity);
        });
    
        // Remove item
        $('.remove-item').click(function() {
            var productId = $(this).closest('.cart-item').data('product-id');
            removeCartItem(productId);
        });
    
        function updateCartItem(productId, quantity) {
            $.ajax({
                url: 'update_cart.php',
                method: 'POST',
                data: { product_id: productId, quantity: quantity },
                success: function(response) {
                    location.reload();
                },
                error: function() {
                    alert('Error updating cart.');
                }
            });
        }
    
        function removeCartItem(productId) {
            $.ajax({
                url: 'remove_from_cart.php',
                method: 'POST',
                data: { product_id: productId },
                success: function(response) {
                    location.reload();
                },
                error: function() {
                    alert('Error removing item from cart.');
                }
            });
        }
    });